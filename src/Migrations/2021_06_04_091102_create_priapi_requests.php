<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePriapiRequests extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('priapi_requests', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->bigInteger('parent')->default(0);
            $table->integer('sort')->default(0);
            $table->enum("type", ["FOLDER", "REQUEST"]);
            $table->enum("request_type", ["GET", "POST", "PUT", "DELETE"])->nullable();
            $table->string("uri")->nullable();
            $table->json('request_params')->nullable();
            $table->json('request_header')->nullable();
            $table->json('request_body')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('priapi_requests');
    }
}
