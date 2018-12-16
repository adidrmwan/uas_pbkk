<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $primaryKey = 'id_mahasiswa';
    public $incrementing = true;
    protected $fillable = [
	    'nama',
	    'alamat', 
    ]; 

}
