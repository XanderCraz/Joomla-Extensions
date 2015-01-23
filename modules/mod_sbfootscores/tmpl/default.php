<?php 
/**
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die('access denied');
?>
<div id="competition_list">
    <table class="table table-condensed">
        <caption>Competitions List</caption>
        <thead>
        <tr>
            <th>Competition Name</th>
            <th>Teams</th>
            <th>Season</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($data as $data){?>
        <tr>
            <td><?php echo $data['caption']?></td>
            <td><a href="#" onclick="javascript:sbfootscores.getTeams(<?php echo $data['id']?>)">Teams</a></td>
            <td><?php echo $data['year']?></td>
        </tr>
        <?php }?>
        </tbody>
    </table>
</div>

