<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Listign;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(5)->create();

        Listign::factory(6)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // Listign::create([
        //     'title' => 'Laravel Devloper',
        //     'tags' => 'laravel, javascript',
        //     'company' => 'Allianz',
        //     'location' => 'Munich, GR',
        //     'email' => 'allianz@contact.de',
        //     'website' => 'www.allianz.de',

        //     'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis quam atque 
        //     commodi, autem harum possimus sint? Iusto, repellendus neque!
        //     Ut labore expedita aspernatur voluptates eligendi, pariatur amet tenetur nihil! Ipsum!'


        // ]);
        // Listign::create([
        //     'title' => 'Nodejs Devloper',
        //     'tags' => 'Nodejs , ExpressJs, NestJs, javascript',
        //     'company' => 'Bayer',
        //     'location' => 'Dortmund, GR',
        //     'website' => 'www.Bayer.de',
        //     'email' => 'Bayer@contact.de',
        //     'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis quam atque 
        //     commodi, autem harum possimus sint? Iusto, repellendus neque!
        //     Ut labore expedita aspernatur voluptates eligendi, pariatur amet tenetur nihil! Ipsum!'


        // ]);
    }
}
