<?php

namespace Database\Seeders;

use App\Models\{Book, Employee, User};
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

    public function run() {
        User::factory(20)->create();
        Book::factory(200)->create();
        Employee::factory(50)->create();
    }
}
