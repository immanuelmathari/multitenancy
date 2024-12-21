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
        $tenant = Tenant::query()->create(
            attributes: [
                'id' => 'treblle',
            ]
        );

        $tenant->domains()->create(
            attributes: [
                'domain' => 'treblle.127.0.0.1'
            ]
            );

    }
}
