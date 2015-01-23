<?php
/**
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;

class ModSbFootScoresHelper{
    /**
     * initialize ta required params for module
     *
     */

    public static function init($url)
    {
        $curl = curl_init();
        curl_setopt ($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        $result = curl_exec ($curl);
        curl_close ($curl);
        return $result;
    }

    public static function loadDocuments(){
        $document = JFactory::getDocument();
        static $docLoaded;

        if ($docLoaded) {
            return;
        }
        $document->addScript(JUri::base().'modules/mod_sbfootscores/js/sbfootscores.js');
        $docLoaded = true;
    }

    public static function getTeamsAjax(){
        $input = JFactory::getApplication()->input;
        $req_data = $input->getArray($_POST);
        $com_id = $req_data['com_id'];
        $url = "http://www.football-data.org/soccerseasons/".$com_id."/ranking";
        $teams = static::init($url);
        echo $teams;die;
    }
}