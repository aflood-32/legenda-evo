<?php
return [
    'title' => 'Mission',
    'container' => [
        'MainContent'
    ],
    'fields' => [
        'block' => [
            'type' => 'group',
            'caption' => 'Миссии',
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
            ],
        ],
    ],
];
