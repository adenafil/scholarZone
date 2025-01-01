<?php

namespace App\Http\Controllers;

use App\Models\ApplyBeasiswa;
use App\Models\Beasiswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function overview() {
        $today = Carbon::today();
        $total_beasiswa_sma = DB::table('beasiswa_category')
            ->join('beasiswas', 'beasiswa_category.beasiswa_id', '=', 'beasiswas.id')
            ->where('beasiswa_category.category_id', 1)
            ->whereDate('beasiswas.end_scholarship_date', '>=', $today)
            ->count();
        $total_beasiswa_s1 =  DB::table('beasiswa_category')
            ->join('beasiswas', 'beasiswa_category.beasiswa_id', '=', 'beasiswas.id')
            ->where('beasiswa_category.category_id', 2)
            ->whereDate('beasiswas.end_scholarship_date', '>=', $today)
            ->count();
        $total_beasiswa_s2 =  DB::table('beasiswa_category')
            ->join('beasiswas', 'beasiswa_category.beasiswa_id', '=', 'beasiswas.id')
            ->where('beasiswa_category.category_id', 3)
            ->whereDate('beasiswas.end_scholarship_date', '>=', $today)
            ->count();
        $total_beasiswa_s3 =  DB::table('beasiswa_category')
            ->join('beasiswas', 'beasiswa_category.beasiswa_id', '=', 'beasiswas.id')
            ->where('beasiswa_category.category_id', 4)
            ->whereDate('beasiswas.end_scholarship_date', '>=', $today)
            ->count();
        return view('dashboard.overview', compact('total_beasiswa_sma', 'total_beasiswa_s1', 'total_beasiswa_s2', 'total_beasiswa_s3'));
    }

    public function applications(Request $request) {

        if ($request->has('search')) {
            $applications = ApplyBeasiswa::query()
                ->join('beasiswas', 'apply_beasiswas.beasiswa_id', '=', 'beasiswas.id') // Sesuaikan nama tabel dan kolom
                ->where('beasiswas.title', 'like', '%' . $request->get('search') . '%')
                ->select('apply_beasiswas.*') // Pilih kolom yang diinginkan
                ->paginate(6);
        } else {
            $applications = ApplyBeasiswa::query()->paginate(6);
        }


        return response()->view('dashboard.applications', compact('applications'));
    }

    public function removed_applications(Request $request, $id) {
        ApplyBeasiswa::query()->where('id', $id)->delete();
        alert()->success('Success!','Application Deleted Successfully');
        return back();

    }

    public function scholarships(Request $request) {
        $today = Carbon::today();

        if ($request->has('search')) {
            $scholarships = Beasiswa::query()
                ->whereDate('beasiswas.end_scholarship_date', '>=', $today)
                ->where('title', 'like', '%' . $request->get('search') . '%')
                ->paginate(6);
        } else {
            $scholarships = Beasiswa::query()
                ->whereDate('beasiswas.end_scholarship_date', '>=', $today)
                ->paginate(6);
        }

        return response()->view('dashboard.scholarship', compact('scholarships'));
    }

    public function apply_scholarship(Request $request, $id) {
        $beasiswa = Beasiswa::query()->where('id', $id)->first();
        $user = User::findOrFail(auth()->user()->id);
        // Gunakan upsert dengan dua parameter
        ApplyBeasiswa::upsert(
            [
                'user_id' => $user->id,
                'beasiswa_id' => $beasiswa->id,
            ],
            ['user_id', 'beasiswa_id'],
            ['updated_at']
        );

        return redirect($beasiswa->enroll_link);
    }

    public function documents() {
        $user = auth()->user();
        return response()->view('dashboard.documents', compact('user'));
    }

    public function putDocumentsPersonalInformation(Request $request) {

        $user = User::findOrFail(auth()->user()->id);
        $user->update($request->all());
        alert()->success('Success!','Personal Information Saved Successfully');
        return back();
    }

    public function putDocumentsEducationInformation(Request $request) {
        $user = User::findOrFail(auth()->user()->id);
        if ($request->hasFile('picture_url')) {
            $data = $request->all();
            $file = $request->file('student_id_card');
            $filePath = $file->store('student_id_cards'); // Simpan di folder public/student_id_cards
            $data['picture_url'] = $filePath;
            $user->update($data);
            alert()->success('Success!','Education Information Saved Successfully');
            return back();
        }
        $user->update($request->all());
        alert()->success('Success!','Education Information Saved Successfully');
        return back();
    }

    public function putDocument(Request $request) {
        $user = User::findOrFail(auth()->user()->id);
        $data = $request->all();

        if (isset($data['kartu_keluarga'])) {
            $file = $request->file('kartu_keluarga');
            $filePath = $file->store('documents'); // Simpan di folder public/student_id_cards
            $data['kartu_keluarga'] = $filePath;
        }

        if (isset($data['transkrip_nilai_terakhir'])) {
            $file = $request->file('transkrip_nilai_terakhir');
            $filePath = $file->store('documents'); // Simpan di folder public/student_id_cards
            $data['transkrip_nilai_terakhir'] = $filePath;
        }

        if (isset($data['ijazah_terakhir'])) {
            $file = $request->file('ijazah_terakhir');
            $filePath = $file->store('documents'); // Simpan di folder public/student_id_cards
            $data['ijazah_terakhir'] = $filePath;
        }

        if (isset($data['portofolio'])) {
            $file = $request->file('portofolio');
            $filePath = $file->store('documents'); // Simpan di folder public/student_id_cards
            $data['portofolio'] = $filePath;
        }

        $user->update($data);
        alert()->success('Success!','Attachment of Supporting Documents Saved Successfully');
        return back();

    }

    public function help() {
        return response()->view('dashboard.help');
    }

    public function profile() {
        $user = User::findOrFail(auth()->user()->id);

        return response()->view('dashboard.profile', compact('user'));
    }

    public function putProfile(Request $request) {
        $user = User::findOrFail(auth()->user()->id);
        $data = $request->all();

        if (isset($data['picture_url'])) {
            $file = $request->file('picture_url');
            $filePath = $file->store('profile'); // Simpan di folder public/student_id_cards
            $data['picture_url'] = $filePath;
        }

        $user->update($data);
        alert()->success('Success!','Personal Information Saved Successfully');
        return back();

    }

    public function notifications() {
        $today = Carbon::today();
        $scholarships = Beasiswa::query()
            ->whereDate('end_scholarship_date', '>=', $today) // Beasiswa yang belum melewati tanggal hari ini
            ->paginate(3);

        return response()->view('dashboard.notifications', compact('scholarships'));
    }
}
