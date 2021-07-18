<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //protected $table ='nom_de fichier de migration';
    use HasFactory;
    protected $fillable = ['title','content','slug','active'];
}
