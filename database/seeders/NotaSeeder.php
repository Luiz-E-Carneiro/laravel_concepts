<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('notas')->insert([
            'titulo'=> 'asjdkasdjakd',
            'texto'=> 'ASKJGDHADAS'
        ]);
        DB::table('notas')->insert([
            'titulo'=> 'asjdkasdjakd',
            'texto'=> 'Str::random(20)'
        ]);
    }
}
