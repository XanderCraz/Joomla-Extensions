<?php
/**
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die('access denied');

// Include the syndicate functions only once
require_once __DIR__ . '/helper.php';
$layout = $params->get('mod_sbfootscores_layout','ranking');
$com_id = $params->get('mod_sbfootscores_league',354);
ModSbFootScoresHelper::loadDocuments($layout);
$url = ModSbFootScoresHelper::getUrl($params);
$result = ModSbFootScoresHelper::init($url);
$data = json_decode($result,true);

//getting all params
$table_type = $params->get('mod_sbfootscores_table');
require JModuleHelper::getLayoutPath('mod_sbfootscores', $params->get('layout', $layout));

//TODO::FIX ALL IMAGES ISSUES