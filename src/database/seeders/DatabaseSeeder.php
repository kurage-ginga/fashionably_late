<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Contact;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            CategoryTableSeeder::class,
            ContactTableSeeder::class,
        ]);
    }
}
