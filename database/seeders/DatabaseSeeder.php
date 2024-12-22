<?php

namespace Database\Seeders;

use App\Models\Tenant;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
        public function run(): void
        {
            // User::factory(10)->create();

            // User::factory()->create([
            //     'name' => 'Test User',
            //     'email' => 'test@example.com',
            // ]);

            // we create a tenant and domain
            $tenant1 = Tenant::query()->create(
                attributes: [
                    'id' => 'treblle',
                ]
            );

            $tenant1->domains()->create(
                attributes: [
                    'domain' => 'treblle.127.0.0.1'
                ]
                );

            // we want to switch to the tenant's database
            tenancy()->initialize($tenant1);

            // we want to create users for tenant 1
            User::factory(5)->create();


            // we create a tenant and domain
            $tenant2 = Tenant::query()->create(
                attributes: [
                    'id' => 'amanda',
                ]
            );

            $tenant2->domains()->create(
                attributes: [
                    'domain' => 'amanda.127.0.0.1'
                ]
                );

            // we want to switch to the tenant's database
            tenancy()->initialize($tenant2);

            // we want to create users for tenant 1
            User::factory(5)->create();



        }
}
