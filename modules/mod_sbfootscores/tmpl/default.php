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

