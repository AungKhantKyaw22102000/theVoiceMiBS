<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SecondSeason extends Model
{
    use HasFactory;

    protected $fillable = ['name','photo','music','music_name','vote'];
}
