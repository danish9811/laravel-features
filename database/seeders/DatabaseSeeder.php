<?php

namespace Database\Seeders;

use App\Models\{Book, Employee, Item, User};
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

    public function run() {

        User::truncate();
        User::factory(20)->create();

        Book::truncate();
        Book::factory(200)->create();

        Employee::truncate();
        Employee::factory(50)->create();

        Item::truncate();
        Item::factory(100)->create();

    }
}
