<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('insert into produtos (descricao, quantidade, valor, data_compra, total, fornecedor) values (?,?,?)', array ('Blusa regata', 10, 8.99, 20/12/2000, 89.90, 'China post'));
        DB::insert('insert into produtos (descricao, quantidade, valor, data_compra, total, fornecedor) values (?,?,?)', array ('Camiseta CK', 10, 89.99, 20/12/2000, 89.90, 'China post'));
        DB::insert('insert into produtos (descricao, quantidade, valor, data_compra, total, fornecedor) values (?,?,?)', array ('Shorts ADIDAS', 10, 70.99, 20/12/2000, 89.90, 'China post'));
        DB::insert('insert into produtos (descricao, quantidade, valor, data_compra, total, fornecedor) values (?,?,?)', array ('Moleton NIKE', 10, 119.90, 20/12/2000, 89.90, 'China post'));

    }
}
