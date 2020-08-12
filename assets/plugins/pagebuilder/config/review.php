<?php
return [
    'title' => 'Text',
    'container' => [
        'Review'
    ],
    'fields' => [
        'block' => [
            'type' => 'group',
            'caption' => 'Отзывы/Вакансии/Сертификаты',
            'fields' => [
                'title' => [
                    'caption' => 'Title',
                    'type' => 'text',
                    'default' => ''
                ],
                'text' => [
                    'caption' => 'Text',
                    'type' => 'textarea',
                    'default' => ''
                ],
                'image' => [
                    'caption' => 'Image',
                    'type' => 'image',
                    'default' => ''
                ]
            ],
        ],
    ],
];
