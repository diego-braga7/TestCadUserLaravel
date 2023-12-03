<?php

namespace App\Providers;

use App\Http\Controllers\Api\UserController;
use App\Http\Repositories\Abstracts\AbstractRepository;
use App\Http\Repositories\UserRepository;
use App\Services\Abstracts\AbstractService;
use App\Services\UserService;
use Illuminate\Support\ServiceProvider;

class BindingDependencyInjectionProvider extends ServiceProvider
{
    public function register()
    {
        parent::register();

        $this->app->when(UserController::class)
            ->needs(AbstractService::class)
            ->give(fn ($app) => $app->make(UserService::class));

        $this->app->when(UserService::class)
            ->needs(AbstractRepository::class)
            ->give(fn ($app) => $app->make(UserRepository::class));
    }
}
