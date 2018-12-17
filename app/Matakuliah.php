<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Mahasiswa;

class Matakuliah extends Model
{
    protected $table = 'matakuliahs';
    protected $primaryKey = 'id_matakuliah';
    public $incrementing = true;
    protected $fillable = [
	    'nama_matakuliah',
	    'tempat',
	    'hari',
        'jam',
    ]; 

 	public function mahasiswas()
    {
        return $this->belongsToMany(Mahasiswa::class);
    }
}
