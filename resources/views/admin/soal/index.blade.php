@extends('layouts.dashboard.app',['title' => 'Materi'])
@section('content')
    <!-- Main Content -->
    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('admin.soal.create') }}" class="btn btn-primary btn-lg"
                            style="margin-left: -10px; border-radius: 0;"><i class="fa fa-plus-square"></i> Add Data</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-light">
                                <tr>
                                    <th>No</th>
                                    <th>Kode soal</th>
                                    <th>Soal</th>
                                    <th>Pilihan A</th>
                                    <th>Pilihan B</th>
                                    <th>Pilihan C</th>
                                    <th>Pilihan D</th>
                                    <th>Pilihan E</th>
                                    <th>Jawaban Benar</th>
                                    @if($question->thumbnail1)
                                        <th>Thumbnail 1</th>
                                    @endif
                                    @if($question->thumbnail2)
                                        <th>Thumbnail 2</th>
                                    @endif
                                    @if($question->thumbnail3)
                                        <th>Thumbnail 3</th>
                                    @endif
                                    <th>Action</th>
                                </tr>
                                @forelse($soal as $s)
                                    <tr>
                                        <th>{{ $loop->iteration + $soal->firstItem() - 1 . '.' }}</th>
                                        <td>{{ $s->kode_soal }}</td>
                                        <td>{!! Str::limit($s->soal, 50) !!}</td>
                                        <td>{!! Str::limit($s->pilihan_a, 50) !!}</td>
                                        <td>{!! Str::limit($s->pilihan_b, 50) !!}</td>
                                        <td>{!! Str::limit($s->pilihan_c, 50) !!}</td>
                                        <td>{!! Str::limit($s->pilihan_d, 50) !!}</td>
                                        <td>{!! Str::limit($s->pilihan_e, 50) !!}</td>
                                        <td>{!! Str::limit($s->jawaban_benar, 50) !!}</td>
                                        @if($question->thumbnail1)
                                            <td><img src="{{ $s->takeImageSatu }}" width="100px"></td>
                                        @endif
                                        @if($question->thumbnail2)
                                            <td><img src="{{ $s->takeImageDua }}" width="100px"></td>
                                        @endif
                                        @if($question->thumbnail3)
                                            <td><img src="{{ $s->takeImageTiga }}" width="100px"></td>
                                        @endif
                                        <td>
                                            <form action="{{ route('admin.soal.delete', $s->id) }}" method="post"
                                                class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger mr-2 mb-2 float-left" data-toggle="tooltip"
                                                    data-placement="top" data-original-title="Delete"
                                                    onclick="return confirm('are you sure?')"><i
                                                        class="fas fa-trash"></i></button>
                                            </form>
                                            <a href="{{ route('admin.soal.edit', $s->id) }}"
                                                class="btn btn-icon btn-warning mb-2" data-toggle="tooltip" data-placement="top"
                                                title="" data-original-title="Edit"><i class="fas fa-edit"></i></a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="12" style="color: red;" align="center">Data Empty!</td>
                                    </tr>
                                @endforelse
                            </table>
                        </div>
                    </div>
                    {{ $soal->links() }}
                </div>
            </div>
        </div>
    </div>
    </section>
    <!-- end Main Content -->
@endsection
@section('script')
<script>
    CKEDITOR.replace('materi');
</script>
@stop
