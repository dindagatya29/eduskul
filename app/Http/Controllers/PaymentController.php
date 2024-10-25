<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    // Method untuk menampilkan halaman pembayaran
    public function show(Request $request)
    {
        // Misalnya paket dan total_bayar diambil dari sesi atau logika lain
        $total_bayar = 100000; // Ini contoh, bisa dari database atau logika bisnis lain
        return view('payment', compact('total_bayar'));
    }

    // Method untuk memproses pembayaran
    public function process(Request $request)
    {
        // Logika pemrosesan pembayaran, misalnya memanggil API payment gateway

        // Setelah berhasil, redirect ke halaman sukses atau halaman lain
        return redirect()->route('payment.success');
    }
}
