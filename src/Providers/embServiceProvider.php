<?php

namespace emb\Providers;

use Plenty\Plugin\ServiceProvider;
use emb\Contracts\embRepositoryContract;
use emb\Repositories\embRepository;

/**
 * Class ToDoServiceProvider
 * @package ToDoList\Providers
 */
class embServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     */
    public function register()
    {
        $this->getApplication()->register(embRouteServiceProvider::class);
        $this->getApplication()->bind(embRepositoryContract::class, embRepository::class);
    }
}
