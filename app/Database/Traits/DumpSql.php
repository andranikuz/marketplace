<?php

namespace App\Database\Traits;
use DB;

trait DumpSql
{
    /**
     * Dump data from sql to database
     *
     * @param  string  $sqlname
     * @return void
     */
    public function dump(string $sqlname) :void
    {
        $sql = file_get_contents(database_path('sql-dumps/'.$sqlname));

        try {
            DB::unprepared($sql);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
