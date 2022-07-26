<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesan_Model extends Model
{
    use HasFactory;
    protected $table = 'pesans';

    protected $fillable = [
        'service',
        'target',
        'quantity',
    ];

    public function get_data()
    {
        return $this->all();
    }
}
