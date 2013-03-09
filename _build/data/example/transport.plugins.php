<?php
/**
 * plugins transport file for Example extra
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
/* @var xPDOObject[] $plugins */


$plugins = array();

$plugins[1] = $modx->newObject('modPlugin');
$plugins[1]->fromArray(array(
    'id' => '1',
    'name' => 'Plugin1',
), '', true, true);
$plugins[1]->setContent(file_get_contents($sources['source_core'] . '/elements/plugins/plugin1.plugin.php'));

$plugins[2] = $modx->newObject('modPlugin');
$plugins[2]->fromArray(array(
    'id' => '2',
    'description' => 'Description for Plugin one',
    'name' => 'Plugin2',
), '', true, true);
$plugins[2]->setContent(file_get_contents($sources['source_core'] . '/elements/plugins/plugin2.plugin.php'));

return $plugins;
