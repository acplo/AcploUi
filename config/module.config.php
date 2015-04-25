<?php
return [
    'view_helpers' => [
        'factories' => [
            'LosUi\View\Helper\Url'   => 'LosUi\View\Helper\UrlFactory',
        ],
        'aliases' => [
            'acplo_url' => 'LosUi\View\Helper\Url',
        ],
        'invokables' => [
            'acplo_alert'               => 'LosUi\View\Helper\Alert',
            'acplo_badge'               => 'LosUi\View\Helper\Badge',
            'acplo_button'              => 'LosUi\View\Helper\Button',
            'acplo_chosen'              => 'LosUi\View\Helper\Chosen',
            'acplo_flashmessenger'      => 'LosUi\View\Helper\FlashMessenger',
            'acplo_form'                => 'LosUi\Form\View\Helper\Form',
            'acplo_formrow'             => 'LosUi\Form\View\Helper\FormRow',
            'acplo_form_collection'     => 'LosUi\Form\View\Helper\FormCollection',
            'acplo_form_element_errors' => 'LosUi\Form\View\Helper\FormElementErrors',
            'acplo_form_renderer'       => 'LosUi\Form\View\Helper\Form',
            'acplo_headlink'            => 'LosUi\View\Helper\HeadLink',
            'acplo_headscript'          => 'LosUi\View\Helper\HeadScript',
            'acplo_icon'                => 'LosUi\View\Helper\Icon',
            'acplo_image'               => 'LosUi\View\Helper\Image',
            'acplo_label'               => 'LosUi\View\Helper\Label',
            'acplo_navigation'          => 'LosUi\View\Helper\Navigation',
            'acplo_pagination_control'  => 'LosUi\View\Helper\PaginationControl',
            'acplo_well'                => 'LosUi\View\Helper\Well',
        ],
    ],
    'asset_manager' => [
        'resolver_configs' => [
            'paths' => [
                'acploui' => __DIR__.'/../vendors/',
            ],
        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            'acploui' => __DIR__.'/../view',
        ],
    ],
];
