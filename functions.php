<?php

namespace Flynt\Components\HeroPreLoad;

use ACFComposer\ACFComposer;
use Flynt\Components;

add_action('Flynt/afterRegisterComponents', function () {
    ACFComposer::registerFieldGroup([ 
        'name' => 'HeroPreLoad', // your component name
        'title' => 'Hero: V1', // component main title inside backen
        'style' => 'default',
        'menu_order' => 99,
        'fields' => [
            [
                'name' => 'generalTab',
                'label' => 'General',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0,
            ],
            [
                'name' => 'title',
                'label' => 'Title',
                'type' => 'text',
                'required' => true,
            ],
            [
                'name' => 'image',
                'label' => 'Hero Image',
                'type' => 'image',
                'preview_size' => 'medium',
                'required' => true,
                'return_format' => 'url',
                'mime_types' => 'gif,jpg,jpeg,png,svg'
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'page'
                ],
                [
                    'param' => 'page_type',
                    'operator' => '!=',
                    'value' => 'posts_page'
                ],
            ],
        ],
    ]);
});