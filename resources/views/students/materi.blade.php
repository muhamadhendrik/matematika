@extends('layouts.students.app')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h2 style="color: cornflowerblue;margin-bottom:15px;text-align:center;">Apa itu Statistika ?
                    </h2>
                    <p style="text-align:justify;"><img src="{{ asset('assets/front/img/statistika.jpg') }}"
                            class="img-fluid" alt="" style="width: 500px;height:325px;float:inherit;">
                    <h5>
                        Statistika adalah sebuah ilmu yang mempelajari bagaimana cara merencanakan,
                        mengumpulkan, menganalisis, lalu menginterpretasikan, dan akhirnya mempresentasikan
                        data. Singkatnya, statistika adalah ilmu yang bersangkutan dengan suatu data.

                        <h5>Dua kategori besar dalam ilmu statistika. Apa sajakah itu? Check this out!

                            <h5 style="color: cornflowerblue">1. Statistika deskriptif<h5>
                                    <h5>Statistika deskriptif adalah metode untuk mengorganisasikan, meringkas,
                                        dan menyajikan suatu informasi. Contoh statistika ddekriptif adalah data
                                        yang disajikan dalam bentuk histogram, diagram, dan lingkaran. Barulah
                                        kemudian dicari rata-rata, simpangan baku, median, modus, dan
                                        sebagainya.
                                    </h5>

                                    <h5 style="color: cornflowerblue">1. Statistika inferensial<h5>
                                            <h5>Statistika inferensial adalah metode untuk menyatakan
                                                keterkaitan antara kesimpulan dan populasi yang diteliti
                                                berdasarkan informasi dari sampel. Contoh statistika inferensial
                                                bisa kamu lihat saat quick count pemilu atau pilkada.
                                            </h5>
                                        </h5>
                                    </h5>
                                    <br>
                                    <a href="{{ url('/') }}" class="btn btn-danger" role="button"
                                        aria-pressed="true">Kembali</a>
                                    <a href="{{ url('/soal') }}" class="btn btn-primary" role="button"
                                        aria-pressed="true">Latihan</a>
                </div>
            </div>
        </div>
    </div>
@endsection
