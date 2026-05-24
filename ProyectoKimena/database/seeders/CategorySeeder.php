<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['name' => 'Frutas y Verduras', 'description' => 'Cosecha fresca de frutas y verduras nacionales para tu cocina diaria.'],
            ['name' => 'Lácteos', 'description' => 'Productos lácteos frescos como leche, queso y yogur para cada comida.'],
            ['name' => 'Panadería', 'description' => 'Pan fresco, bollería y repostería elaborada diariamente en horno artesanal.'],
            ['name' => 'Bebidas', 'description' => 'Aguas, jugos, refrescos y bebidas energéticas para toda la familia.'],
            ['name' => 'Carnes y Pescados', 'description' => 'Cortes de carne y pescado fresco, listos para cocinar en casa.'],
            ['name' => 'Snacks', 'description' => 'Aperitivos, botanas y golosinas para compartir y disfrutar.'],
            ['name' => 'Congelados', 'description' => 'Alimentos congelados prácticos y de calidad para preparar rápido.'],
            ['name' => 'Abarrotes', 'description' => 'Productos secos, especias y básicos de despensa que no pueden faltar.'],
        ];

        foreach ($categories as $category) {
            Category::updateOrCreate(['name' => $category['name']], $category);
        }
    }
}
