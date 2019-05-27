<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\BackpackUser::create([
            'name' => 'test',
            'email' => 'info@javajan.com',
            'password' => '$2y$10$CHvmFEcxd4PZu6c53dp6GuvUF8InobD7KC/FUfyM7z7EtR9Nwxe8K'
            ]);
    }
}
