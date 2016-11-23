<?php
use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
			[
				'name' 		=> 'Roman', 
				'last_name' => 'Morga', 
				'email' 	=> 'romanmorga@gmail.com', 
				'user' 		=> 'romanmorga',
				'password' 	=> \Hash::make('123456'),
				'type' 		=> 'admin',
				'active' 	=> 1,
				'address' 	=> 'Avenida Siempre Viva 742, Sprinfield',
				'created_at'=> new DateTime,
				'updated_at'=> new DateTime
			],
			[
				'name' 		=> 'Itzel', 
				'last_name' => 'Cazarez', 
				'email' 	=> 'itzelcazarez@gmail.com', 
				'user' 		=> 'itzelcazarez',
				'password' 	=> \Hash::make('123456'),
				'type' 		=> 'user',
				'active' 	=> 1,
				'address' 	=> 'P. Sherman Calle Wallaby 42, Sydney',
				'created_at'=> new DateTime,
				'updated_at'=> new DateTime
			],
		);
		User::insert($data);
    }
}