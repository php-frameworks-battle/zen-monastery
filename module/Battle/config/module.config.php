<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'Battle\Controller\Battle' => 'Battle\Controller\BattleController',
        ),
    ),
    'router' => array(
        'routes' => array(
            'battle' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/battle[/:action]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                    ),
                    'defaults' => array(
                        'controller' => 'Battle\Controller\Battle',
                        'action'     => 'index',
                    ),
                ),
            ),
        ),
    ),    
    'view_manager' => array(
        'template_path_stack' => array(
            'battle' => __DIR__ . '/../view',
        ),
    ),
);