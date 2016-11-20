<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Product;

class ProductTableSeeder extends Seeder 
{

	/**
	 * Run the Products table seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$data = array(
			[
				'name' 			=> 'Producto 1',
				'slug' 			=> 'Producto-1',
				'description' 	=> 'Descripcion',
				'extract' 		=> 'extract',
				'price' 		=> 100.00,
				'image' 		=> 'http://cdn.macrumors.com/article-new/2016/02/iphoneserosegold-800x898.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 1
			],
			[
				'name' 			=> 'Producto 2',
				'slug' 			=> 'Producto-2',
				'description' 	=> 'Descripcion',
				'extract' 		=> 'extract',
				'price' 		=> 100.00,
				'image' 		=> 'http://cdn.macrumors.com/article-new/2016/02/iphoneserosegold-800x898.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 1
			],
			[
				'name' 			=> 'Producto 3',
				'slug' 			=> 'Producto-3',
				'description' 	=> 'Descripcion',
				'extract' 		=> 'extract',
				'price' 		=> 100.00,
				'image' 		=> 'http://cdn.macrumors.com/article-new/2016/02/iphoneserosegold-800x898.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 1
			],
			[
				'name' 			=> 'Producto 4',
				'slug' 			=> 'Producto-4',
				'description' 	=> 'Descripcion',
				'extract' 		=> 'extract',
				'price' 		=> 100.00,
				'image' 		=> 'http://cdn.macrumors.com/article-new/2016/02/iphoneserosegold-800x898.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 2
			],
			[
				'name' 			=> 'Producto 5',
				'slug' 			=> 'Producto-5',
				'description' 	=> 'Descripcion',
				'extract' 		=> 'extract',
				'price' 		=> 100.00,
				'image' 		=> 'http://cdn.macrumors.com/article-new/2016/02/iphoneserosegold-800x898.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 2
			],
			[
				'name' 			=> 'Producto 6',
				'slug' 			=> 'Producto-6',
				'description' 	=> 'Descripcion',
				'extract' 		=> 'extract',
				'price' 		=> 100.00,
				'image' 		=> 'http://cdn.macrumors.com/article-new/2016/02/iphoneserosegold-800x898.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 2
			],
			[
				'name' 			=> 'Producto 7',
				'slug' 			=> 'Producto-7',
				'description' 	=> 'Descripcion',
				'extract' 		=> 'extract',
				'price' 		=> 100.00,
				'image' 		=> 'http://cdn.macrumors.com/article-new/2016/02/iphoneserosegold-800x898.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 1
			],
			[
				'name' 			=> 'Producto 8',
				'slug' 			=> 'Producto-8',
				'description' 	=> 'Descripcion',
				'extract' 		=> 'extract',
				'price' 		=> 100.00,
				'image' 		=> 'http://cdn.macrumors.com/article-new/2016/02/iphoneserosegold-800x898.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 2
			],
			
		);

		Product::insert($data);

	}

}