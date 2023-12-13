<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    use HasFactory;
    protected $table = "tb_mobil";
    protected $fillable = ['id','merk','model','no_plat','status','tarif'];
    protected $primarykey = "id";

    public function peminjaman(){
        return $this->hasMany(Peminjaman::class, 'id', 'id');
    }
}
