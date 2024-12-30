<?php

namespace App\Http\Controllers;

use App\Models\Beasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function scholarships() {
        return response()->view('dashboard.scholarships');
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
        return response()->view('dashboard.notifications');
    }
}
