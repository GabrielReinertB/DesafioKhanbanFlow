<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Column;

class ColumnSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$colunas = [
			['name' => 'Aguardando Início'], 
			['name' => 'Em Andamento'], 
			['name' => 'Concluído'], 
			['name' => 'Em Espera'],
		];

		foreach ($colunas as $key => $coluna) {
			$column = new Column;
			$column->project_id = 1;
			$column->name = $coluna['name'];
			$column->position = $key;
			$column->save();
		}
    }
}
