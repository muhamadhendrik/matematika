@extends('layouts.students.app')
@section('content')
    <div class="container" style="margin-top: 50px; margin-bottom:50px;">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h2 style="color: cornflowerblue;margin-bottom:15px;text-align:center;">Latihan Soal</h2>
                        <h5>1. Berapakah Hasil dari 2 + 4 + 3 ? </h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"
                                value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                8
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2"
                                value="option2">
                            <label class="form-check-label" for="exampleRadios2">
                                9
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3"
                                value="option3">
                            <label class="form-check-label" for="exampleRadios3">
                                7
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3"
                                value="option3">
                            <label class="form-check-label" for="exampleRadios3">
                                6
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3"
                                value="option3">
                            <label class="form-check-label" for="exampleRadios3">
                                5
                            </label>
                        </div>
                        <br>

                        <button type="button" class="btn btn-danger float-right mb-1" data-toggle="modal"
                            data-target="#modalTambahBarang">Selesai</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalTambahBarang" tabindex="-1" aria-labelledby="modalTambahBarang" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Horeee</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!--FORM TAMBAH BARANG-->
                    <form action="" method=" ">
                        <div class="form-group">
                            <h6 for="">Kamu telah mengerjakan soal dengan nilai :</h6>
                            <h3 style="color:rgb(48, 189, 255)">100</h3>
                        </div>
                        <a href="{{ url('/soal') }}" class="btn btn-danger" role="button" aria-pressed="true">Latihan
                            Lagi</a>
                        <a href="{{ url('/') }}" class="btn btn-primary" role="button" aria-pressed="true">Selesai</a>
                    </form>
                    <!--END FORM TAMBAH BARANG-->
                </div>
            </div>
        </div>
    </div>
@endsection
