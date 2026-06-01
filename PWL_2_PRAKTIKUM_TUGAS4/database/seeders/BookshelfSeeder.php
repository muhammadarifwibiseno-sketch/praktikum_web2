<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookshelfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bookshelves')->insert([
            'code' => 'BS01',
            'name' => 'Novel',
        ]);
        DB::table('bookshelves')->insert([
            'code' => 'BS02',
            'name' => 'Ilmu Pengetahuan',
        ]);
        DB::table('bookshelves')->insert([
            'code' => 'BS03',
            'name' => 'Komik',
        ]);
    }
}
