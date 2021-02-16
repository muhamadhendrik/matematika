@extends('layouts.dashboard.app',['title' => 'Dashboard'])
@section('content')
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="m-0">Halo, {{ $greeting }}</h5>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title">Mtk Mr Catur</h6>

                        <p class="card-text">Selamat datang di halaman dashboard admin aplikasi Mtk Mr Catur. Aplikasi ini
                            adalah aplikasi pembelajaran matematika untuk memudahka para siswa/i belajar dimanapun dan
                            kapanpun. Dengan adanya aplikasi ini saya berharap dapat mempermudah pembelajaran untuk para
                            pelajar.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="far fa-user"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Admin</h4>
                        </div>
                        <div class="card-body">
                            {{ $user }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                        <i class="far fa-newspaper"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Materi</h4>
                        </div>
                        <div class="card-body">
                            {{ $materi }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                        <i class="far fa-file"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Soal</h4>
                        </div>
                        <div class="card-body">
                            {{ $soal }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-success">
                        <i class="fas fa-circle"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Online Users</h4>
                        </div>
                        <div class="card-body">
                            1
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
