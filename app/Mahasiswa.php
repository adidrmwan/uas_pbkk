<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Matakuliah;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $primaryKey = 'id_mahasiswa';
    public $incrementing = true;
    protected $fillable = [
	    'nama',
	    'alamat',
        'matakuliah', 
    ];

 	public function matakuliahs()
    {
        return $this->belongsToMany(Matakuliah::class);
    }


}
