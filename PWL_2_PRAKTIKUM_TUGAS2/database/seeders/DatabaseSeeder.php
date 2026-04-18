<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        // ======================
        // USERS (50 DATA)
        // ======================

        for ($i = 1; $i <= 50; $i++) {

            $angkatan = rand(21, 25);
            $urutan = str_pad($i, 3, '0', STR_PAD_LEFT);

            $npm = "55201{$angkatan}{$urutan}";

            DB::table('users')->insert([
                'npm' => $npm,
                'username' => $faker->userName,
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'email' => $faker->unique()->safeEmail,
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // ======================
        // CATEGORIES
        // ======================

        for ($i = 1; $i <= 5; $i++) {
            DB::table('categories')->insert([
                'category' => $faker->word
            ]);
        }

        // ======================
        // BOOKSHELVES
        // ======================

        for ($i = 1; $i <= 5; $i++) {
            DB::table('bookshelves')->insert([
                'code' => 'RACK-'.$i,
                'name' => 'Rak '.$i
            ]);
        }

        // ======================
        // BOOKS (50 DATA)
        // ======================

        for ($i = 1; $i <= 50; $i++) {
            DB::table('books')->insert([
                'title' => $faker->sentence,
                'author' => $faker->name,
                'year' => $faker->year,
                'publisher' => $faker->company,
                'city' => $faker->city,
                'cover' => null,
                'bookshelf_id' => rand(1,5),
                'category_id' => rand(1,5),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
