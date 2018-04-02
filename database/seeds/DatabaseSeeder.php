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
        DB::insert('insert into produtos (descricao, quantidade, valor) values (?,?,?)', array ('Blusa regata', 10, 8.99));
        DB::insert('insert into produtos (descricao, quantidade, valor) values (?,?,?)', array ('Camiseta CK', 10, 89.99));
        DB::insert('insert into produtos (descricao, quantidade, valor) values (?,?,?)', array ('Shorts ADIDAS', 10, 70.99));
        DB::insert('insert into produtos (descricao, quantidade, valor) values (?,?,?)', array ('Moleton NIKE', 10, 119.90));

    }
}
