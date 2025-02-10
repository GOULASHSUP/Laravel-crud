<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ToyotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $toyota = new \App\Models\Toyota([
            'model' => 'Corolla',
            'engine' => '1.8L Hybrid',
            'price' => '215000 DKK',
        ]);
        $toyota->save();
        $toyota = new \App\Models\Toyota([
            'model' => 'Camry',
            'engine' => '2.5L Hybrid',
            'price' => '320000 DKK',
        ]);
        $toyota->save();
        $toyota = new \App\Models\Toyota([
            'model' => 'RAV4',
            'engine' => '2.5L Turbo',
            'price' => '499000 DKK',
        ]);
        $toyota->save();
        $toyota = new \App\Models\Toyota([
            'model' => 'Land Cruiser',
            'engine' => '4.5L Turbo',
            'price' => '5450000 DKK',
        ]);
        $toyota->save();
        $toyota = new \App\Models\Toyota([
            'model' => 'Supra',
            'engine' => '3.0L Turbo',
            'price' => '690000 DKK',
        ]);
        $toyota->save();
        $toyota = new \App\Models\Toyota([
            'model' => 'Yaris',
            'engine' => '1.5L Hybrid',
            'price' => '180000 DKK',
        ]);
        $toyota->save();
    }
}
