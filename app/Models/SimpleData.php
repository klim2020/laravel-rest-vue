<?php

namespace App\Models;

use Database\Factories\SimpleDataFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SimpleData extends Model
{
    use HasFactory;
    protected $fillable =['name','data','authors_id'];
    public function author(){
        return $this->belongsTo(Author::class);
    }

    protected static function newFactory(): SimpleDataFactory
    {
        return SimpleDataFactory::new();
    }

}
