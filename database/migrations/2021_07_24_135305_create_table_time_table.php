<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTimeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_time', function (Blueprint $table) {
            $table->foreignId('table_id')->constrained('tables' , 'id')->cascadeOnDelete();
            $table->foreignId('time_id')->constrained('times' , 'id')->cascadeOnDelete();
            $table->primary(['table_id' ,'time_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_time');
    }
}
