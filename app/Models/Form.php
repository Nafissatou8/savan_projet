<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;
    protected $fillable =['titre','date_de_parution','categorie','nom_auteur','date_de_naissance','pays'];
}
