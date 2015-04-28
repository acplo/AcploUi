<?php
return [
    'view_helpers' => [
        'factories' => [
            'AcploUi\View\Helper\Url'   => 'AcploUi\View\Helper\UrlFactory',
        ],
        'aliases' => [
            'acplo_url' => 'AcploUi\View\Helper\Url',
        ],
        'invokables' => [
            'acplo_alert'               => 'AcploUi\View\Helper\Alert',
            'acplo_badge'               => 'AcploUi\View\Helper\Badge',
            'acplo_button'              => 'AcploUi\View\Helper\Button',
            'acplo_chosen'              => 'AcploUi\View\Helper\Chosen',
            'acplo_flashmessenger'      => 'AcploUi\View\Helper\FlashMessenger',
            'acplo_form'                => 'AcploUi\Form\View\Helper\Form',
            'acplo_formrow'             => 'AcploUi\Form\View\Helper\FormRow',
            'acplo_form_collection'     => 'AcploUi\Form\View\Helper\FormCollection',
            'acplo_form_element_errors' => 'AcploUi\Form\View\Helper\FormElementErrors',
            'acplo_form_renderer'       => 'AcploUi\Form\View\Helper\Form',
            'acplo_headlink'            => 'AcploUi\View\Helper\HeadLink',
            'acplo_headscript'          => 'AcploUi\View\Helper\HeadScript',
            'acplo_icon'                => 'AcploUi\View\Helper\Icon',
            'acplo_image'               => 'AcploUi\View\Helper\Image',
            'acplo_label'               => 'AcploUi\View\Helper\Label',
            'acplo_navigation'          => 'AcploUi\View\Helper\Navigation',
            'acplo_pagination_control'  => 'AcploUi\View\Helper\PaginationControl',
            'acplo_well'                => 'AcploUi\View\Helper\Well',
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
