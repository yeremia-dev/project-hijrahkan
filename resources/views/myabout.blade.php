@extends('layout.main-layout')
@section('content')
    <div class="card col-lg-8 col-md-10 col-sm-12 col-12">
        <div class="row">
            <div class="col-lg-auto col-md-auto col-sm-12">
                <h2 class="card-title text-muted mt-4 text-left">Tentang Kami</h2>
            </div>
        </div>
        <hr>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <blockquote class="blockquote text-muted text-left">
                        <h5 style="font-weight: bold" class="judul">VISI</h5>
                        <p style="margin-top: -20px" class="isi">MELEPASKAN JERAT RIBA</p>

                        <h5 style="font-weight: bold" class="judul">MISI</h5>
                        <ol style="margin-top: -20px" class="isi">
                            <li>MENYALURKAN PINJAMAN BAIK</li>
                            <li>MENOLONG SAUDARA SESAMA MUSLIM UNTUK KELUAR DARI RIBA</li>
                            <li>MENOLONG SAUDARA SESAMA MUSLIM DALAM HUTANG PIUTANG</li>
                        </ol>

                        <p style="text-align: justify; " class="keterangan">BERANGKAT DARI KAMI YANG MEMILIKI HUTANG PADA BANK KONVENSIONAL YANG
                            MASIH MENGANUT SISTEM KONVENSIONAL DIMANA HUTANG PIUTANG MASIH DENGAN
                            SISTEM RIBA. KAMI MENCOBA TAWARKAN JALAN KELUAR ATAS HUTANG PARA SAUDARA
                            SAUDARI KAMI YANG MASIH TERSISA DI BANK KONVENSIONAL YANG MANA MASIH MENGANUT
                            SISTEM RIBA. KAMI PERCAYA BAHWA PASTI ADA JALAN UNTUK KELUAR DARI RIBA. DISAAT
                            SEMUA ORANG PESIMIS AKAN HUTANGNYA YANG TIDAK BISA KELUAR DARI RIBA. DAN HANYA
                            PASRAH PADA KEADAAN. KAMI MENCOBA MENGHIMPUN DAN MENGAKOMODIR PARA SAUDARA
                            SAUDARI KAMI YANG TERJERAT RIBA DAN SANGAT INGIN KELUAR DARI SISTEM RIBA.
                            KAMI MENAWARKAN SISTEM YANG LEBIH MENGARAH PADA HUKUM-HUKUM YANG ISLAM AJARKAN
                            MENGENAI HUTANG PIUTANG. AGAR RASA AMAN DAN TENTRAM MENYERTAI HIDUP KITA TANPA
                            ADA DOSA RIBA YANG KITA PERBUAT. SEMUA INI DAPAT BERJALAN DENGAN BAIK DAN LANCAR
                            APABILA KITA SEMUA BERSATU UNTUK KELUAR DARI SISTEM YANG MENJERAT INI. SIAPAKAH
                            YANG MAU MEMINJAMKAN KEPADA ALLAH PINJAMAN YANG BIAK, MAKA ALLAH AKAN MELIPAT
                            GANDAKAN (BALASAN) PINJAMAN ITU UNTUKNYA, DAN DIA AKAN MEMPEROLEH PAHALA YANG
                            BANYAK. (QS AL HADID : 2 ). DARI AYAT TERSEBUT SUDAH SANGAT JELAS BAHWA ALLAH
                            AKAN MELIPAT GANDAKAN PINJAMAN BAIK KITA DAN AKAN MENDAPATKAN PAHALA YANG BANYAK.
                            YANG KAMI CARI ADALAH KEBERKAHAN.
                        </p>

                    </blockquote>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('style')
    <style>
        @media (min-width:219px) and (max-width: 449px){
            .keterangan{
                font-size: 12px;
            }
            .judul{
                font-size: 18px;
            }
            .isi{
                font-size: 13px;
            }
        }
        @media (min-width:450px) and (max-width: 767px){
            .keterangan{
                font-size: 15px;
            }
        }
        @media (min-width:768px) and (max-width: 990px){

            .keterangan{
                font-size: 15px;
            }

        }
        @media (min-width:991px) and (max-width: 1199px){

            .keterangan{
                font-size: 15px;
            }

        }
        @media (min-width:1200px){

            .keterangan{
                font-size: 15px;
            }

        }
    </style>
@endsection
