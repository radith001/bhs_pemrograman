<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LogistikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $timestamp = \Carbon\Carbon::now()->toDateTimeString();

        DB::table('logistiks')->insert([
            'username' => 'client',
            'password' => 'password',
            'created_at' => $timestamp,
            'updated_at' => $timestamp
        ]);
    }
}
