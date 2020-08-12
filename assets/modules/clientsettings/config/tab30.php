<?php

return [
    'caption'  => 'Как мы работаем',

    'menu' => [
        'alias' => 'custommenu',
        'caption' => 'Как мы работаем',
        'icon' => 'fa-sliders',
    ],

    'settings' => [
        'heading' => [
            'caption' => 'Заголовок',
            'type'  => 'text',
            'note'  => 'Заголовок',
            'default_text' => 'Как мы работаем',
        ],
        'items' => [
            'caption' => 'Элементы',
            'type'    => 'custom_tv:multitv',
        ],
    ],
];
