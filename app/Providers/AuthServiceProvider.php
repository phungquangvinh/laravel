<?php

namespace App\Providers;

use App\Post;
use App\Policies\PostPolicy;
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
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('update-post', function ($user, $post) {
            return $user->id == $post->user_id;
        });        
        Gate::define('posts.view', 'PostPolicy@view');
        Gate::define('posts.create', 'PostPolicy@create');
        Gate::define('posts.update', 'PostPolicy@update');
        Gate::define('posts.delete', 'PostPolicy@delete');

        Gate::resource('posts', 'PostPolicy', [
            'photo' => 'updatePhoto',
            'image' => 'updateImage',
        ]);
        /*Gate::resource('posts', 'PostPolicy');
        if (Gate::allows('update-post', $post)) {
            // The current user can update the post...
        }

        if (Gate::denies('update-post', $post)) {
            // The current user can't update the post...
        }
        if (Gate::forUser($user)->allows('update-post', $post)) {
            // The user can update the post...
        }

        if (Gate::forUser($user)->denies('update-post', $post)) {
            // The user can't update the post...
        }*/
    }
}
