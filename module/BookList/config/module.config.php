<?php

return [
    'controllers' => [
        'invokables' => [
            'BookList\Controller\Book' => 'BookList\Controller\BookController',
        ]
    ],
    'router' => [
        'routes' => [
            'book' => [
                'type' => 'segment',
                'options' => [
                    'route' => '/book[/][:action][/:id]',
                    'constraints' => [
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id' => '[0-9]+',
                    ],
                    'defaults' => [
                        'controller' => 'BookList\Controller\Book',
                        'action' => 'index',
                    ]
                ]
            ]
        ]
    ],
    'view_manager' => [
        'template_path_stack' => [
            'book' => __DIR__ . '/../view',
        ]
    ]
];