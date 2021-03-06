<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karta extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = ['ime', 'prezime', 'broj_osoba','email'];
}
