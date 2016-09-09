<?php namespace RDArcy\Albums\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRdarcyAlbums extends Migration
{
    public function up()
    {
        Schema::create('rdarcy_albums_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->text('description')->nullable();
            $table->text('tracklist')->nullable();
            $table->string('video_url')->nullable();
            $table->text('contributors')->nullable();
            $table->boolean('is_published')->default(0);
            $table->date('published_on')->nullable();
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('rdarcy_albums_');
    }
}
