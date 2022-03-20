<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServidorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $unidade_id = DB::table('unidades')->where('nome','UFAPE - SEDE (Unidade Acadêmica de Garanhuns)')->pluck('id');

      DB::table('servidors')->insert([
        'matricula'=>'123456789',
        'unidade_id'=>$unidade_id[0],
        'user_id'=>3,
      ]);
    }
}
