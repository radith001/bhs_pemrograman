<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::create([
            'name' => 'John Doe',

        ]);

        Customer::create([
            'name' => 'Jane Smith',

        ]);
    }
}

// This seeder creates two customers with names 'John Doe' and 'Jane Smith'.{tes tes yahaha hayyuuoo}