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
            'group' => 'navigation',
            'key' => 'index',
            'text' => [
                    'en' => 'Home',
                    'es' => 'Inicio',
                    'ca' => 'Inici'
            ]
        ]);

        LanguageLine::create([
            'group' => 'meta',
            'key' => 'default-untitled-page',
            'text' => [
                    'en' => 'Untitled page | ',
                    'es' => 'Página sin título |',
                    'ca' => 'Pàgina sense títol | '
            ]
        ]);

        LanguageLine::create([
            'group' => 'meta',
            'key' => 'default-title',
            'text' => [
                    'en' => 'Default title',
                    'es' => 'Título por defecto',
                    'ca' => 'Títol per defecte'
            ]
        ]);

        LanguageLine::create([
            'group' => 'meta',
            'key' => 'default-description',
            'text' => [
                    'en' => 'Default description for this website',
                    'es' => 'Descripción por defecto de esta página web',
                    'ca' => 'Descripció per defecte d\'aquesta página web.'
            ]
        ]);

        LanguageLine::create([
            'group' => 'meta',
            'key' => 'default-keyboards',
            'text' => [
                    'en' => 'website, keyboards, coma, separated',
                    'es' => 'plabras, clave, sepadadas, por comas',
                    'ca' => 'paraules, clau, separades, per comes'
            ]
        ]);

        LanguageLine::create([
            'group' => 'footer',
            'key' => 'navigation',
            'text' => [
                    'en' => 'Navigation',
                    'es' => 'Navegación',
                    'ca' => 'Navegació'
            ]
        ]);

        LanguageLine::create([
            'group' => 'footer',
            'key' => 'under-logo-text',
            'text' => [
                    'en' => '© 2018-2019',
                    'es' => '© 2018-2019',
                    'ca' => '© 2018-2019'
            ]
        ]);

        LanguageLine::create([
            'group' => 'footer',
            'key' => 'back-to-top',
            'text' => [
                    'en' => 'Back to top',
                    'es' => 'Volver arriba',
                    'ca' => 'Tornar amunt'
            ]
        ]);

        LanguageLine::create([
            'group' => 'footer',
            'key' => 'footer-line',
            'text' => [
                    'en' => '
                    <p> Aenean leo eros, malesuada eu elit non, placerat ultrices erat. Aliquam venenatis sollicitudin tellus in auctor. </p>
                    ',
                    'es' => '
                    <p> Aenean leo eros, malesuada eu elit non, placerat ultrices erat. Aliquam venenatis sollicitudin tellus in auctor. </p>
                    ',
                    'ca' => '
                    <p> Aenean leo eros, malesuada eu elit non, placerat ultrices erat. Aliquam venenatis sollicitudin tellus in auctor. </p>
                    '
            ]
        ]);

        LanguageLine::create([
            'group' => 'basics',
            'key' => 'about-title',
            'text' => [
                    'en' => 'About the site',
                    'es' => 'Sobre la página web',
                    'ca' => 'Sobre la página web'
            ]
        ]);

        LanguageLine::create([
            'group' => 'basics',
            'key' => 'about',
            'text' => [
                    'en' => '
                    <p>
                    <em>Default description</em> for this <strong>website</strong>, <strong>with some</strong> HTML examples <a href="#" target="_blank" class="text-white-50">and fake links</a>.
                    </p>
                    ',
                    'es' => '
                    <p>
                    <em>Default description</em> for this <strong>website</strong>, <strong>with some</strong> HTML examples <a href="#" target="_blank" class="text-white-50">and fake links</a>.
                    </p>
                    ',
                    'ca' => '
                    <p>
                    <em>Default description</em> for this <strong>website</strong>, <strong>with some</strong> HTML examples <a href="#" target="_blank" class="text-white-50">and fake links</a>.
                    </p>
                    '
            ]
        ]);


    }
}
