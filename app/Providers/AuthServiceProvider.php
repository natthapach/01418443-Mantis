<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
        'App\User' => 'App\Policies\UserPolicy'
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        
        /* 
            define on Policy
        */
        
        // Gate::before(function ($user, $ability) {
        //     return $user->isSuperAdmin();
        // });

        // Gate::define('update-user', function ($user, $userModel) {
        //     return $user->id === $userModel->id;
        // });

        // Gate::define('update-issue', function($user, $issue){
        //     return $user->id === $issue->reporter or
        //             $user->id === $issue->assigned_to;
        // });

        // Gate::define('create-user', function($user){
        //     return false;
        // });
    }
}
