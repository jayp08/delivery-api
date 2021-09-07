<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_locations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('latitude');
            $table->string('longitude');
            $table->timestamps();
            $table->softDeletes();
            $table->bigInteger('created_by')->nullable();;
            $table->bigInteger('updated_by')->nullable();;
            $table->bigInteger('deleted_by')->nullable();;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('test_locations');
    }
}
