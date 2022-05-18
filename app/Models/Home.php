<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;

    protected $fillable = [
        'lang',//язык ru ua en pl
        'valuename',// имя аттрибута -  contacts_text, contacts, about_text, about... см массив
        'type',//тип поля - json, string
        'value' //значения аттрибута -
        ];
}
