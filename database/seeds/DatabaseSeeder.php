<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(FiscaliaSeeder::class);
        $this->call(CausaSeeder::class);
        $this->call(TipoEspecieSeeder::class);
        $this->call(SubTipoEspecieSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ConfiguracionSeeder::class);
    }
}
