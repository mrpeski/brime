<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackagesPhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages_photos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('package_id');
            $table->string('path');
            $table->string('thumbnail_path');
            $table->timestamps();

            $table->foreign('package_id')->references('id')->on('packages')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('packages_photos');
    }
}
