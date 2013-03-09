<?php
/**
 * templates transport file for Example extra
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
/* @var xPDOObject[] $templates */


$templates = array();

$templates[1] = $modx->newObject('modTemplate');
$templates[1]->fromArray(array(
    'id' => '1',
    'templatename' => 'Template1',
), '', true, true);
$templates[1]->setContent(file_get_contents($sources['source_core'] . '/elements/templates/template1.template.html'));

$templates[2] = $modx->newObject('modTemplate');
$templates[2]->fromArray(array(
    'id' => '2',
    'description' => 'Description for Template two',
    'templatename' => 'Template2',
), '', true, true);
$templates[2]->setContent(file_get_contents($sources['source_core'] . '/elements/templates/template2.template.html'));

return $templates;
