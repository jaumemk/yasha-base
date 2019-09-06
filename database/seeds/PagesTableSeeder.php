<?php

use Illuminate\Database\Seeder;
use Yasha\Backend\Models\Page as Page;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $title = [
            'en' => 'Welcome to example page',
            'es' => 'Bienvenidos a la página de ejemplo',
            'ca' => 'Benvinguts a la página d\'exemple'
        ];

        $slug = [
            'en' => 'example-page',
            'es' => 'pagina-ejemplo',
            'ca' => 'exemple-de-pagina'
        ];

        $content = [
            'ca' => '<h2>Benvinguts</h2><p>Aquesta es una p&aacute;gina d&#39;exemple per a %%_former_company_name_%%. Vost&eacute; pot contactar-nos per email a %%_former_company_email_%% o per correu convencional a:</p><p>%%_former_company_adress_1_%%<br />%%_former_company_adress_2_%%<br />
            %%_former_company_country_%%</p>',

            'en' => '<h2>Welcome</h2><p>This is a simple example page for %%_former_company_name_%%. You can contact us at %%_former_company_email_%% or by post email at this address:</p><p>%%_former_company_adress_1_%%<br />%%_former_company_adress_1_%%<br />
            %%_former_company_country_%%</p>',


            'es' => '<h2>Bienvenidos</h2><p>Esta es una p&aacute;gina de ejemplo para %%_former_company_name_%%. Usted puede contactar con nosotros via email en %%_former_company_email_%% o por correo convencional en:</p><p>%%_former_company_adress_1_%%<br />%%_former_company_adress_2_%%<br />
            %%_former_company_country_%%</p>'
        ];

        $page = Page::create([
            'template' => 'main_layout',
            'name' => 'example page',
            'title' => $title['en'],
            'slug' => $slug['en'],
            'content' => $content['en']
        ]);
        
        $page->setTranslations('title', $title);
        $page->setTranslations('slug', $slug);
        $page->setTranslations('content', $content);

        $page->save();
    }
}
