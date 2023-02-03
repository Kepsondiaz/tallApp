<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('categories')->insert([
            ['name' => 'Humour'],
            ['name' => 'Littérature'],
            ['name' => 'Scolaire'],
            ['name' => 'Guides pratiques'],
            ['name' => 'Sciences sociales'],
            ['name' => 'Cuisine'],
        ]);
        DB::table('books')->insert([
            ['name' => 'Brèves de comptoir', "Category_id" => 1],
            ['name' => 'La Castafiore', "Category_id" => 1],
            ['name' => 'Prises de bec', "Category_id" => 1],
            ['name' => 'Les grosses têtes', "Category_id" => 1],
            ['name' => 'Les meilleures blagues', "Category_id" => 1],
            ['name' => 'Les murmures du lac', "Category_id" => 2],
            ['name' => 'Rien de sérieux', "Category_id" => 2],
            ['name' => 'Massada', "Category_id" => 2],
            ['name' => 'La montée des eaux', "Category_id" => 2],
            ['name' => 'Mon cahier d\'écriture', "Category_id" => 3],
            ['name' => 'Parcoursup', "Category_id" => 3],
            ['name' => 'Croc blanc', "Category_id" => 3],
            ['name' => 'Tropismes', "Category_id" => 3],
            ['name' => 'Halte au virus !', "Category_id" => 3],
            ['name' => 'Fiscalité immobilaire', "Category_id" => 4],
            ['name' => 'Créer une SCI', "Category_id" => 4],
            ['name' => 'La copropriété', "Category_id" => 4],
            ['name' => 'Le diable', "Category_id" => 5],
            ['name' => 'Penser librement', "Category_id" => 5],
            ['name' => 'L\'homme', "Category_id" => 5],
            ['name' => 'La religion', "Category_id" => 5],
            ['name' => 'Le suicide', "Category_id" => 5],
            ['name' => 'Le pain', "Category_id" => 6],
            ['name' => 'Les entrées', "Category_id" => 6],
            ['name' => 'Les brioches', "Category_id" => 6],
        ]);
    }
}
