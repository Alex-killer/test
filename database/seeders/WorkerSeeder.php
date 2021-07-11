<?php

namespace Database\Seeders;

use App\Models\Worker;
use Illuminate\Database\Seeder;

class WorkerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Worker::factory(1)->leader()->create();
        Worker::factory(10)->create();
        Worker::factory(49)->user()->create();
        Worker::factory(20)->dismissed()->create();
        Worker::factory(20)->trial()->create();
    }
}
