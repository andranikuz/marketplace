<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Database\Traits\DumpSql;

class RegionSeeder extends Seeder
{
	use DumpSql;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->dump('regions.sql');
    }
}
