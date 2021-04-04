<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('home', function($user){
            if($user->role_id == 1 || $user->role_id == 2){
                return false;
            } else {
                return true;
            }
        });

        Gate::define('article', function($user){
            if($user->role_id == 1){
                return false;
            } else {
                return true;
            }
        });

        Gate::define('redacteur', function($user, $article){
            if($user->role_id == 2){
                return $user->id == $article->user_id;
            } elseif($user->role_id == 3 || $user->role_id == 4){
                return true;
            }
        });
    }
}
