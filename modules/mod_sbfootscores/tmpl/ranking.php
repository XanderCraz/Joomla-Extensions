<?php echo "<pre>";
//print_r($data);die;?>

<div id="ranking_list">
    <table class="table table-condensed">
        <caption>Table:- <?php echo $data['leagueCaption']?>, MatchDay:- <?php echo $data['matchday']?></caption>
        <thead>
        <tr>
            <th>S.N</th>
            <th>Team</th>
            <th>Pld</th>
            <th>GF</th>
            <th>GA</th>
            <th>GD</th>
            <th>Pts</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($data['standing'] as $rank){?>
    <tr>
        <th><?php echo $rank['position']?></th>
        <th><?php echo $rank['teamName']?></th>
        <th><?php echo $rank['playedGames']?></th>
        <th><?php echo $rank['goals']?></th>
        <th><?php echo $rank['goalsAgainst']?></th>
        <th><?php echo $rank['goalDifference']?></th>
        <th><?php echo $rank['points']?></th>

    </tr>
<?php }?>
</tbody>
</table>
</div>

