<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        $options = ['immeuble', 'maison', 'Espace Magasin','villa'];
        foreach($options as $key => $option){
        DB::table('type_proprietes')->insert([
            'libelle' => $option,
            // 'created_At'=> now(),
            // 'updated_At'=> now()
        ]);
    }
        $this->call([
            PaysSeeder::class,
            RegionSeeder::class,
            DepartementSeeder::class,
            CommuneSeeder::class,
            QuartierSeeder::class,
        ]);
    }
}
