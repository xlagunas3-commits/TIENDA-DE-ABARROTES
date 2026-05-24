<?php

namespace Database\Seeders;

use App\Models\Supplier;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    public function run(): void
    {
        $suppliers = [
            ['name' => 'Distribuidora La Huerta', 'contact_email' => 'ventas@lahuerta.com', 'phone' => '55 1234 5678', 'address' => 'Av. Insurgentes 1024, Ciudad de México'],
            ['name' => 'Alimentos del Campo', 'contact_email' => 'contacto@alimentoscampo.mx', 'phone' => '33 9876 5432', 'address' => 'Calle 5 de Mayo 780, Guadalajara'],
            ['name' => 'Sabor Mexicano', 'contact_email' => 'pedido@sabormexicano.com', 'phone' => '81 2222 3333', 'address' => 'Av. Chapultepec 150, Monterrey'],
            ['name' => 'Proveedor Norte', 'contact_email' => 'norte@proveedores.com', 'phone' => '55 9988 7766', 'address' => 'Carretera México-Toluca Km 23, Toluca'],
            ['name' => 'Importaciones Selectas', 'contact_email' => 'ventas@importselecta.mx', 'phone' => '55 7744 3322', 'address' => 'Parque Industrial Naucalpan, Estado de México'],
            ['name' => 'Panadería La Casa', 'contact_email' => 'pan@lacasapanaderia.com', 'phone' => '55 4444 8888', 'address' => 'Calle Juárez 211, Puebla'],
            ['name' => 'Lácteos San José', 'contact_email' => 'info@lacteossanjose.mx', 'phone' => '55 9987 6543', 'address' => 'Ruta 66 45, Toluca'],
            ['name' => 'Bebidas del Valle', 'contact_email' => 'contacto@bebidasdelvalle.mx', 'phone' => '33 5555 6666', 'address' => 'Av. de la Paz 410, Guadalajara'],
            ['name' => 'Mariscos El Puerto', 'contact_email' => 'pedidos@mariscospuerto.com', 'phone' => '55 2121 2121', 'address' => 'Calle 8 Norte 120, Veracruz'],
            ['name' => 'Congelados Frío Express', 'contact_email' => 'clientes@frioexpress.mx', 'phone' => '81 7777 9999', 'address' => 'Av. Universidad 321, Monterrey'],
            ['name' => 'Abarrotes del Centro', 'contact_email' => 'ventas@abarrotescentro.com', 'phone' => '55 3333 1111', 'address' => 'Mercado Central, Ciudad de México'],
            ['name' => 'Frutas del Pacífico', 'contact_email' => 'contacto@frutaspacifico.mx', 'phone' => '33 6666 7777', 'address' => 'Av. del Mar 180, Mazatlán'],
            ['name' => 'Snack Factory', 'contact_email' => 'info@snackfactory.mx', 'phone' => '55 1616 1616', 'address' => 'Zona Industrial, Querétaro'],
            ['name' => 'Distribuidora Rancho', 'contact_email' => 'ventas@rancho.mx', 'phone' => '55 8181 8181', 'address' => 'Camino Real 72, Toluca'],
            ['name' => 'Mercado Verde', 'contact_email' => 'pedido@mercadoverde.mx', 'phone' => '55 7777 4444', 'address' => 'Av. Revolución 560, Ciudad de México'],
        ];

        foreach ($suppliers as $supplier) {
            Supplier::updateOrCreate(['name' => $supplier['name']], $supplier);
        }
    }
}
