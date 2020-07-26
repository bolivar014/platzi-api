<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Inicializamos para que nos cree 10 productos en la tabla Product
        factory(Product::class, 10)->create();
    }
}
