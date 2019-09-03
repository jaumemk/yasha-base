<?php

use Illuminate\Database\Seeder;
use Yasha\Backend\Models\LanguageLine as LanguageLine;

class LanguageLinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LanguageLine::create([
            'group' => 'site/navigation',
            'key' => 'home',
            'text' => [
                    'en' => 'Home',
                    'es' => 'Inicio',
                    'ca' => 'Inici'
            ]
        ]);
    }
}
