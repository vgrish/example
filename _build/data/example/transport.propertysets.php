<?php
/**
 * propertySets transport file for Example extra
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
/* @var xPDOObject[] $propertySets */


$propertySets = array();

$propertySets[1] = $modx->newObject('modPropertySet');
$propertySets[1]->fromArray(array(
    'id' => '1',
    'name' => 'PropertySet1',
    'description' => 'Description for PropertySet1',
), '', true, true);
$propertySets[2] = $modx->newObject('modPropertySet');
$propertySets[2]->fromArray(array(
    'id' => '2',
    'name' => 'PropertySet2',
    'description' => 'Description for PropertySet2',
), '', true, true);
return $propertySets;
