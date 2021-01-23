<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Database\Traits\DumpSql;

class CategorySeeder extends Seeder
{
	use DumpSql;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->dump('categories.sql');
    }
}
