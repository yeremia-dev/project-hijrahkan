@extends('layout.main-layout')
@section('content')
    <div class="content-center brand">
        <img class="n-logo" src="{{ asset('img/logo1.png') }}" alt="">
        <h3 class="keterangan">Pilih salah satu untuk melanjutkan</h3>
        <div class="row justify-content-center y-row">
            <div class="col-lg-auto col-md-auto col-sm-12"><a href="/menu" class="btn btn-lg btn-success">Pindahkan Hutang</a></div>
            <div class="col-lg-auto col-md-auto col-sm-12"><a href="/investasi" class="btn btn-lg btn-success">Investasi</a></div>
        </div>
    </div>
@endsection
@section('style')
    <style>
        @media (min-width:219px) and (max-width: 449px){
            .brand .n-logo{
                width: 250px;
                margin-top: 40px;
            }
            .brand .keterangan{
                font-size: 1.6em;
                /*text-transform: uppercase;*/
                font-weight: 100;
                margin-top: -10px;
            }
            .btn{
                width: 100%;
            }
        }
        @media (min-width:450px) and (max-width: 767px){
            .brand .n-logo{
                width: 300px;
                margin-top: 50px;
            }
            .keterangan{
                margin-top: -20px;
            }
            .y-row{
                margin-top: 20px;
            }
            .btn{
                width: 80%;
            }
        }
        @media (min-width:768px){
            .brand .n-logo{
                width: 500px;
            }
            .y-row{
                margin-top: 20px;
            }
            .brand{
                margin-top: 50px;
            }
        }
        @media (min-width:991px){
            .brand{
                margin-top: 50px;
            }
        }
        @media (min-width:1200px){
            .brand .n-logo{
                width: 540px;
            }
            .y-row{
                margin-top: 20px;
            }
            .brand{
                margin-top: 100px;
            }
        }
    </style>
@endsection
