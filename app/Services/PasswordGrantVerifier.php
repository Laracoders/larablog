<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Contracts\Auth\Guard;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;

class PasswordGrantVerifier
{

    protected $auth;


    /**
     * PasswordGrantVerifier constructor.
     * @param Guard $auth
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }


    /**
     * @param $username
     * @param $password
     * @return bool
     */
    public function verify($username, $password)
    {
        $credentials = [
            'email'    => $username,
            'password' => $password,
            'verified' => true
        ];

        if (!$this->auth->once($credentials)) {
            throw new UnauthorizedHttpException('Unable to authenticate with supplied email and password.');
        }

        /**
         * @var User $user
         */
        $user = $this->auth->user();

        return $user->id;
    }
}