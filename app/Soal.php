<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Soal extends Model
{
    protected $table='tb_soal';
    protected $fillable=[
        'kode_soal','soal','pilihan_a','pilihan_b','pilihan_c','pilihan_d','pilihan_e','jawaban_benar','thumbnail1','thumbnail2','thumbnail3',
    ];

    // assesor for take thumbnail 1
     public function getTakeImageSatuAttribute(){
        return "/storage/" . $this->thumbnail1;
    }

    // assesor for take thumbnail 2
     public function getTakeImageDuaAttribute(){
        return "/storage/" . $this->thumbnail2;
    }

    // assesor for take thumbnail 3
     public function getTakeImageTigaAttribute(){
        return "/storage/" . $this->thumbnail3;
    }
}
