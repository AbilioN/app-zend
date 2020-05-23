<?php

namespace Pessoa;
use Zend\ServiceManager\Factory\InvokableFactory;
return [
    'router' => [
        'routes' => [
            'pessoa' => [
                'type' => \Zend\Router\Http\Segment::class,
                'options' => [
                    'route' => '/pessoa[/:action[/:id]]',
                    'constraints' => [
                        'action' => '[a-zA-z][a-zA-Z0-9_-]*',
                        'id' => '[0-9]+'
                    ],
                    'defaults' => [
                        'controller' => Controller\PessoaController::class,
                        'action' => 'index' 
                    ],
                ]
            ],
        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\PessoaController::class => InvokableFactory::class,
        ]
    ],
    'view_manager' => [
        'template_path_stack' => [
            'pessoa' => __DIR__.'/../view',
        ],
    ]
];
//  /pessoa/listar/todos exemplo de rota para este router
// /pessoa/editar/1 
?>