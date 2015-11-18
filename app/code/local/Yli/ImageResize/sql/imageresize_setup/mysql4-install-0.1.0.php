<?php
/** @var Mage_Core_Model_Resource_Setup */
$installer = $this;

$installer->addAttribute('catalog_product', 'padding', array(
    'type'              => 'varchar',
    'backend'           => '',
    'frontend'          => '',
    'label'             => 'Padding Coefficient',
    'input'             => '',
    'class'             => '',
    'source'            => '',
    'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_WEBSITE,
    'visible'           => true,
    'required'          => false,
    'user_defined'      => true,
    'default'           => '0',
    'searchable'        => false,
    'filterable'        => false,
    'comparable'        => false,
    'visible_on_front'  => false,
    'unique'            => false,
    'is_configurable'   => false,
    'used_in_product_listing' => true,
    'is_html_allowed_on_front'=> true,
    'frontend_class'    => 'validate-number'
));

$installer->endSetup();