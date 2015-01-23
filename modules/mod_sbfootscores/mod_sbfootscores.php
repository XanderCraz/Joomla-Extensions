<?php
/**
  * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Include the syndicate functions only once
require_once __DIR__ . '/helper.php';
ModSbFootScoresHelper::loadDocuments();
$com_id = $params->get('com_name');
$result = ModSbFootScoresHelper::init('http://www.football-data.org/alpha/soccerseasons/'.$com_id.'/leagueTable');
$data = json_decode($result,true);
require JModuleHelper::getLayoutPath('mod_sbfootscores', $params->get('layout', 'ranking'));