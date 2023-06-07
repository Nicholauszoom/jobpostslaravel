<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Listing::create([
            'title'=>'Laravel Seniour developer',
            'tags'=>'Laravel, Javascript',
            'company'=>'Acme Corp',
            'location'=>'Bostorm, MA',
            'email'=>'email@email.com',
            'website'=>'http://www.acme.com',
            'description'=>'  The key to writing an effectivedescriptive essay 
            is to find ways of bringing your subject to life for the reader. 
            You’re not limited to providing a literal description as you would
             be in more formal essay types. Make use of figurative language, 
             sensory details, and strong word choices to create a memorable description'
 
        ]);


        Listing::create([
            'title'=>'Symfony Seniour developer',
            'tags'=>'Symfony, Tailwind',
            'company'=>'Ubx Corp',
            'location'=>'Bostorm, MA',
            'email'=>'email@email.com',
            'website'=>'http://www.ubx.com',
            'description'=>'  The key to writing an effectivedescriptive essay 
            is to find ways of bringing your subject to life for the reader. 
            You’re not limited to providing a literal description as you would
             be in more formal essay types. Make use of figurative language, 
             sensory details, and strong word choices to create a memorable description'
 
        ]);
    }
}
