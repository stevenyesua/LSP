<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;


class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        Gate::define('admin', function (User $user) {
            return $user->isAdmin();
        });

        Gate::define('mahasiswa_baru', function (User $user) {
            return $user->isMahasiswaBaru();
        });

        Gate::define('calon_mahasiswa', function ($user) {
            return $user->isCalonMahasiswa();
        });

        Gate::define('admin_mahasiswa_baru', function (User $user) {
            return $user->isAdmin()||$user->isMahasiswaBaru();
        });
    }
}
