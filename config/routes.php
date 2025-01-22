<?php

use Cake\Routing\RouteBuilder;

return function (RouteBuilder $routes): void {
    $routes->plugin(
        'TsUserBToB',
        ['path' => '/userbtob'],
        function (RouteBuilder $builder): void {
            // Add custom routes here
            $builder->connect('/users', ['controller' => 'Users', 'action' => 'index']);

            $builder->fallbacks();
        }
    );
};
