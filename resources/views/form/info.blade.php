@extends('layout.main-layout')
@section('content')
    <div class="card col-lg-4 col-md-6 col-sm-12 col-12">
        <div class="card-body">
            <h3 class="card-title text-muted">Info Lebih Lanjut</h3>
            <h6 class="card-subtitle mb-2 text-muted">Isi form dibawah ini untuk melanjutkan</h6>
            <hr>
            {{-- form--}}
            @if (session('status'))
                <div class="alert alert-primary">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ route('info.store') }}" class="justify-content-start" method="POST">
                @csrf
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa fa-user-circle"></i></div>
                    </div>
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" required>
                </div>

                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa fa-phone" aria-hidden="true"></i></div>
                    </div>
                    <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="Nomor Telephone" required>
                </div>

                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                    </div>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                </div>

                <button type="submit" class="btn btn-success">Simpan</button>

                <div class="input-group">
                    <p class="text-muted" style="font-size: 11px; font-weight: bold">Contact Us :</p>
                </div>
                <div class="input-group">
                    <p class="text-muted" style="font-size: 11px; margin-top: -20px; margin-bottom: -30px; font-weight: bold">admin@hijrahkan.com</p>
                </div>
            </form>


        </div>
    </div>
    <!-- Autonumeric js -->
    <script src="https://cdn.jsdelivr.net/npm/autonumeric@4.1.0"></script>
    <script>
        new AutoNumeric('#sisa_cicilan', {
            decimalPlace: '2',
            digitGroupSeparator: '.',
            decimalCharacter: ',',
        });
        new AutoNumeric('#besar_cicilan', {
            decimalPlace: '2',
            digitGroupSeparator: '.',
            decimalCharacter: ',',
        });
    </script>
@endsection
@section('style')
    <style>
        .card{
            margin-top: 15px;
        }

    </style>
@endsection
