<?php

namespace App\Repositories\Contracts;


interface RoleRepository extends BaseRepository
{
    /**
     * Create a role given a name
     *
     * @param $name
     * @return mixed
     */
    public function createRole($name);

    /**
     * @param $name
     * @return mixed
     */
    public function findRole($name);
}