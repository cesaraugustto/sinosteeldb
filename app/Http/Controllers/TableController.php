<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


class TableController extends Controller
{
    public function getTablesSchema()
    {
        $tables = DB::select('SHOW TABLES');
        $schemas = [];
    
        foreach ($tables as $table) {
            $tableName = reset($table);
            $schema = DB::select("SHOW CREATE TABLE `$tableName`")[0]->{"Create Table"};
            $schemas[$tableName] = $schema;
        }
    
        // Retorna o JSON
        return response()->json($schemas);
    }
}
