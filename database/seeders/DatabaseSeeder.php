<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Company;
use App\Models\Manager;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            AdminSeeder::class,
            ManagerSeeder::class,
            CompanySeeder::class,
            UserSeeder::class,
            ExpanseCategorySeeder::class,
            ExpanseSeeder::class,
            ProductCategorySeeder::class,
            ProductSeeder::class,
            CustomerSeeder::class,
            OrderSeeder::class,
            OrderDetailSeeder::class,
        ]);
    }
}
