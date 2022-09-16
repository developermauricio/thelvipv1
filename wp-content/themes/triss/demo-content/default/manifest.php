<?php if (!defined('FW')) die('Forbidden');
/**
 * @var string $uri Demo directory url
 */

$manifest = array();
$manifest['title'] = esc_html__('Default Demo', 'triss');
$manifest['screenshot'] = $uri . '/screenshot.png';
$manifest['preview_link'] = 'http://triss.wpengine.com/';