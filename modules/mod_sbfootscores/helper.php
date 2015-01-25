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

    public static function loadDocuments($layout){
        $document = JFactory::getDocument();
        static $docLoaded;
        static $teamsLoaded;

        if ($docLoaded && $teamsLoaded) {
            return;
        }
        $document->addScript('http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js');
        if($layout == "teams" && !$teamsLoaded){
            $document->addScript(JUri::base().'modules/mod_sbfootscores/js/modernizr.custom.17475.js');
            $document->addScript(JUri::base().'modules/mod_sbfootscores/js/jquerypp.custom.js');
            $document->addScript(JUri::base().'modules/mod_sbfootscores/js/jquery.elastislide.js');
            $document->addStylesheet(JUri::base().'modules/mod_sbfootscores/css/demo.css');
            $document->addStylesheet(JUri::base().'modules/mod_sbfootscores/css/elastislide.css');
            $document->addStylesheet(JUri::base().'modules/mod_sbfootscores/css/custom.css');
            $teamsLoaded = true;
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

    public static function getUrl($params){        
        $com_id = $params->get('mod_sbfootscores_league',354);
        $layout = $params->get('mod_sbfootscores_layout','ranking');
        switch ($layout) {
            case 'ranking':
                $url = "http://www.football-data.org/alpha/soccerseasons/$com_id/leagueTable";
                break;            
            case 'teams':
                $url = "http://www.football-data.org/alpha/soccerseasons/$com_id/teams";                
                break;
            default:
                $url = "http://www.football-data.org/alpha/soccerseasons/$com_id/leagueTable";
                break;
        };

        return $url;

    }
}