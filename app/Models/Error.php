<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * provides error messages for app
 *
 * 2022_10_20_203218_create_errors_table. -ok
 * Seeder. -ok
 * Request. -ok
 * Resource. -ok
 * Controller. -ok
 * Resource. -ok
 */
class Error extends Model
{
    use HasFactory;

    protected $fillable = [
        'lang',//язык ru ua en pl
        'valuename',// имя аттрибута -  contacts_text, contacts, about_text, about... см массив
        'type',//тип поля - json, string
        'value' //значения аттрибута
    ];

}
