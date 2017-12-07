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
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => [
            'mia-layout-lte'           => __DIR__ . '/../view/layout/layout.phtml',
            'mia-layout-lte/paginator/search'           => __DIR__ . '/../view/pagination/search.phtml',
            'mia-layout-lte/paginator/item'           => __DIR__ . '/../view/pagination/item.phtml',
            'mia-layout-lte/paginator/dropdown'           => __DIR__ . '/../view/pagination/dropdown.phtml',
            'mia-layout-lte/table/simple'           => __DIR__ . '/../view/table/simple.phtml',
            'mia-layout-lte/form/simple'           => __DIR__ . '/../view/form/simple.phtml',
            'mia-layout-lte/form/with-preview'           => __DIR__ . '/../view/form/with_preview.phtml',
            'mia-layout-lte/login/basic'           => __DIR__ . '/../view/login/basic.phtml',
            'mia-layout-lte/dashboard/main'           => __DIR__ . '/../view/dashboard/main.phtml',
            'mia-layout-lte/menu/basic'           => __DIR__ . '/../view/menu/basic.phtml',
        ],
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
    'view_helpers' => [
        /*'aliases' => [
            'layoutLte' => View\Helper\LayoutLte::class,
            'lteForm' => View\Helper\LteForm::class,
        ],
        'factories' => [
            View\Helper\LayoutLte::class => View\Helper\LayoutLteFactory::class,
            View\Helper\LteForm::class => InvokableFactory::class,
        ],*/
    ],
    'mia_layout_elite' => [
        'title' => 'AdminElite',
        'title_part_one' => 'Admin',
        'title_part_two' => 'LTE',
    ]
);