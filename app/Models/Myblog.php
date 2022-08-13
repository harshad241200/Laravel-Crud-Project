<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Myblog extends Model
{
    public $directory="./images/";  
    protected $table = '_blogs';
    public $timestamps =false;

}
