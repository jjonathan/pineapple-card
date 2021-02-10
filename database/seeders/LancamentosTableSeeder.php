<?php

namespace Database\Seeders;

use App\Domain\Lancamentos\Models\LancamentosModel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LancamentosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lancamentos')->delete();

        $dbFile = file_get_contents(__DIR__ . '/../../db.csv');
        $insert = [];
        foreach (explode("\n", $dbFile) as $lineStr) {
            $line = explode(";", $lineStr);
            LancamentosModel::create([
                'id' => $line[0],
                'data_lancamento' => $line[1],
                'hora_lancamento' => $line[2],
                'estabelecimento' => $line[3],
                'categoria_estabelecimento' => $line[4],
                'latitude_estabelecimento' => $line[5],
                'longitude_estabelecimento' => $line[6],
                'taxa_pontuacao' => $line[7],
                'valor_lancamento' => $line[8],
            ]);
        }
    }
}
