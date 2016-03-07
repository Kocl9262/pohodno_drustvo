<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("registrations", function(Blueprint $blueprint)
        {
            $blueprint->increments("id");
            $blueprint->string("name");
            $blueprint->string("surname");
            $blueprint->string("email");
            $blueprint->string("address");
            $blueprint->string("city");
            $blueprint->string("country");

            $blueprint->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop("registrations");
    }
}
