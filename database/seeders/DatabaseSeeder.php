<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CustomerSeender::class,
            ProductSeender::class,
            OrderSeender::class,
            OrderDetailSeender::class
        ]);
    }
}
