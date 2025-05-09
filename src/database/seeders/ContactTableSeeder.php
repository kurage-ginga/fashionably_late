<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Contact;

class ContactTableSeeder extends Seeder
{
    public function run()
    {
        Contact::factory()->count(35)->create();
    }
}
