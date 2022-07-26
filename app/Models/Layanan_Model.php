<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan_Model extends Model
{
    use HasFactory;

    protected $table = 'layanans';

    protected $fillable = [
        'nama',
        'harga',
        'min_pesan',
        'max_pesan',
        'deskripsi',
    ];

    public function get_data()
    {
        return $this->all();
    }
}
