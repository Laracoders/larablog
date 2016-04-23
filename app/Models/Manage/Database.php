<?php

namespace App\Models\Manage;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Migrations\MigrationCreator;

class Database extends Model
{
    /** Funções da classe
     * 1- Criar o banco de dados (se nao existir)
     * 2- Apagar todas as tabelas do banco de dados
     * 3- Limpar o conteúdo de todas as tabelas do banco
     * 4- Criar dados falsos (por enquanto o valor numerico é 10) ALTERAR DEPOIS
     * 5- Listar por todas as tabelas do banco
     * 5- Testar conexao com o banco
     * 6- Configuração do banco
     */

    /** Criar banco de dados se nao existir */
    public function databaseCreate($databaseName = null)
    {
        // pegar valor de DB_DATABASE no .env ou receber por parametro
        // se receber por parametro, criar o banco e configurar o .env
    }

    /** Dar drop em todas as tabelas do banco */
    public function dropAllTables()
    {
        $databaseTables = $this->catchTables();
        // fazer drop nas tabelas
    }

    /** Limpa o conteudo de todas as tabelas */
    public function cleanAllTables()
    {
        $databaseTables = $this->catchTables();
        // limpar conteudo das tabelas
    }

    /** Insere dados nas tabelas */
    public function feedTables()
    {
        factory(\App\Models\User::class,10)->create();
        factory(\App\Models\Author::class,10)->create();
        factory(\App\Models\Category::class,10)->create();
        factory(\App\Models\Tag::class,10)->create();
        factory(\App\Models\Post::class,100)->create();
        factory(\App\Models\Comment::class,100)->create();
    }

    /** Método lista todas as tabelas do banco */
    public function catchTables()
    {
        // pegar o nome de todas as tabelas do banco
        // retornar array
    }

    public function configureDatabaseConnection($driver = null, $hostname = null, $username = null, $pass = null)
    {
        $this->testDatabaseConnection();
        // se o teste de conexao retornar false, verifica se os parametros acima foram passados [retorna true ou false]
        // se retornar retornar true (tem parametros) seta as configurações passadas por parametro acima
    }

    /** Método testa conexao com o banco */
    public function testDatabaseConnection()
    {
        // ler configurações do .env
        // testar conexao usando configuração do .env [retornar true ou false]
    }
}
