<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TestSeeder extends Seeder
{
    public function run()
    {
        DB::table('tests')->insert([
            [
                'text' => 'aaa',
                'created_at' => Now()
            ],
            [
                'text' => 'bbb',
                'created_at' => Now()
            ],
        ]);
    }
}
