@extends('layouts.app')

@section('title', 'Detail Pembayaran')

@section('content')
<div class="container mx-auto p-4">
    <div class="card max-w-2xl mx-auto shadow-sm rounded-lg p-4">
        <h2 class="text-2xl font-bold text-start mb-4">Pendaftaran Akun</h2>
        <div class="card-body p-4">
            <div style="display: flex; justify-content: start; align-items: center;">
                <div style="text-align: center; margin: 0 20px;">
                    <div style="width: 40px; height: 40px; background-color: #4caf50; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: bold; font-size: 20px;">1</div>
                    <div>Data Diri</div>
                </div>
                <div style="width: 100px; height: 2px; background-color: #4caf50;"></div>
                <div style="text-align: center; margin: 0 20px;">
                    <div style="width: 40px; height: 40px; background-color: #ccc; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: bold; font-size: 20px;">2</div>
                    <div>Pembayaran</div>
                </div>
            </div>
        

        <!-- Payment Details Section -->
        <div class="container mx-auto p-2">
            <div class="card max-w-2xl mx-auto shadow-sm rounded-lg p-4">
                <div class="d-flex justify-content-between align-items-start">
                    <div class="payment-details" style="flex: 2; margin-right: 1rem;">
                        <h3 style="font-size: 1.25rem; color: #333; margin-bottom: 1rem;">Detail Pembayaran</h3>
                        <hr style="margin: 1rem 0; border: 1px solid #ddd;">
                        <!-- Payment Info -->
                        <div class="detail-item" style="display: flex; justify-content: space-between; padding: 0.5rem 0; border-bottom: 1px solid #eee;">
                            <span class="label" style="color: #666;">Nama:</span>
                            <span class="value" style="color: #333;">Daniel Hamilton</span>
                        </div>
                        <div class="detail-item" style="display: flex; justify-content: space-between; padding: 0.5rem 0; border-bottom: 1px solid #eee;">
                            <span class="label" style="color: #666;">Nomor Transaksi:</span>
                            <span class="value" style="color: #333;">UdSkl123457890</span>
                        </div>
                        <div class="detail-item" style="display: flex; justify-content: space-between; padding: 0.5rem 0; border-bottom: 1px solid #eee;">
                            <span class="label" style="color: #666;">Tanggal:</span>
                            <span class="value" style="color: #333;">12 September 2024</span>
                        </div>
                        <div class="detail-item" style="display: flex; justify-content: space-between; padding: 0.5rem 0; border-bottom: 1px solid #eee;">
                            <span class="label" style="color: #666;">Batas Transfer:</span>
                            <span class="value" style="color: #333;">12 September 2024 - 12:00 WIB</span>
                        </div>
                        <div class="detail-item total" style="display: flex; justify-content: space-between; padding: 0.5rem 0;">
                            <span class="label" style="font-weight: bold; color: #333;">Total Pembayaran:</span>
                            <span class="value" style="font-weight: bold; color: #007bff;">Rp 1,250,000</span>
                        </div>
                    </div>
        
                    <!-- Notification Message Container -->
                    <div class="notification-container" style="flex: 1.5; margin-left: 1rem; border: 1px solid #ddd; padding: 1rem; border-radius: 8px; background-color: #f9f9f9;">
                        <p class="notification text-muted mt-0" style="font-weight: bold;">
                            Kami telah mengirim pesan notifikasi pembayaran pada nomor WhatsApp Anda. Lakukan pembayaran sesuai dengan jumlah tertera. Terimakasih.
                        </p>
                        <p class="notification text-muted mt-2" style="margin: 0;">
                            Belum Mendapatkan notifikasi WA?
                        </p>
                    </div>
                </div>
        
                <!-- Resend Button -->
                <div class="text-end pt-4">
                    <button type="submit" class="btn btn-lg" style="background-color: #00C853; color: white; border-radius: 40px; padding: 10px 60px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);">
                        Kirim Ulang Notifikasi
                    </button>
                </div>
            </div>
        </div>
        
@endsection
