<?php

use App\Models\User;
use App\Models\Usuario;
use App\Repositories\Contracts\RoleRepository;
use Illuminate\Database\Seeder;
use LucaDegasperi\OAuth2Server\Storage\FluentClient;

class OAuth2Seeder extends Seeder
{
    protected $authClient;

    /**
     * OAuth2Seeder constructor.
     * @param $authClient
     */
    public function __construct(FluentClient $authClient)
    {
        $this->authClient = $authClient;
    }


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->authClient->create("AdminPanel", "1", "1");
    }
}
