<?php

use App\Models\Author;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AddImageToAuthors extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('authors', function (Blueprint $table) {
            $table->string('image');
        });

        Author::all()->map(function($item){
            $item->image = $this->getImage('img'.$item->id.'.jpg');
            $item->save();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('authors', function (Blueprint $table) {
            $table->dropColumn('image');//
        });
    }

    private function uploadFile(){

    }

    function getImage($img){
        $url = 'https://thispersondoesnotexist.com/image';
        $dir = 'upload/image/';

        file_put_contents($dir.$img, file_get_contents($url));
        return $dir.$img;
    }

}
