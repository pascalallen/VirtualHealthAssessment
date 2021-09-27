<?php

namespace App\Providers;

use App\Repositories\DoctrinePatientRepository;
use App\Repositories\PatientRepositoryInterface;
use Doctrine\DBAL\DriverManager;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind('DoctrineDBALConnection', function () {
            return DriverManager::getConnection(
                [
                    'driver'   => 'pdo_mysql',
                    'host'     => env('DB_HOST'),
                    'dbname'   => env('DB_DATABASE'),
                    'user'     => env('DB_USERNAME'),
                    'password' => env('DB_PASSWORD')
                ]
            );
        });

        $this->app->bind(PatientRepositoryInterface::class, DoctrinePatientRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
