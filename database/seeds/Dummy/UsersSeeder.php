<?php

use App\Models\User;
use App\Repositories\Contracts\RoleRepository;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 3; $i++){
            $this->createUser('admin', "admin{$i}@larablog.com", '12345678');
        }

        for($i = 0; $i < 10; $i++){
            $this->createUser('author', "author{$i}@larablog.com", '12345678');
        }

        for($i = 0; $i < 10; $i++){
            $this->createUser('editor', "editor{$i}@larablog.com", '12345678');
        }
        
    }

    protected function createUser($role, $email = null, $password = null)
    {
        $role = app()->make(RoleRepository::class)->findRole($role);
        
        if(!$role){
            throw new InvalidArgumentException();
        }
        
        $user = factory(User::class)->create(compact($email, $password));
        
        $user->attachRole($role);
    }

}
