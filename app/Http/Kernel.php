<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * @var array
     */
    protected $middleware = [
//        \Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::class,
//        \App\Http\Middleware\EncryptCookies::class,
//        \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
//        \Illuminate\Session\Middleware\StartSession::class,
//        \Illuminate\View\Middleware\ShareErrorsFromSession::class,
//        \App\Http\Middleware\SetContext::class,
//        \App\Http\Middleware\VerifyCsrfToken::class
    ];

    /**
     * The application's route middleware.
     *
     * @var array
     */
    protected $routeMiddleware = [
//        'auth' => \App\Http\Middleware\Authenticate::class,
//        'guest' => \App\Http\Middleware\HandleGuest::class,

        'cors' => \App\Http\Middleware\Cors::class,
        'oauth' => \App\Http\Middleware\OAuth2::class,
        'oauth-user' => \LucaDegasperi\OAuth2Server\Middleware\OAuthUserOwnerMiddleware::class,
        'oauth-client' => \LucaDegasperi\OAuth2Server\Middleware\OAuthClientOwnerMiddleware::class,
        'check-authorization-params' => \LucaDegasperi\OAuth2Server\Middleware\CheckAuthCodeRequestMiddleware::class,

        // Access control using permissions
        'needsPermission' => \Artesaos\Defender\Middlewares\NeedsPermissionMiddleware::class,

        // Simpler access control, uses only the groups
        'needsRole' => \Artesaos\Defender\Middlewares\NeedsRoleMiddleware::class
    ];
}