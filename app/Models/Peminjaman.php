<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;
    protected $table = "tb_peminjaman";
    protected $fillable = ['id','id_mobil','id_user','tgl_mulai','tgl_selesai','jumlah_biaya'];
    protected $primarykey = "id";

    public function mobil(){
        return $this->belongsTo(Mobil::class, 'id', 'id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'id', 'id');
    }
}
