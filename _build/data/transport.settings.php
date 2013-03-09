<?php
/**
 * systemSettings transport file for Example extra
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
/* @var xPDOObject[] $systemSettings */


$systemSettings = array();

$systemSettings[1] = $modx->newObject('modSystemSetting');
$systemSettings[1]->fromArray(array(
    'key' => 'example_system_setting1',
    'name' => 'Example Setting One',
    'description' => 'Description for setting one',
    'namespace' => 'example',
    'xtype' => 'textField',
    'value' => 'value1',
    'area' => 'area1',
), '', true, true);
$systemSettings[2] = $modx->newObject('modSystemSetting');
$systemSettings[2]->fromArray(array(
    'key' => 'example_system_setting2',
    'name' => 'Example Setting Two',
    'description' => 'Description for setting two',
    'namespace' => 'example',
    'xtype' => 'combo-boolean',
    'value' => true,
    'area' => 'area2',
), '', true, true);
return $systemSettings;
