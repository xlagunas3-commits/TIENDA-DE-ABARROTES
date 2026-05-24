<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $productCatalog = [
            'Frutas y Verduras' => [
                ['name' => 'Manzana Roja', 'description' => 'Manzana fresca y jugosa de origen nacional.', 'price' => 22.50],
                ['name' => 'Banana', 'description' => 'Bananas maduras perfectas para desayunos y postres.', 'price' => 18.00],
                ['name' => 'Tomate Bola', 'description' => 'Tomate rojo ideal para salsas y ensaladas.', 'price' => 19.90],
                ['name' => 'Lechuga Romana', 'description' => 'Lechuga crujiente para ensaladas frescas.', 'price' => 15.00],
                ['name' => 'Zanahoria', 'description' => 'Zanahorias orgánicas para cocinar y cocinar al vapor.', 'price' => 12.50],
                ['name' => 'Cebolla Blanca', 'description' => 'Cebolla blanca con sabor suave, ideal para guisos.', 'price' => 17.25],
                ['name' => 'Papa Blanca', 'description' => 'Papas de mesa para guisos, purés y frituras.', 'price' => 16.75],
                ['name' => 'Pimiento Verde', 'description' => 'Pimiento fresco para ensaladas y salteados.', 'price' => 20.00],
                ['name' => 'Pepino', 'description' => 'Pepinos crujientes para agua fresca y ensalada.', 'price' => 14.90],
                ['name' => 'Piña Dulce', 'description' => 'Piña tropical con sabor dulce y jugoso.', 'price' => 45.00],
            ],
            'Lácteos' => [
                ['name' => 'Leche Entera 1L', 'description' => 'Leche entera pasteurizada natural.', 'price' => 28.90],
                ['name' => 'Yogur Natural 150g', 'description' => 'Yogur natural sin azúcar añadido.', 'price' => 14.50],
                ['name' => 'Queso Fresco 250g', 'description' => 'Queso fresco para tacos y ensaladas.', 'price' => 42.00],
                ['name' => 'Mantequilla', 'description' => 'Mantequilla cremosa para cocinar y untar.', 'price' => 55.00],
                ['name' => 'Crema para Café', 'description' => 'Crema ligera para café y postres.', 'price' => 35.20],
                ['name' => 'Queso Oaxaca 350g', 'description' => 'Queso fundente ideal para quesadillas.', 'price' => 68.00],
                ['name' => 'Requesón 200g', 'description' => 'Requesón fresco listo para desayunos y recetas.', 'price' => 32.40],
                ['name' => 'Leche Deslactosada 1L', 'description' => 'Leche deslactosada para intolerantes a la lactosa.', 'price' => 34.90],
                ['name' => 'Yogur Griego 125g', 'description' => 'Yogur griego cremoso para desayuno.', 'price' => 18.75],
                ['name' => 'Queso Panela 300g', 'description' => 'Queso panela suave y fresco.', 'price' => 52.00],
            ],
            'Panadería' => [
                ['name' => 'Pan Blanco Bimbo', 'description' => 'Pan de caja suave para sándwiches.', 'price' => 42.80],
                ['name' => 'Bolillo', 'description' => 'Bolillo fresco para tortas y acompañar comidas.', 'price' => 5.50],
                ['name' => 'Concha Surtida', 'description' => 'Concha dulce típica elaborada a diario.', 'price' => 12.00],
                ['name' => 'Baguette', 'description' => 'Baguette crujiente para compartir.', 'price' => 28.00],
                ['name' => 'Pan Integral', 'description' => 'Pan integral con fibra para desayunos saludables.', 'price' => 48.50],
                ['name' => 'Pan Dulce Variedad', 'description' => 'Pack mixto de pan dulce surtido.', 'price' => 39.90],
                ['name' => 'Galletas Marías', 'description' => 'Galletas clásicas para café.', 'price' => 18.20],
                ['name' => 'Pan de Caja Integral', 'description' => 'Pan integral de caja para tu familia.', 'price' => 47.00],
                ['name' => 'Croissant Mantequilla', 'description' => 'Croissant hojaldrado con sabor mantequilla.', 'price' => 25.00],
                ['name' => 'Pan de Molde', 'description' => 'Pan de molde suave y esponjoso.', 'price' => 40.00],
            ],
            'Bebidas' => [
                ['name' => 'Agua Mineral 600ml', 'description' => 'Agua mineral natural ligera y refrescante.', 'price' => 18.00],
                ['name' => 'Refresco Cola 2L', 'description' => 'Refresco de cola para reuniones y comidas.', 'price' => 36.00],
                ['name' => 'Jugo de Naranja 1L', 'description' => 'Jugo de naranja natural listo para servir.', 'price' => 28.90],
                ['name' => 'Té Helado Limón 500ml', 'description' => 'Té helado con limón, dulce y refrescante.', 'price' => 24.50],
                ['name' => 'Café Molido 250g', 'description' => 'Café molido ideal para espresso y cafetera.', 'price' => 78.00],
                ['name' => 'Leche Chocolateada 1L', 'description' => 'Leche con chocolate para chicos y grandes.', 'price' => 29.90],
                ['name' => 'Agua de Coco 330ml', 'description' => 'Agua de coco natural para hidratarte.', 'price' => 26.50],
                ['name' => 'Energizante 473ml', 'description' => 'Bebida energética para actividades prolongadas.', 'price' => 38.00],
                ['name' => 'Jugo de Manzana 1L', 'description' => 'Jugo de manzana 100% natural.', 'price' => 31.20],
                ['name' => 'Refresco Naranja 600ml', 'description' => 'Refresco de naranja con sabor intenso.', 'price' => 22.00],
            ],
            'Carnes y Pescados' => [
                ['name' => 'Pollo Entero', 'description' => 'Pollo fresco listo para preparar asados y guisos.', 'price' => 88.00],
                ['name' => 'Carne Molida de Res', 'description' => 'Carne molida de res de alta calidad.', 'price' => 145.00],
                ['name' => 'Filete de Res', 'description' => 'Filete de res para parrilla y sartén.', 'price' => 220.00],
                ['name' => 'Pescado Tilapia', 'description' => 'Filete de tilapia fresco, perfecto para empanizar.', 'price' => 128.00],
                ['name' => 'Jamón de Pierna', 'description' => 'Jamón en rebanadas listo para tacos y sándwiches.', 'price' => 96.50],
                ['name' => 'Salchicha de Pavo', 'description' => 'Salchicha de pavo baja en grasa.', 'price' => 75.00],
                ['name' => 'Chuleta de Cerdo', 'description' => 'Chuleta de cerdo fresca para asar.', 'price' => 138.00],
                ['name' => 'Carne para Asar', 'description' => 'Corte especial para carne asada.', 'price' => 185.00],
                ['name' => 'Pescado Salmon 200g', 'description' => 'Filete de salmón fresco para horno y parrilla.', 'price' => 265.00],
                ['name' => 'Costilla de Res', 'description' => 'Costilla para guisar o preparar al carbón.', 'price' => 198.00],
            ],
            'Snacks' => [
                ['name' => 'Papas Fritas', 'description' => 'Bolsa de papas fritas saladas.', 'price' => 19.90],
                ['name' => 'Cacahuates Japoneses', 'description' => 'Cacahuates crujientes con cobertura salada.', 'price' => 28.50],
                ['name' => 'Galletas Saladas', 'description' => 'Galletas crujientes con sabor tradicional.', 'price' => 18.00],
                ['name' => 'Chocolate Amargo 70%', 'description' => 'Tableta de chocolate amargo premium.', 'price' => 46.00],
                ['name' => 'Barra Energética', 'description' => 'Barra energética con nueces y miel.', 'price' => 25.00],
                ['name' => 'Palomitas para Microondas', 'description' => 'Palomitas de maíz para preparar en casa.', 'price' => 22.90],
                ['name' => 'Chips de Tortilla', 'description' => 'Chips de tortilla crujientes para totopos.', 'price' => 21.50],
                ['name' => 'Galletas de Vainilla', 'description' => 'Galletas dulces con sabor a vainilla.', 'price' => 19.20],
                ['name' => 'Dulces Mixtos', 'description' => 'Surtido de dulces suaves y ácidos.', 'price' => 24.00],
                ['name' => 'Nueces', 'description' => 'Paquete de nueces variadas para snack saludable.', 'price' => 48.00],
            ],
            'Congelados' => [
                ['name' => 'Pizza Familiar', 'description' => 'Pizza congelada lista para hornear.', 'price' => 98.00],
                ['name' => 'Helado Vainilla', 'description' => 'Helado cremoso de vainilla.', 'price' => 72.00],
                ['name' => 'Nuggets de Pollo', 'description' => 'Nuggets de pollo para freír o hornear.', 'price' => 62.00],
                ['name' => 'Verduras Mixtas', 'description' => 'Paquete de verduras congeladas surtidas.', 'price' => 34.90],
                ['name' => 'Papas Gajo', 'description' => 'Papas gajo congeladas para freír.', 'price' => 41.50],
                ['name' => 'Filete Empanizado', 'description' => 'Filetes empanizados listos para freír.', 'price' => 78.00],
                ['name' => 'Panqueques Congelados', 'description' => 'Panqueques listos para calentar.', 'price' => 55.00],
                ['name' => 'Croquetas de Jamón', 'description' => 'Croquetas congeladas para snack rápido.', 'price' => 49.00],
                ['name' => 'Pollo Empanizado', 'description' => 'Piezas de pollo empanizado congelado.', 'price' => 84.00],
                ['name' => 'Lasagna Congelada', 'description' => 'Lasagna lista para hornear.', 'price' => 112.00],
            ],
            'Abarrotes' => [
                ['name' => 'Arroz Blanco 1kg', 'description' => 'Arroz blanco de grano largo.', 'price' => 34.00],
                ['name' => 'Frijol Negro 1kg', 'description' => 'Frijoles negros de la mejor cosecha.', 'price' => 45.00],
                ['name' => 'Aceite de Cocina 1L', 'description' => 'Aceite vegetal para uso diario.', 'price' => 42.00],
                ['name' => 'Harina de Trigo 1kg', 'description' => 'Harina de trigo para panadería y repostería.', 'price' => 26.00],
                ['name' => 'Azúcar Refinada 1kg', 'description' => 'Azúcar blanca para postres y bebidas.', 'price' => 24.00],
                ['name' => 'Sal de Cocina 1kg', 'description' => 'Sal fina para cocinar y sazonar.', 'price' => 12.00],
                ['name' => 'Café Molido 1kg', 'description' => 'Café molido para preparar en casa.', 'price' => 155.00],
                ['name' => 'Pasta Espagueti 500g', 'description' => 'Pasta de trigo ideal para platillos italianos.', 'price' => 28.00],
                ['name' => 'Salsa de Tomate 400g', 'description' => 'Salsa de tomate lista para cocinar.', 'price' => 18.50],
                ['name' => 'Mayonesa 430g', 'description' => 'Mayonesa cremosa para sándwiches y ensaladas.', 'price' => 31.90],
            ],
        ];

        foreach ($productCatalog as $categoryName => $products) {
            $category = Category::where('name', $categoryName)->first();
            if (!$category) {
                continue;
            }

            foreach ($products as $productData) {
                Product::updateOrCreate(
                    ['name' => $productData['name']],
                    array_merge($productData, [
                        'category_id' => $category->id,
                        'stock' => rand(10, 120),
                        'image_url' => $this->placeholderImage($productData['name']),
                    ])
                );
            }
        }

        // Generate más productos de ejemplo con descripciones variadas
        $additionalProducts = [
            'Yerba Mate', 'Galletas Integrales', 'Atún en Lata', 'Jugo de Piña', 'Mermelada de Fresa',
            'Queso Ranchero', 'Tortillas de Maíz', 'Pollo en Pierna', 'Puré de Papa', 'Salsa Verde',
            'Pan de Molde Blanco', 'Leche en Polvo', 'Café Instantáneo', 'Agua Gasificada', 'Jamón York',
            'Cereal de Maíz', 'Jamonada', 'Masa para Enchiladas', 'Mostaza', 'Ketchup',
        ];

        foreach ($additionalProducts as $name) {
            $category = Category::inRandomOrder()->first();
            Product::create([
                'name' => $name,
                'description' => 'Producto popular y disponible en nuestras tiendas para consumo diario.',
                'price' => rand(15, 220) + rand(0, 99) / 100,
                'stock' => rand(5, 100),
                'category_id' => $category->id,
                'image_url' => $this->placeholderImage($name),
            ]);
        }
    }

    private function placeholderImage(string $text): string
    {
        return 'https://via.placeholder.com/640x480.png?text=' . urlencode($text);
    }
}
