<?php
/**
 * events transport file for Example extra
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
/* @var xPDOObject[] $events */


$events = array();

$events[1] = $modx->newObject('modEvent');
$events[1]->fromArray(array(
    'name' => 'OnMyEvent1',
    'groupname' => 'Example',
    'service' => '1',
), '', true, true);
$events[2] = $modx->newObject('modEvent');
$events[2]->fromArray(array(
    'name' => 'OnMyEvent2',
    'groupname' => 'Example',
    'service' => '1',
), '', true, true);
return $events;
