<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel - Bele Kopi Swiss</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-gray-100 p-8">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-2xl font-bold mb-6 text-cyan-400">PANEL CONTROL JADWAL PERTANDINGAN</h1>

        @if(session('success'))
            <div class="bg-green-600 text-white p-3 rounded mb-4">{{ session('success') }}</div>
        @endif

        <!-- Form Tambah Data (Create) -->
        <form action="{{ route('admin.schedule.store') }}" method="POST" class="bg-gray-800 p-6 rounded-lg mb-8 border border-gray-700">
            @csrf
            <h2 class="text-lg font-semibold mb-4 text-white">Tambah Jadwal Baru</h2>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm mb-1">Tim A</label>
                    <input type="text" name="team_a" class="w-full p-2 bg-gray-700 rounded border border-gray-600 text-white" required>
                </div>
                <div>
                    <label class="block text-sm mb-1">Tim B</label>
                    <input type="text" name="team_b" class="w-full p-2 bg-gray-700 rounded border border-gray-600 text-white" required>
                </div>
                <div>
                    <label class="block text-sm mb-1">Babak / Round</label>
                    <input type="text" name="round" placeholder="Contoh: Semifinal" class="w-full p-2 bg-gray-700 rounded border border-gray-600 text-white" required>
                </div>
                <div>
                <label class="block text-sm mb-1">Tanggal & Jam Tanding</label>
                <input type="datetime-local" name="match_time" class="w-full p-2 bg-gray-700 rounded border border-gray-600 text-white" required>
                </div>
            </div>
            <button type="submit" class="mt-4 bg-cyan-600 hover:bg-cyan-700 text-white px-4 py-2 rounded font-bold">SIMPAN JADWAL</button>
        </form>

        <!-- List Data dengan Update & Delete -->
        <div class="bg-gray-800 p-6 rounded-lg border border-gray-700">
            <h2 class="text-lg font-semibold mb-4 text-white">Daftar Jadwal Saat Ini</h2>
            <div class="space-y-4">
                @foreach($schedules as $item)
                    <div class="p-4 bg-gray-700 rounded flex flex-col md:flex-row justify-between items-center gap-4">
                        <form action="{{ route('admin.schedule.update', $item->id) }}" method="POST" class="flex flex-wrap gap-2 items-center flex-1">
                            @csrf
                            @method('PUT')
                            <input type="text" name="team_a" value="{{ $item->team_a }}" class="p-1 bg-gray-600 rounded text-sm w-28">
                            <span class="text-xs text-yellow-400 font-bold">VS</span>
                            <input type="text" name="team_b" value="{{ $item->team_b }}" class="p-1 bg-gray-600 rounded text-sm w-28">
                            <input type="text" name="round" value="{{ $item->round }}" class="p-1 bg-gray-600 rounded text-sm w-28">
                            <input type="datetime-local" name="match_time" value="{{ \Carbon\Carbon::parse($item->match_time)->format('Y-m-d\TH:i') }}" class="p-1 bg-gray-600 rounded text-sm text-white">
                            
                            <select name="status" class="p-1 bg-gray-600 rounded text-sm text-white">
                                <option value="UPCOMING" {{ $item->status == 'UPCOMING' ? 'selected' : '' }}>UPCOMING</option>
                                <option value="LIVE" {{ $item->status == 'LIVE' ? 'selected' : '' }}>LIVE</option>
                                <option value="FINISHED" {{ $item->status == 'FINISHED' ? 'selected' : '' }}>FINISHED</option>
                            </select>

                            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-2 py-1 rounded text-xs">Update</button>
                        </form>

                        <!-- Tombol Hapus (Delete) -->
                        <form action="{{ route('admin.schedule.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded text-xs">Hapus</button>
                        </form>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</body>
</html>