<?php

namespace Database\Seeders;

use App\Models\{Book, Employee, User};
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

    public function run() {
        User::factory(10)->create();
        Book::factory(100)->create();
        Employee::factory(10)->create();
    }
}
