<?php

namespace App\Models\college;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class college_profile extends Model
{
    protected $fillable = ["name","Contact", "Contact_Person", "Email", "Address", "Principal", "Principal_Contact", "Type"];

    protected $table = "colleges";
    public $timestamps = false;
    use HasFactory;
}
