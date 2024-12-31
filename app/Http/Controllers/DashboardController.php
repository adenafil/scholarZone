<?php

namespace App\Http\Controllers;

use App\Models\Beasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function overview() {
        $total_beasiswa_sma =  DB::table('beasiswa_category')
            ->where('category_id', 1)
            ->count();
        $total_beasiswa_s1 =  DB::table('beasiswa_category')
            ->where('category_id', 2)
            ->count();
        $total_beasiswa_s2 =  DB::table('beasiswa_category')
            ->where('category_id', 3)
            ->count();
        $total_beasiswa_s3 =  DB::table('beasiswa_category')
            ->where('category_id', 4)
            ->count();

        return view('dashboard.overview', compact('total_beasiswa_sma', 'total_beasiswa_s1', 'total_beasiswa_s2', 'total_beasiswa_s3'));
    }

    public function applications() {
        return response()->view('dashboard.applications');
    }

    public function scholarships(Request $request) {

        if ($request->has('search')) {
            $scholarships = Beasiswa::query()
                ->where('title', 'like', '%' . $request->get('search') . '%')
                ->paginate(6);
        } else {
            $scholarships = Beasiswa::query()->paginate(6);
        }

        return response()->view('dashboard.scholarship', compact('scholarships'));
    }

    public function apply_scholarships($id) {
        $beasiswa = Beasiswa::query()->where('id', $id)->first();

        $link_apply = $beasiswa->link_apply;
    }

    public function documents() {
        return response()->view('dashboard.documents');
    }

    public function help() {
        return response()->view('dashboard.help');
    }

    public function profile() {
        return response()->view('dashboard.profile');
    }

    public function notifications() {
        $today = Carbon::today();
        $scholarships = Beasiswa::query()
            ->whereDate('end_scholarship_date', '>=', $today) // Beasiswa yang belum melewati tanggal hari ini
            ->paginate(3);

        return response()->view('dashboard.notifications', compact('scholarships'));
    }
}
