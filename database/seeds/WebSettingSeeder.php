<?php

use App\WebSetting;
use Illuminate\Database\Seeder;

class WebSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        WebSetting::insert([
            [
                'name' => 'Your App Name',
                'email' => 'info@domain.abc',
                'contact' => '97123123123',
                'address' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium odio dicta voluptate necessitatibus, error autem tenetur fuga eveniet maxime facilis quo aperiam hic, beatae ullam. Iusto, dolorum doloribus. Sed, cum.',
                'facebook_link' => 'https://www.facebook.com/',
                'instagram_link' => 'null',
                'twitter_link'   => 'null',
                'linkedin_link' => 'null',
                'whatsapp_no' => 'null',
            ]
        ]);
    }
}
