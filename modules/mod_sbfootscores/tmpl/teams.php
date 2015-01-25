
<ul id="carousel" class="elastislide-list">
	<?php foreach ($data['teams'] as $team) {?>
	<li><a href="#"><img src="<?php echo $team['crestUrl'];?>" alt="<?php echo $team['name'];?>"/></a></li>
	<?php }?>
</ul>

<script type="text/javascript">

$( '#carousel' ).elastislide();

</script>