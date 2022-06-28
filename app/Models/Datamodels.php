<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Datamodels extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'databm';
    protected $fillable = [
        'id',
        'judul',
        'deskripsi',
        'pertanyaan',
        'jawaban',
        'referensi',
        'kategori',
        'bab'
    ];
    protected $hidden = [];
};
