<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Kelas;
use Illuminate\Http\Request;

class JoinController extends Controller
{
    public function innerJoin()
    {
        $siswas = Siswa::join('kelas', 'siswas.id_kelas', '=', 'kelas.id_kelas')
            ->select('siswas.nama_siswa', 'kelas.nama_kelas')
            ->get();
        return view('join.innerjoin', compact('siswas')); // Ganti dengan nama view yang sesuai
    }

    public function leftJoin()
    {
        $kelas = Kelas::leftJoin('siswas', 'kelas.id_kelas', '=', 'siswas.id_kelas')
            ->select('kelas.id_kelas', 'kelas.nama_kelas')
            ->whereNull('siswas.id') // Hanya ambil kelas yang tidak memiliki siswa
            ->get();
        return view('join.leftjoin', compact('kelas')); // Ganti dengan nama view yang sesuai
    }
}
