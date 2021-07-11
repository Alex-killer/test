<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FillDismissalReasons extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('dismissal_reasons')->insert([
            [
                'name' => 'По собственному желанию',
            ],
            [
                'name' => 'Прогулы',
            ],
            [
                'name' => 'Алкогольное опьянение',
            ],
            [
                'name' => 'Наркотическое опьянение',
            ],
            [
                'name' => 'Умер',
            ],
            [
                'name' => 'Перевод',
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
