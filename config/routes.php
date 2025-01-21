<?php
use Cake\Routing\Route\DashedRoute;
use Cake\Routing\RouteBuilder;

return function (RouteBuilder $routes):void {
    $routes->plugin(
        'Matthewtan/Userbtob',
        ['path' => '/userbtob'],
        function (RouteBuilder $builder) {
            // Add custom routes here
            $builder->connect('/users', ['controller' => 'Users', 'action' => 'index']);

            $builder->fallbacks();
        }
    );
};
