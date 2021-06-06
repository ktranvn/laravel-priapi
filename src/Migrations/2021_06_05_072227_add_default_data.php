<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDefaultData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table("priapi_configs")->insert([
            "name"=> "API Document",
            "getting_started" => "N/A"
        ]);

        DB::table("priapi_requests")->insert([
            "name" => "Common",
            "description" => "Default",
            "parent" => 0,
            "sort" => 0,
            "type" => "FOLDER",
            "request_type" => NULL,
            "uri" => NULL,
            "request_params" => NULL,
            "request_header" => NULL,
            "request_body" => NULL,
            "created_at" => \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),
        ]);

        DB::table("priapi_requests")->insert([
            "name" => "Sample Folder",
            "description" => "Default",
            "parent" => 1,
            "sort" => 0,
            "type" => "FOLDER",
            "request_type" => NULL,
            "uri" => NULL,
            "request_params" => NULL,
            "request_header" => NULL,
            "request_body" => NULL,
            "created_at" => \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),
        ]);
        DB::table("priapi_requests")->insert([
            "name" => "Sample Request",
            "description" => "Default",
            "parent" => 1,
            "sort" => 0,
            "type" => "REQUEST",
            "request_type" => "GET",
            "uri" => "/api/sample",
            "request_params" => json_encode(["action"=>true]),
            "request_header" => json_encode([]),
            "request_body" => json_encode([]),
            "created_at" => \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),
        ]);
        DB::table("priapi_requests")->insert([
            "name" => "Sample Request",
            "description" => "Default",
            "parent" => 2,
            "sort" => 0,
            "type" => "REQUEST",
            "request_type" => "GET",
            "uri" => "/api/sample",
            "request_params" => json_encode(["action"=>true]),
            "request_header" => json_encode([]),
            "request_body" => json_encode([]),
            "created_at" => \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
