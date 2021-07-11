<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 45);
            $table->string('last_name', 45);
            $table->string('middle_name', 45);

            $table->foreignId('leader_id')->nullable(); // id руководителя
            $table->string('position_id'); // должность
            $table->string('employment_date')->nullable(); // дата приема на работу
            $table->string('dismissal_date')->nullable(); // дата увольнения
            $table->string('dismissal_reason_id')->nullable(); // причина увольнения
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
        Schema::dropIfExists('workers');
    }
}
