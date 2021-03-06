<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

/**
 * Class AnomalyModulePostsCreatePostsFields
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 */
class AnomalyModulePostsCreatePostsFields extends Migration
{

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'str_id'           => 'anomaly.field_type.text',
        'name'             => 'anomaly.field_type.text',
        'title'            => 'anomaly.field_type.text',
        'slug'             => [
            'type'   => 'anomaly.field_type.slug',
            'config' => [
                'slugify' => 'title',
                'type'    => '-'
            ]
        ],
        'type'             => [
            'type'   => 'anomaly.field_type.relationship',
            'config' => [
                'related' => 'Anomaly\PostsModule\Type\TypeModel'
            ]
        ],
        'tags'             => 'anomaly.field_type.tags',
        'summary'          => 'anomaly.field_type.textarea',
        'description'      => 'anomaly.field_type.textarea',
        'publish_at'       => 'anomaly.field_type.datetime',
        'entry'            => 'anomaly.field_type.polymorphic',
        'author'           => [
            'type'   => 'anomaly.field_type.user',
            'config' => [
                'permission' => 'anomaly.module.posts::posts.write'
            ]
        ],
        'layout'           => [
            'type'   => 'anomaly.field_type.editor',
            'config' => [
                'default_value' => '<h1>{{ post.title }}</h1>',
                'mode'          => 'twig'
            ]
        ],
        'category'         => [
            'type'   => 'anomaly.field_type.relationship',
            'config' => [
                'related' => 'Anomaly\PostsModule\Category\CategoryModel'
            ]
        ],
        'enabled'          => [
            'type'   => 'anomaly.field_type.boolean',
            'config' => [
                'default_value' => false
            ]
        ],
        'featured'         => [
            'type'   => 'anomaly.field_type.boolean',
            'config' => [
                'default_value' => false
            ]
        ],
        'meta_title'       => 'anomaly.field_type.text',
        'meta_description' => 'anomaly.field_type.textarea',
        'meta_keywords'    => 'anomaly.field_type.tags',
        'ttl'              => [
            'type'   => 'anomaly.field_type.integer',
            'config' => [
                'min'  => 0,
                'step' => 1,
                'page' => 5
            ]
        ],
        'css'              => [
            'type'   => 'anomaly.field_type.editor',
            'config' => [
                'mode' => 'css'
            ]
        ],
        'js'               => [
            'type'   => 'anomaly.field_type.editor',
            'config' => [
                'mode' => 'javascript'
            ]
        ],
        'theme_layout'     => [
            'type'   => 'anomaly.field_type.select',
            'config' => [
                'handler' => \Anomaly\SelectFieldType\Handler\Layouts::class
            ]
        ]
    ];

}
