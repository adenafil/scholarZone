<?php

namespace App\Http\Controllers;

use App\Models\Beasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class HomePageController extends Controller
{
    public function index() {
        $beasiswas_header = Beasiswa::query()
            ->with('categories')
            ->inRandomOrder()
            ->take(3)
            ->get();

        $beasiswas_latest = Beasiswa::query()
            ->with('categories')
            ->where('end_scholarship_date', '>=', Carbon::now()->subDays(20)) // Filter tanggal
            ->inRandomOrder() // Randomize hasil
            ->take(6) // Ambil 6 data
            ->get();

        $beasiswas_upcoming = Beasiswa::query()
            ->with('categories')
            ->where('end_scholarship_date', '>=', Carbon::now()->subDays(20)) // Filter tanggal
            ->inRandomOrder() // Randomize hasil
            ->take(3) // Ambil 6 data
            ->get();

        return response()->view('homepage.homepage', compact('beasiswas_header', 'beasiswas_latest', 'beasiswas_upcoming'));
    }
}
