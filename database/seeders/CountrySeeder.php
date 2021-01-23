<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Database\Traits\DumpSql;

class CountrySeeder extends Seeder
{
    use DumpSql;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->dump('countries.sql');
    }
}
