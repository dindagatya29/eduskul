@extends('layouts.app')

@section('title', 'Pendaftaran Akun')

@section('content')
<div class="container mx-auto p-4">
    <div class="card max-w-2xl mx-auto shadow-sm rounded-3xl">
        <div class="card-header text-start">
            <h2 class="card-title text-2xl font-bold">Pendaftaran Akun</h2>
        </div>
        <div class="card-body p-5">
            <div style="display: flex; justify-content: start; align-items: center;">
                <div style="text-align: center; margin: 0 20px;">
                    <div style="width: 40px; height: 40px; background-color: #4caf50; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: bold; font-size: 20px;">1</div>
                    <div>Data Diri</div>
                </div>
                <div style="width: 100px; height: 2px; background-color: #4caf50;"></div>
                <div style="text-align: center; margin: 0 20px;">
                    <div style="width: 40px; height: 40px; background-color: #ccc; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: bold; font-size: 20px;">2</div>
                    <div>Pilih Paket</div>
                </div>
                <div style="width: 100px; height: 2px; background-color: #4caf50;"></div>
                <div style="text-align: center; margin: 0 20px;">
                    <div style="width: 40px; height: 40px; background-color: #ccc; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: bold; font-size: 20px;">3</div>
                    <div>Pembayaran</div>
                </div>
            </div>

            <form method="POST" action="{{ route('register.submit') }}">
                @csrf
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="name" class="form-label">Nama lengkap*</label>
                        <input id="name" type="text" class="form-control" name="name" required>
                    </div>
                    <div class="col-md-6">
                        <label for="school" class="form-label">Nama Sekolah/Instansi*</label>
                        <input id="school" type="text" class="form-control" name="school" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email Kerja*</label>
                        <input id="email" type="email" class="form-control" name="email" required>
                    </div>
                    <div class="col-md-6">
                        <label for="whatsapp" class="form-label">Nomor WhatsApp*</label>
                        <input id="whatsapp" type="tel" class="form-control" name="whatsapp" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="password" class="form-label">Password*</label>
                        <div class="input-group">
                            <input id="password" type="password" class="form-control" name="password" required>
                            <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                                <i class="fa fa-eye"></i>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="password-confirm" class="form-label">Masukkan Password Lagi*</label>
                        <div class="input-group">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            <button class="btn btn-outline-secondary" type="button" id="togglePasswordConfirm">
                                <i class="fa fa-eye"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Updated button style for "Lanjut" -->
                <div class="text-end pt-4">
                    <button type="submit" class="btn btn-lg" style="background-color: #00C853; color: white; border-radius: 40px; padding: 10px 60px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);">
                        Lanjut
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    function togglePasswordVisibility(inputId, buttonId) {
        const input = document.getElementById(inputId);
        const button = document.getElementById(buttonId);
        button.addEventListener('click', function () {
            const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
            input.setAttribute('type', type);
            this.querySelector('i').classList.toggle('fa-eye');
            this.querySelector('i').classList.toggle('fa-eye-slash');
        });
    }

    togglePasswordVisibility('password', 'togglePassword');
    togglePasswordVisibility('password-confirm', 'togglePasswordConfirm');
</script>
@endpush
