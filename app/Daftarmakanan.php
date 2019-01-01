<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Daftarmakanan extends Model
{
    //
    use SoftDeletes;
    protected $fillable = [
    'nama', 'deskripsi'
     ];
    protected $dates = ['deleted_at'];



}
