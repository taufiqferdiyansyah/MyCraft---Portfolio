<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    /**
     * Tabel yang dihubungkan dengan model ini.
     *
     * @var string
     */
    protected $table = 'contacts';

    /**
     * Kolom yang dapat diisi secara massal.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'message',
    ];
}
