
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PesanKontak;

class PesanKontakController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subjek' => 'required|string|max:255',
            'pesan' => 'required|string',
        ]);

        PesanKontak::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'subjek' => $request->subjek,
            'pesan' => $request->pesan,
        ]);

        return redirect('/')->with('success', 'Pesan berhasil dikirim!');
    }
}
