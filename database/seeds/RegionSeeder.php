<?php

use Illuminate\Database\Seeder;
use App\Region;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Region::updateOrCreate(['region' => 'X']);
        Region::updateOrCreate(['region' => 'IX']);
    }
}
