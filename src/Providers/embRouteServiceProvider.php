<?php

namespace emb\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

/**
 * Class ToDoRouteServiceProvider
 * @package ToDoList\Providers
 */
class embRouteServiceProvider extends RouteServiceProvider
{
    /**
     * @param Router $router
     */
    public function map(Router $router)
    {
        $router->get('emb', 'emb\Controllers\ContentController@showEmb');
        $router->post('emb', 'emb\Controllers\ContentController@createEmb');
    }

}
