<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    //
    protected $table = 'siswas';
    protected $fillable = ['nama', 'orang_tua_id', 'umur', 'alamat'];
    protected $visible = ['nama', 'orang_tua_id', 'umur', 'alamat'];
    public $timestamps = true;

    public function orangtua () 
    {
    	return $this->belongsTo('App\orang_tua', 'orang_tua_id');
    }
}
