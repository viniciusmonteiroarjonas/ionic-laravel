<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		DB::table('users')->insert([
			'name' => 'Vinicius Monteiro Arjonas',
			'email' => 'viniciusmonteiroarjonas@outlook.com',
			'password' => bcrypt('180213'),
		]);
		$this->command->info('Usuário vinicius Adicionado com sucesso');

		DB::table('ofertas')->insert([
            'titulo'    => 'Celular',
            'descricao' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'validade'  => '2018-10-22',
            'valor'     => '1800',
            'valor_f'   => 'R$ 1.600,00',
            'imagem'    => 'img/celular.jpeg'
        ]);

        DB::table('ofertas')->insert([
            'titulo'    => 'Computador',
            'descricao' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'validade'  => '2018-10-22',
            'valor'     => '2000',
            'valor_f'   => 'R$ 1800,00',
            'imagem'    => 'img/computador.jpeg'
        ]);

        DB::table('ofertas')->insert([
            'titulo'    => 'Fone de Ouvido',
            'descricao' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'validade'  => '2018-10-22',
            'valor'     => '300',
            'valor_f'   => 'R$ 150,00',
            'imagem'    => 'img/foneouvido.jpeg'
        ]);

        DB::table('ofertas')->insert([
            'titulo'    => 'Notebook',
            'descricao' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'validade'  => '2018-10-22',
            'valor'     => '3000',
            'valor_f'   => 'R$ 2700,00',
            'imagem'    => 'img/notebook.jpg'
        ]);

        DB::table('ofertas')->insert([
            'titulo'    => 'Tablet',
            'descricao' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'validade'  => '2018-10-22',
            'valor'     => '500',
            'valor_f'   => 'R$ 280,00',
            'imagem'    => 'img/tablet.jpeg'
        ]);

        $this->command->info('Ofertas adicionadas com sucesso');
	}
}
