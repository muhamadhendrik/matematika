<?php

namespace App\Http\Controllers;

use App\Soal;
use Alert;
use Illuminate\Http\Request;

class SoalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Soal $soal)
    {
        $questions = Soal::get();
        foreach($questions as $question);
        return view('admin.soal.index',[
            'soal' => $soal->latest()->paginate(5),
            'question' => $question
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Soal $soal)
    {
         return view('admin.soal.create', compact('soal'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'kode_soal' => 'required|string',
            'soal' => 'required|string',
            'pilihan_a' => 'required|string',
            'pilihan_b' => 'required|string',
            'pilihan_c' => 'required|string',
            'pilihan_d' => 'required|string',
            'pilihan_e' => 'required|string',
            'jawaban_benar' => 'required|string',
            'thumbnail1' => 'image|mimes:png,jpg,jpeg,svg|max:3408',
            'thumbnail2' => 'image|mimes:png,jpg,jpeg,svg|max:3408',
            'thumbnail3' => 'image|mimes:png,jpg,jpeg,svg|max:3408',
        ]);

        $attr = $request->all();

        $thumbnail1 = request()->file('thumbnail1') ? request()->file('thumbnail1')->store("img/thumb1") : null;
        $thumbnail2 = request()->file('thumbnail2') ? request()->file('thumbnail2')->store("img/thumb2") : null;
        $thumbnail3 = request()->file('thumbnail3') ? request()->file('thumbnail3')->store("img/thumb3") : null;

        $attr['thumbnail1'] = $thumbnail1;
        $attr['thumbnail2'] = $thumbnail2;
        $attr['thumbnail3'] = $thumbnail3;

        Soal::create($attr);

        Alert::success('Soal Berhasil Di Tambahkan');

        return redirect()->route('admin.soal.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Soal  $soal
     * @return \Illuminate\Http\Response
     */
    public function show(Soal $soal)
    {
        return view('admin.soal.show',compact('soal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Soal  $soal
     * @return \Illuminate\Http\Response
     */
    public function edit(Soal $soal)
    {
        return view('admin.soal.edit',compact('soal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Soal  $soal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Soal $soal)
    {
        $attr = $request->all();

        $this->validate($request,[
            'kode_soal' => 'required|string',
            'soal' => 'required|string',
            'pilihan_a' => 'required|string',
            'pilihan_b' => 'required|string',
            'pilihan_c' => 'required|string',
            'pilihan_d' => 'required|string',
            'pilihan_e' => 'required|string',
            'jawaban_benar' => 'required|string',
            'thumbnail1' => 'image|mimes:png,jpg,jpeg,svg|max:3408',
            'thumbnail2' => 'image|mimes:png,jpg,jpeg,svg|max:3408',
            'thumbnail3' => 'image|mimes:png,jpg,jpeg,svg|max:3408',
        ]);

        // thumb 1
        if(request()->file('thumbnail1'))
        {
            \Storage::delete($soal->thumbnail1);
            $thumbnail_satu = request()->file('thumbnail1')->store("img/thumb1");
        } else {
            $thumbnail_satu = $soal->thumbnail1;
        }
        // thumb 2
        if(request()->file('thumbnail2'))
        {
            \Storage::delete($soal->thumbnail2);
            $thumbnail_dua = request()->file('thumbnail2')->store("img/thumb1");
        } else {
            $thumbnail_dua = $soal->thumbnail2;
        }
        //thumb 3
        if(request()->file('thumbnail3'))
        {
            \Storage::delete($soal->thumbnail3);
            $thumbnail_tiga = request()->file('thumbnail3')->store("img/thumb1");
        } else {
            $thumbnail_tiga = $soal->thumbnail3;
        }

        $attr['thumbnail1'] = $thumbnail_satu;
        $attr['thumbnail2'] = $thumbnail_dua;
        $attr['thumbnail3'] = $thumbnail_tiga;

        $soal->update($attr);
        Alert::success('Soal Berhasil Di Ubah');

        return redirect()->route('admin.soal.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Soal  $soal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Soal $soal)
    {
        \Storage::delete($soal->thumbnail1);
        \Storage::delete($soal->thumbnail2);
        \Storage::delete($soal->thumbnail3);
        $soal->delete();
        Alert::success('Soal Berhasil Di Hapus');

        return redirect()->route('admin.soal.index');
    }
}
