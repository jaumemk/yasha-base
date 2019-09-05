<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsTableSeeder extends Seeder
{
    /**
     * The settings to add.
     */
    protected $settings = [
        [
            'key'         => 'homepage',
            'name'        => 'Homepage',
            'description' => 'Select the Homepage',
            'value'       => null,
            'field'       => '{"name":"value","label":"Page name","type":"select-setting","model":"\\\\Yasha\\\\Backend\\\\Models\\\\Page","show":"name","set":"id"}',
            'active'      => 1,
        ],
        [
            'key'         => 'privacy-policy-page',
            'name'        => 'Page Privacy policy',
            'description' => 'Select the Privacy policy',
            'value'       => null,
            'field'       => '{"name":"value","label":"Page name","type":"select-setting","model":"\\\\Yasha\\\\Backend\\\\Models\\\\Page","show":"name","set":"id"}',
            'active'      => 1,
        ],
        [
            'key'         => 'legal-notice-page',
            'name'        => 'Page Legal notice',
            'description' => 'Select the Legal notice page',
            'value'       => null,
            'field'       => '{"name":"value","label":"Page name","type":"select-setting","model":"\\\\Yasha\\\\Backend\\\\Models\\\\Page","show":"name","set":"id"}',
            'active'      => 1,
        ],
        [
            'key'         => 'about-cookies-page',
            'name'        => 'Page About cookies',
            'description' => 'Select the About cookies page',
            'value'       => null,
            'field'       => '{"name":"value","label":"Page name","type":"select-setting","model":"\\\\Yasha\\\\Backend\\\\Models\\\\Page","show":"name","set":"id"}',
            'active'      => 1,
        ],
        [
            'key'         => 'ga-code',
            'name'        => 'Google Analitycs Code',
            'description' => 'Paste the GA Code',
            'value'       => null,
            'field'       => '{"name":"value","label":"GA Code","type":"text"}',
            'active'      => 1,
        ],
        [
            'key'         => 'former_company_name',
            'name'        => 'Former company name',
            'description' => 'Accessible by %%_former_company_name_%%',
            'value'       => 'Example Company SL',
            'field'       => '{"name":"value","label":"Text","type":"text"}',
            'active'      => 1,
        ],
        [
            'key'         => 'former_company_email',
            'name'        => 'Former company email',
            'description' => 'Accessible by %%_former_company_email_%%',
            'value'       => 'info@example.com',
            'field'       => '{"name":"value","label":"Text","type":"email"}',
            'active'      => 1,
        ],
        [
            'key'         => 'former_company_adress_1',
            'name'        => 'Former company adress 1',
            'description' => 'Accessible by %%_former_company_adress_1_%%',
            'value'       => '1 Javahole Loop',
            'field'       => '{"name":"value","label":"Text","type":"text"}',
            'active'      => 1,
        ],
        [
            'key'         => 'former_company_adress_2',
            'name'        => 'Former company adress 2',
            'description' => 'Accessible by %%_former_company_adress_2_%%',
            'value'       => 'Javalonia',
            'field'       => '{"name":"value","label":"Text","type":"text"}',
            'active'      => 1,
        ],
        [
            'key'         => 'former_company_country',
            'name'        => 'Former company country',
            'description' => 'Accessible by %%_former_company_country_%%',
            'value'       => 'Javaland',
            'field'       => '{"name":"value","label":"Text","type":"text"}',
            'active'      => 1,
        ],
        [
            'key'         => 'former_company_registry_date',
            'name'        => 'Former company registry date',
            'description' => 'Accessible by %%_former_company_registry_date_%%',
            'value'       => '01st January 1999',
            'field'       => '{"name":"value","label":"Text","type":"text"}',
            'active'      => 1,
        ],
        [
            'key'         => 'former_company_tax_id',
            'name'        => 'Former company tax ID',
            'description' => 'Accessible by %%_former_company_tax_id_%%',
            'value'       => 'EU-JVJ00000',
            'field'       => '{"name":"value","label":"Text","type":"text"}',
            'active'      => 1,
        ],
        [
            'key'         => 'former_company_phone',
            'name'        => 'Former company phone',
            'description' => 'Accessible by %%_former_company_phone_%%',
            'value'       => '+00 00 000 000 000',
            'field'       => '{"name":"value","label":"Text","type":"text"}',
            'active'      => 1,
        ],
        [
            'key'         => 'former_company_website',
            'name'        => 'Former company website',
            'description' => 'Accessible by %%_former_company_website_%%',
            'value'       => 'htp://example.com',
            'field'       => '{"name":"value","label":"Text","type":"text"}',
            'active'      => 1,
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->settings as $index => $setting) {
            $result = DB::table('settings')->insert($setting);

            if (!$result) {
                $this->command->info("Insert failed at record $index.");

                return;
            }
        }

        $this->command->info('Inserted '.count($this->settings).' records.');
    }
}
