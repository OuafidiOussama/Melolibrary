<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class writers extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $table = "writer";

    public $timestamp = false;
}
