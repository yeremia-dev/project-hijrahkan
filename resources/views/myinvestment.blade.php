@extends('layout.main-layout')
@section('content')
    <div class="card col-lg-8 col-md-10 col-sm-12 col-12">
{{--        <h2 class="card-title text-muted mt-4">Investment Flow</h2>--}}
{{--        <hr>--}}
        <img src="{{ asset('img/flow_revisi.jpeg') }}" class="mt-5 mb-3" width="400px">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <blockquote class="blockquote text-muted text-left">
                        <ol>
                            <li>INVESTOR INVESTASI KE HIJRAHKAN.COM UNTUK INVESTASI PADA TAKE OVER CICILAN ORANG YANG BERHUTANG PADA BANK / LEASING.
                            </li>
                            <li>HIJRAHKAN.COM MEMBAYARKAN UTANGNYA SI KREDITUR.
                            </li>
                            <li>KREDITUR CICIL HUTANG KE HIJRAHKAN.COM
                            </li>
                            <li>SURAT-SURAT BERHARGA AKAN DI SIMPAN HIJRAHKAN.COM SEBAGAI JAMINAN ATAS HUTANG.
                            </li>
                            <li>INVESTOR AKAN MENDAPATKAN KEUNTUNGAN BAGI HASIL YANG DI DAPAT SETIAP BULANNYA ATAU SETIAP TAHUNNYA DARI HIJRAHKAN.COM
                            </li>
                        </ol>
                    </blockquote>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-auto col-md-auto col-sm-12">
                    <a href="/investasi/info" class="btn btn-success y-button">Informasi Lebih Lanjut</a>
                </div>
            </div>

        </div>
    </div>
@endsection
@section('style')
    <style>
        @media (min-width:219px) and (max-width: 449px){
            .y-button{
                width: 100%;
            }

        }
        @media (min-width:450px) and (max-width: 767px){

        }
        @media (min-width:768px) and (max-width: 990px){


        }
        @media (min-width:991px) and (max-width: 1199px){

        }
        @media (min-width:1200px){

        }
    </style>
@endsection
