<?php namespace RDArcy\Albums\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRdarcyAlbumsAlbums extends Migration
{
    public function up()
    {
        Schema::create('rdarcy_albums_albums', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->string('description')->nullable();
            $table->string('tracklist')->nullable();
            $table->string('credits')->nullable();
            $table->string('video_url')->nullable();
            $table->boolean('is_published')->default(0);
            $table->dateTime('published_on')->nullable();
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('rdarcy_albums_albums');
    }
}
