var sbfootscores = {};

(function($){
    sbfootscores.getTeams = function(competition_id){
        console.log(competition_id);
        $.ajax({
            url:'index.php?option=com_ajax&module=sbfootscores&method=getTeams&format=json',
            type:"POST",
            data:{com_id:competition_id},
            success: function (data) {
                console.log(data);
            }
        });
    }
})(jQuery)
