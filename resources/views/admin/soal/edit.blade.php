@extends('layouts.dashboard.app', ['title' => 'Edit Soal'])
@section('content')
    <!-- Main Content -->
    <div class="row">
        <div class="col-sm-12 col-md-10 col-lg-12">
            <div class="card">
                <form action="{{ route('admin.soal.update', $soal->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    @include('admin.soal.partials.form-control')
                </form>
            </div>
        </div>
    </div>
    <!-- end Main Content -->
@endsection
@section('script')
    <script>
        CKEDITOR.replace('soal');
        CKEDITOR.replace('pilihan_a');
        CKEDITOR.replace('pilihan_b');
        CKEDITOR.replace('pilihan_c');
        CKEDITOR.replace('pilihan_d');
        CKEDITOR.replace('pilihan_e');
        CKEDITOR.replace('jawaban_benar');

    </script>
@stop
