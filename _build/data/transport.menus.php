<?php
/**
 * menus transport file for Example extra
 *
 * Copyright 2013 by MikeNuttall mike@onsitenow.co.uk
 * Created on 03-09-2013
 *
 * @package example
 * @subpackage build
 */

if (! function_exists('stripPhpTags')) {
    function stripPhpTags($filename) {
        $o = file_get_contents($filename);
        $o = str_replace('<' . '?' . 'php', '', $o);
        $o = str_replace('?>', '', $o);
        $o = trim($o);
        return $o;
    }
}
/* @var $modx modX */
/* @var $sources array */
/* @var xPDOObject[] $menus */

$action = $modx->newObject('modAction');
$action->fromArray( array (
  'id' => 1,
  'namespace' => 'example',
  'controller' => 'index',
  'haslayout' => true,
  'lang_topics' => 'example:default',
  'assets' => '',
), '', true, true);

$menus[1] = $modx->newObject('modMenu');
$menus[1]->fromArray( array (
  'text' => 'Example',
  'parent' => 'components',
  'description' => 'ex_menu_desc',
  'icon' => '',
  'menuindex' => 0,
  'params' => '',
  'handler' => '',
  'permissions' => '',
), '', true, true);
$menus[1]->addOne($action);

return $menus;
