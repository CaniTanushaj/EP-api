<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MarkersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('markers')->insert([
            [
                'id' => 2,
                'name' => 'Blidinje - Hajducka vrata',
                'description' => 'Blidinje hadjucka vrata',
                'imgURL' => 'https://visit-blidinje.com/wp-content/uploads/2023/02/hajducka-vrata-svitanje-scaled.jpg',
                'latitude' => 43.586529,
                'longitude' => 17.621459,
                'created_at' => Carbon::parse('2024-09-14 18:50:20'),
                'updated_at' => Carbon::parse('2024-09-14 18:50:20'),
            ],
            [
                'id' => 3,
                'name' => 'stari most',
                'description' => 'stari most',
                'imgURL' => 'https://media.cntraveller.com/photos/650c037b9a4941357e144469/16:9/w_2240,c_limit/Mostar,%20Bosnia%20and%20Herzegovina-GettyImages-909655800.jpeg',
                'latitude' => 43.3376,
                'longitude' => 17.8156,
                'created_at' => Carbon::parse('2024-09-17 13:01:30'),
                'updated_at' => Carbon::parse('2024-09-17 13:01:30'),
            ],
            [
                'id' => 5,
                'name' => 'vodopad kravice',
                'description' => 'vodopad kravice',
                'imgURL' => 'https://upload.wikimedia.org/wikipedia/commons/e/e5/Waterfalls_Kravica_5%2C_Bosnia_and_Herzegovina.jpg',
                'latitude' => 43.1564,
                'longitude' => 17.6093,
                'created_at' => Carbon::parse('2024-09-17 15:01:52'),
                'updated_at' => Carbon::parse('2024-09-17 15:01:52'),
            ],
            [
                'id' => 6,
                'name' => 'Kula Herceg Stjepana',
                'description' => 'Kula Herceg Stjepana u Ljubuskom',
                'imgURL' => 'https://kravica.ba/wp-content/uploads/Kula-Herceg-Stjepana-002a.jpg',
                'latitude' => 43.2008,
                'longitude' => 17.5467,
                'created_at' => Carbon::parse('2024-09-17 20:26:08'),
                'updated_at' => Carbon::parse('2024-09-17 20:36:10'),
            ],
            [
                'id' => 7,
                'name' => 'Omis',
                'description' => 'Grad Omis',
                'imgURL' => 'https://mediaim.expedia.com/destination/1/694fa375a65fe20cd7080d0288db089c.jpg',
                'latitude' => 43.4455,
                'longitude' => 16.6889,
                'created_at' => Carbon::parse('2024-09-17 20:27:05'),
                'updated_at' => Carbon::parse('2024-09-17 20:27:05'),
            ],
            [
                'id' => 8,
                'name' => 'Zadar',
                'description' => 'Crkva svetog Donata u Zadru',
                'imgURL' => 'https://kompas-travel.com/wp-content/uploads/2016/12/zadar-3.jpg',
                'latitude' => 44.1159,
                'longitude' => 15.2249,
                'created_at' => Carbon::parse('2024-09-17 20:29:41'),
                'updated_at' => Carbon::parse('2024-09-17 20:29:41'),
            ],
            [
                'id' => 9,
                'name' => 'Livno',
                'description' => 'Divlji konji u Livnu',
                'imgURL' => 'https://funkytours.com/wp-content/uploads/2020/06/DSC02704-2-1.jpg',
                'latitude' => 43.8263,
                'longitude' => 17.0079,
                'created_at' => Carbon::parse('2024-09-17 20:30:56'),
                'updated_at' => Carbon::parse('2024-09-17 20:30:56'),
            ],
        ]);
    }
}
