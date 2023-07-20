<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Category;
use App\Models\User;
use App\Models\Country;
use App\Models\Language;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'username' => 'hisimresandor',
            'password' => bcrypt('...')
        ]);

        User::create([
            'username' => 'vendeg',
            'password' => bcrypt('...')
        ]);

        Country::create([
            'country' => 'Magyarország'
        ]);
        
        Country::create([
            'country' => 'Egyesült Királyság'
        ]);
        
        Country::create([
            'country' => 'Amerikai Egyesült Államok'
        ]);
        
        Country::create([
            'country' => 'Németország'
        ]);
        
        Country::create([
            'country' => 'Románia'
        ]);

        Language::create([
            'language' => 'magyar'
        ]);

        Language::create([
            'language' => 'angol'
        ]);

        Language::create([
            'language' => 'német'
        ]);

        Category::create([
            'category' => 'Magyar irodalom'
        ]);

        Category::create([
            'category' => 'Külföldi irodalom'
        ]);

        Category::create([
            'category' => 'Idegen nyelvű'
        ]);

        Category::create([
            'category' => 'Ismeretterjesztő'
        ]);

        Category::create([
            'category' => 'Számítástechnika'
        ]);

        Category::create([
            'category' => 'Szórakoztató'
        ]);

        Category::create([
            'category' => 'Tankönyv'
        ]);
    }
}
