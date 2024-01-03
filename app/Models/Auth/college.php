<?php

namespace App\Models\Auth;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class college extends Model
{
    protected $table = "colleges";
    public $timestamps = false;
    use HasFactory;
}
