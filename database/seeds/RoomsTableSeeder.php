<?php

use Illuminate\Database\Seeder;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		$rooms = [
			[
				'hotel_id' => '1',
				'type' => 'Double - Room for 4',
				'description' => '2 queen-sized beds',
				'price' => '199.99',
				'image' => 'https://placeimg.com/640/480/arch'
            ],
			[
				'hotel_id' => '2',
				'type' => 'Double - Room for 1',
				'description' => '1 twin-sized bed',
				'price' => '89.99',
				'image' => 'https://placeimg.com/640/480/arch'
            ],
			[
				'hotel_id' => '1',
				'type' => 'Double - Room for 3',
				'description' => '1 queen-sized & twin-sized bed',
				'price' => '169.99',
				'image' => 'https://placeimg.com/640/480/arch'
            ],
			[
				'hotel_id' => '2',
				'type' => 'Double - Room for 2',
				'description' => '1 queen-sized bed',
				'price' => '199.99',
				'image' => 'https://placeimg.com/640/480/arch'
            ],
			[
				'hotel_id' => '3',
				'type' => 'Honeymoon Suite for 2',
				'description' => 'International luxurious hotel.',
				'price' => '599.99',
				'image' => 'https://placeimg.com/640/480/arch'
            ]
		]    
}
