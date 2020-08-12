<?php
return [
    'title' => 'Slider',

    'container' => [
        'MainContent'
    ],
    'fields' => [
        'block' => [
            'type' => 'group',
            'caption' => 'Элементы слайдера',
            'fields' => [
                'title' => [
                    'caption' => 'Slider Title',
                    'type' => 'text',
                    'default' => ''
                ],
                'text' => [
                    'caption' => 'Slider Text',
                    'type' => 'text',
                    'default' => ''
                ],
                'image' => [
                    'caption' => 'Slider Image',
                    'type' => 'image',
                    'default' => ''
                ],
            ],
        ],
    ],
];
