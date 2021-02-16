@extends('layouts.dashboard.app',['title' => 'Detail Soal'])
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3>Latihan Soal</h3>
                </div>
                <div class="card-body">
                    <table width="100%">
                        <tr>
                            <th>
                                1.
                            </th>
                            <th>{{ $soal->soal }}</th>
                        </tr>
                        <tr>
                            <th>
                            </th>
                            <th>A. {{ $soal->pilihan_a }}</th>
                        </tr>
                        <tr>
                            <th>
                            </th>
                            <th>B. {{ $soal->pilihan_b }}</th>
                        </tr>
                        <tr>
                            <th>
                            </th>
                            <th>C. {{ $soal->pilihan_c }}</th>
                        </tr>
                        <tr>
                            <th>
                            </th>
                            <th>D. {{ $soal->pilihan_d }}</th>
                        </tr>
                        <tr>
                            <th>
                            </th>
                            <th>E. {{ $soal->pilihan_e }}</th>
                        </tr>
                        <tr>
                            <th>
                            </th>
                            <th>Jawaban benar : {{ $soal->jawaban_benar }}</th>
                        </tr>
                    </table>
                </div>
                <div class="card-footer">
                    <a href="{{ route('admin.soal.index') }}" class="btn btn-danger mr-2"
                        style="border-radius: 0;">Back</a>
                </div>
            </div>
        </div>
    </div>

@stop
