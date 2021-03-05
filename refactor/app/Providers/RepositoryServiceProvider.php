<?php

namespace DTApi\Repository;

use App\Repositories\BookingRepository;
use App\Repositories\Interfaces\BookingRepositoryInterface;
use Illuminate\Support\ServiceProvider;


/**
* The reason we create a new provider for this is that things tempt to get really messy when your project starts growing.
  Imagine a project with more than 10 models each having their own repository. Your AppServiceProvider will get unreadable.
  
* Instead of injecting the BookingRepository in the BookingController we will be injecting the BookingRepositoryInterface 
  and then let the Service Container decide which repository will be used  
  
*/

class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(
            BookingRepositoryInterface::class, 
            BookingRepository::class
        );
    }
}