<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;
use App\User;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
        'App\Skill' => 'App\Policies\SkillPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // Gate::define('view', function (User $user) 
        // {
        //     return Auth::check();
        // });

        // Gate::define('manager', function (User $user, $param) 
        // {
        //     return Auth::check() && (Auth::user()->admin || Auth::id() === $param->id) ;
        // });

        // Gate::define('edit-settings', function ($user) {
        //     return $user->isAdmin;
        // });
    
        // Gate::define('update-post', function ($user, $post) {
        //     return $user->id == $post->user_id;
        // });
    }
}
