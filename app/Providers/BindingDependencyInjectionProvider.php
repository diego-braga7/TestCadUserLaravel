<?php

namespace App\Providers;

use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Web\UserController as WebUserController;
use App\Repositories\Abstracts\AbstractRepository;
use App\Repositories\UserRepository;
use App\Services\Abstracts\AbstractService;
use App\Services\UserService;
use App\validations\Abstracts\AbstractValidation;
use App\validations\Api\UserValidation;
use App\validations\Web\UserValidation as WebUserValidation;
use Illuminate\Support\ServiceProvider;

class BindingDependencyInjectionProvider extends ServiceProvider
{
    public function register()
    {
        parent::register();

        $this->app->when(UserController::class)
            ->needs(AbstractService::class)
            ->give(fn ($app) => $app->make(UserService::class));

        $this->app->when(UserController::class)
            ->needs(AbstractValidation::class)
            ->give(fn ($app) => $app->make(UserValidation::class));

        $this->app->when(UserService::class)
            ->needs(AbstractRepository::class)
            ->give(fn ($app) => $app->make(UserRepository::class));

            $this->app->when(WebUserController::class)
            ->needs(AbstractService::class)
            ->give(fn ($app) => $app->make(UserService::class));

        $this->app->when(WebUserController::class)
            ->needs(AbstractValidation::class)
            ->give(fn ($app) => $app->make(WebUserValidation::class));
    }
}
