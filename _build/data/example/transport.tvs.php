<?php
/**
 * templateVars transport file for Example extra
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
/* @var xPDOObject[] $templateVars */


$templateVars = array();

$templateVars[1] = $modx->newObject('modTemplateVar');
$templateVars[1]->fromArray(array(
    'id' => '1',
    'description' => 'Description for TV one',
    'caption' => 'TV One',
    'name' => 'Tv1',
), '', true, true);
$templateVars[2] = $modx->newObject('modTemplateVar');
$templateVars[2]->fromArray(array(
    'id' => '2',
    'description' => 'Description for TV two',
    'caption' => 'TV Two',
    'default_text' => '@INHERIT',
    'name' => 'Tv2',
), '', true, true);
return $templateVars;
