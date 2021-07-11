<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FillPositions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('positions')->insert([
            [
                'name' => 'Директор',
                'salary' => 400000,
            ],
            [
                'name' => 'Начальник IT службы',
                'salary' => 120000,
            ],
            [
                'name' => 'Начальник HR службы',
                'salary' => 90000,
            ],
            [
                'name' => 'Начальник отдела продаж',
                'salary' => 85000,
            ],
            [
                'name' => 'Начальник отдела обслуживания',
                'salary' => 55000,
            ],
            [
                'name' => 'Начальник юр. отдела',
                'salary' => 80000,
            ],
            [
                'name' => 'Начальник охраны',
                'salary' => 65000,
            ],
            [
                'name' => 'Начальник отдела аналитики',
                'salary' => 70000,
            ],
            [
                'name' => 'Начальник отдела разработки',
                'salary' => 190000,
            ],
            [
                'name' => 'Senior разарботчик',
                'salary' => 180000,
            ],
            [
                'name' => 'Middle разработчик',
                'salary' => 140000,
            ],
            [
                'name' => 'Junior разработчик',
                'salary' => 85000,
            ],
            [
                'name' => 'Специалист IT службы',
                'salary' => 50000,
            ],
            [
                'name' => 'Специалист HR службы',
                'salary' => 45000,
            ],
            [
                'name' => 'Специалист отдела продаж',
                'salary' => 55000,
            ],
            [
                'name' => 'Специалист отдела аналитики',
                'salary' => 60000,
            ],
            [
                'name' => 'Юрист',
                'salary' => 45000,
            ],
            [
                'name' => 'Охранник',
                'salary' => 30000,
            ],
            [
                'name' => 'Уборщик',
                'salary' => 27000,
            ],
            [
                'name' => 'Электрик',
                'salary' => 35000,
            ],
            [
                'name' => 'Старший ПМ',
                'salary' => 100000,
            ],
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
