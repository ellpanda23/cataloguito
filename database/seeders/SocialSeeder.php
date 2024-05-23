<?php

namespace Database\Seeders;

use App\Models\Social;
use Illuminate\Database\Seeder;

class SocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Social::create([
            'platform' => 'Facebook',
            'icon' => 'fab fa-facebook-f'
        ]);
        Social::create([
            'platform' => 'Instagram',
            'icon' => 'fab fa-instagram'
        ]);
        Social::create([
            'platform' => 'WhatsApp',
            'icon' => 'fab fa-whatsapp'
        ]);
    }
}
