<?php

namespace App\Http\Controllers;
use App\Models\MatchSchedule;

use Illuminate\Http\Request;

class TournamentController extends Controller
{
    // Menampilkan Landing Page Utama beserta Jadwal dari DB
    public function index()
    {
        $schedules = MatchSchedule::orderBy('match_time', 'asc')->get();
        return view('index', compact('schedules'));
    }

    // Menampilkan Halaman Panel Admin Jadwal
    public function adminPanel()
    {
        $schedules = MatchSchedule::orderBy('id', 'desc')->get();
        return view('admin.schedule', compact('schedules'));
    }

    // Menyimpan Jadwal Baru (Create)
    public function store(Request $request)
    {
        $request->validate([
            'team_a' => 'required',
            'team_b' => 'required',
            'round' => 'required',
            'match_time' => 'required',
        ]);

        MatchSchedule::create($request->all());
        return redirect()->back()->with('success', 'Jadwal berhasil ditambahkan!');
    }

    // Memperbarui Jadwal (Update)
    public function update(Request $request, $id)
    {
        $schedule = MatchSchedule::findOrFail($id);
        $schedule->update($request->all());
        return redirect()->back()->with('success', 'Jadwal berhasil diperbarui!');
    }

    // Menghapus Jadwal (Delete)
    public function destroy($id)
    {
        $schedule = MatchSchedule::findOrFail($id);
        $schedule->delete();
        return redirect()->back()->with('success', 'Jadwal berhasil dihapus!');
    }
}
