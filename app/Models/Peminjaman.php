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

    public function pengguna(){
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

    public function mobil(){
        return $this->belongsTo(Mobil::class, 'id_mobil', 'id');
    }
}
