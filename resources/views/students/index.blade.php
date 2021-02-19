@extends('layouts.students.app')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <p style="text-align:justify;"><img src="{{ asset('assets/front/img/animasi_matematika.jpg') }}"
                            class="img-fluid" alt="" style="width: 500px;height:325px;float:left;">
                    <h2 style="color: cornflowerblue;margin-bottom:15px">Apa itu Matematika ?</h2>
                    <h6 style="line-height: 1.5">Secara etimologi, matematika berasal dari bahasa Yunani Kuno
                        (Ancient Greek) yaitu máthēma yang berarti pengetahuan, ilmu pengetahuan, dan belajar.
                        Matematika adalah ilmu pengetahuan tentang kuantitas, struktur, ruang, dan perubahan.
                    </h6>
                    <h6 style="line-height: 1.5">Disini kita bisa belajar 15 Materi Matematika yang tertera
                        dibawah. Silahkan melakukan pembelajaran ataupun mengerjakan soal, dengan mengklik materi
                        yang telah tersedia dibawah ini...</h6>
                    </p>
                    </h6>
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="margin-top: 50px;">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">

                        <div class="card card-statistic-1">
                            <div class="card-icon bg-info">
                                <i class="fa fa-superscript text-white" style="font-size: 2rem;"></i>
                            </div>
                            <div class="card-wrap mx-auto">
                                <div class="card-header">
                                    <a href="{{ url('/materi') }}">
                                        <h4>Bilangan Pangkat & Akar</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">

                        <div class="card card-statistic-1">
                            <div class="card-icon bg-danger">
                                <i class="far fa-chart-bar text-white" style="font-size: 2rem;"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <a href="{{ url('/materi') }}">
                                        <h4>Persamaan & Pertidaksamaan Linier</h4>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">

                        <div class="card card-statistic-1">
                            <div class="card-icon bg-warning">
                                <i class="fas fa-square-root-alt text-white" style="font-size: 2rem;"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <a href="{{ url('/materi') }}">
                                        <h4>Matriks</h4>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">

                        <div class="card card-statistic-1">
                            <div class="card-icon bg-success">
                                <i class="fas fa-sort-numeric-up" style="font-size: 2rem;"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <a href="{{ url('/materi') }}">
                                        <h4>Fungsi</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">

                        <div class="card card-statistic-1">
                            <div class="card-icon bg-danger">
                                <i class="fas fa-arrows-alt-h text-white" style="font-size: 2rem;"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <a href="{{ url('/materi') }}">
                                        <h4>Barisan & Deret</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">

                        <div class="card card-statistic-1">
                            <div class="card-icon bg-warning">
                                <i class="fas fa-chart-line text-white" style="font-size: 2rem;"></i></fas>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <a href="{{ url('/materi') }}">
                                        <h4>Program Linier</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">

                        <div class="card card-statistic-1">
                            <div class="card-icon bg-success">
                                <i class="fas fa-ruler-combined text-white" style="font-size: 2rem;"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <a href="{{ url('/materi') }}">
                                        <h4>Trigonometri</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">

                        <div class="card card-statistic-1">
                            <div class="card-icon bg-info">
                                <i class="fas fa-shapes text-white" style="font-size: 2rem;"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <a href="{{ url('/materi') }}">
                                        <h4>Geometri</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-warning">
                                <i class="fab fa-accusoft text-white" style="font-size: 2rem;"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <a href="{{ url('/materi') }}">
                                        <h4>Transformasi</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">

                        <div class="card card-statistic-1">
                            <div class="card-icon bg-success">
                                <i class="fas fa-adjust text-white" style="font-size: 2rem;"></i></fas>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <a href="{{ url('/materi') }}">
                                        <h4>Lingkaran</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">

                        <div class="card card-statistic-1">
                            <div class="card-icon bg-info">
                                <i class="fas fa-dice-five text-white" style="font-size: 2rem;"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <a href="{{ url('/materi') }}">
                                        <h4>Peluang</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">

                        <div class="card card-statistic-1">
                            <div class="card-icon bg-danger">
                                <i class="fas fa-chart-pie text-white" style="font-size: 2rem;"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <a href="{{ url('/materi') }}">
                                        <h4>Statistika</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">

                        <div class="card card-statistic-1">
                            <div class="card-icon bg-success">
                                <i class="fas fa-infinity text-white" style="font-size: 2rem;"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <a href="{{ url('/materi') }}">
                                        <h4>Limit</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">

                        <div class="card card-statistic-1">
                            <div class="card-icon bg-info">
                                <i class="fas fa-calculator text-white" style="font-size: 2rem;"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <a href="{{ url('/materi') }}">
                                        <h4>Turunan</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">

                        <div class="card card-statistic-1">
                            <div class="card-icon bg-danger">
                                <i class="fab fa-figma text-white" style="font-size: 2rem;"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <a href="{{ url('/materi') }}">
                                        <h4>Integral</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
