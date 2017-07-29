<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orang_tua extends Model
{
    //
    protected $table ='orang_tuas';
    protected $fillable = ['nama_ibu', 'nama_ayah', 'umur_ibu', 'umur_ayah', 'alamat'];
    protected $visible = ['nama_ibu', 'nama_ayah', 'umur_ibu', 'umur_ayah', 'alamat'];
    public $timestamps = true;

    public function siswa () 
    {
    	return $this->hasMany('App\Siswa', 'orang_tua_id');
    }
}
