<?php
/**
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 * @copyright Copyright (c) 2014 Zend Technologies USA Inc. (http://www.zend.com)
 */
namespace MIALayoutElite;

use Zend\ServiceManager\Factory\InvokableFactory;

return array(
    'view_manager' => [
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'mia-layout-elite/error/404',
        'exception_template'       => 'error/index',
        'template_map' => [
            'mia-layout-elite'           => __DIR__ . '/../view/layout/layout.phtml',
            'mia-layout-elite/paginator/simple'           => __DIR__ . '/../view/pagination/simple.phtml',
            //'mia-layout-elite/paginator/item'           => __DIR__ . '/../view/pagination/item.phtml',
            //'mia-layout-elite/paginator/dropdown'           => __DIR__ . '/../view/pagination/dropdown.phtml',
            'mia-layout-elite/table/simple'           => __DIR__ . '/../view/table/simple.phtml',
            'mia-layout-elite/form/simple'           => __DIR__ . '/../view/form/simple.phtml',
            //'mia-layout-elite/form/with-preview'           => __DIR__ . '/../view/form/with_preview.phtml',
            'mia-layout-elite/login/right'           => __DIR__ . '/../view/login/right.phtml',
            //'mia-layout-elite/dashboard/main'           => __DIR__ . '/../view/dashboard/main.phtml',
            'mia-layout-elite/menu/basic'           => __DIR__ . '/../view/menu/basic.phtml',
            'mia-layout-elite/error/404'               => __DIR__ . '/../view/error/404.phtml',
            'mia-layout-elite/error/privilege'               => __DIR__ . '/../view/error/privilege.phtml',
            'mia-layout-elite/flash-messenger'               => __DIR__ . '/../view/layout/flash.phtml',
            'mia-layout-elite/profile/index'               => __DIR__ . '/../view/profile/index.phtml',
        ],
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
    'view_helpers' => [
        'aliases' => [
            'eliteForm' => View\Helper\EliteForm::class,
            'phrases' => View\Helper\Phrases::class,
        ],
        'factories' => [
            View\Helper\EliteForm::class => InvokableFactory::class,
            View\Helper\Phrases::class => InvokableFactory::class,
        ],
    ],
    'mia_layout_elite' => [
        'title' => 'AdminElite',
        'title_part_one' => 'Admin',
        'title_part_two' => 'LTE',
    ]
);