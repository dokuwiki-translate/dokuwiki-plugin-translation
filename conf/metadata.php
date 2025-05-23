<?php

/**
 * Options for the translation plugin
 *
 * @author Andreas Gohr <andi@splitbrain.org>
 */

$meta['translations']  = array('string','_pattern' => '/^(|[a-zA-Z\- ,]+)$/');
//$meta['translationns'] = array('string','_pattern' => '/^(|[\w:\-]+)$/'); # currently broken
$meta['skiptrans']     = array('string');
$meta['dropdown']      = array('onoff');
$meta['display']       = array('multicheckbox',
                               '_choices' => array('langcode','name','flag','title'));
$meta['translateui']   = array('onoff');
$meta['redirectstart'] = array('onoff');
$meta['checkage']      = array('onoff');
$meta['about']         = array('string','_pattern' => '/^(|[\w:\-]+)$/');
$meta['localabout']    = array('onoff');
$meta['copytrans']     = array('onoff');
$meta['show_path']     = array('onoff');
