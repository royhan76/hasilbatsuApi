<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DatabmModels extends Model
{
    use HasFactory;
    use SoftDeletes;

    // protected $data = "data";
    protected $table = 'databm';

    // protected $table = 'databm';
    protected $fillable = ['judul', 'deskripsi', 'isi'];

    protected $hidden;
    // return Sele
};
