<?php
/**
 * contexts transport file for Example extra
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
/* @var xPDOObject[] $contexts */


$contexts = array();

$contexts[1] = $modx->newObject('modContext');
$contexts[1]->fromArray(array(
    'key' => 'example',
    'description' => 'example context',
    'rank' => '2',
), '', true, true);
return $contexts;
