@extends('layout.main-layout')
@section('content')
    <div class="conten-center">
        <h1 class="keterangan">Pilih Salah Satu</h1>
        <div class="row justify-content-center">
            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-12 y-col2 ">
                <a href="/menu/kpr" class="btn btn-success btn-lg y-button2">KPR</a>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-12">
                <a href="/menu/mobil" class="btn btn-success btn-lg y-button">Mobil</a>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-12">
                <a href="/menu/motor" class="btn btn-success btn-lg y-button">Motor</a>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-12 y-col">
                <a href="/menu/goods" class="btn btn-success btn-lg y-button3">Consumer Goods</a>
            </div>
        </div>
    </div>

@endsection
@section('style')
    <style>
        .keterangan{
            font-size: 3.4em;
            /*text-transform: uppercase;*/
            font-weight: 100;
            margin-top: 100px;
        }
        @media (min-width:219px) and (max-width: 449px){
            .btn{
                width: 100%;
            }
            .y-button{
                padding: 20px 58px 20px 58px
            }
            .y-button2{
                padding: 20px 60px 20px 60px;
            }
            .y-button3{
                padding: 20px 40px 20px 40px ;
            }
            .keterangan{
                font-size: 3em;
                /*text-transform: uppercase;*/
                font-weight: 100;
                margin-top: 20px;
            }
        }
        @media (min-width:450px) and (max-width: 767px){
            .btn{
                width: 100%;
            }
            .y-button{
                padding: 20px 58px 20px 58px
            }
            .y-button2{
                padding: 20px 60px 20px 60px;
            }
            .y-button3{
                padding: 20px 40px 20px 40px ;
            }
            .keterangan{
                font-size: 3em;
                /*text-transform: uppercase;*/
                font-weight: 100;
                margin-top: 20px;
            }
        }
        @media (min-width:768px) and (max-width: 990px){
            .y-button{
                padding: 20px 58px 20px 58px
            }
            .y-button2{
                padding: 20px 62px 20px 62px;
            }
            .y-button3{
                padding: 10px 40px 10px 40px ;
            }

        }
        @media (min-width:991px) and (max-width: 1199px){
            .y-button{
                padding: 20px 58px 20px 58px
            }
            .y-button2{
                padding: 20px 66px 20px 66px;
            }
            .y-button3{
                padding: 10px 40px 10px 40px ;
            }
            .y-col{
                margin-left: 10px;
            }
            .y-col2{
                margin-right: 8px;
            }
        }
        @media (min-width:1200px){
            .y-button{
                padding: 20px 58px 20px 58px
            }
            .y-button2{
                padding: 20px 63px 20px 63px
            }
            .y-button3{
                padding: 10px 40px 10px 40px ;
            }
            .y-col{
                margin-left: 0px;
            }
        }
    </style>
@endsection
