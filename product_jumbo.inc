<?php
// Plugin definition
$plugin = array(
  'title' => t('Product Jumbo'),
  'icon' => 'product-jumbo.png',
  'category' => t('CSi'),
  'css' => 'product-jumbo.css',
  'theme' => 'product_jumbo',
  'regions' => array(
  	'navbar' => t('Top Nav'),
  	'pjumbo' => t('Product Jumbotron'),
    'contentmain' => t('Content'),
  ),
);
