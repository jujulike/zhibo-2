<?php 
if (!empty($useronline)) {
foreach($useronline as $k => $v) {?>
		<?php if (!empty($userstatus[$v['userid']]['vtime'])
					&& ($userstatus[$v['userid']]['vtime'] > time())
					&& ($userstatus[$v['userid']]['status'] == '1')
				) { continue; } ?>
<div class="article" id="u_<?php echo $v['userid'] ?>">
	<h6>
	<?php if ($v['role'] == '1') { ?>
	<span class="green"><?php echo $v['name']?></span>
	<?php } else if ($v['role'] == '0') { ?>
	<span class="orange"><?php echo $v['name']?></span>
	<?php } else { ?>
	<span><?php echo $v['name']?></span>
	<?php } ?>	
	<?php if ((!empty($userinfo['ismaster'])) && ($v['role'] != '1') && ($roomid==$userinfo['ismaster'])) { ?>

		<?php if (!empty($userstatus[$v['userid']]['vtime'])
					&& ($userstatus[$v['userid']]['vtime'] > time())
					&& ($userstatus[$v['userid']]['status'] == '0')
				) { ?>
			<a href="javascript:void(0)">禁</a>	
		<?php } else { ?>
			<a href="javascript:void(0)" class="red" onclick="setStop('<?php echo $v['userid']?>')" >禁</a>	
		<?php } ?>
			<a href="javascript:void(0)" class="red" onclick="setOut('<?php echo $v['userid']?>')" >踢</a>	
	<?php } ?>
	</h6>
</div>
<?php } ?>
<?php } ?>

<?php if (!empty($moniuser)) { 
		foreach ($moniuser as $k => $v) { ?>
		<div class="article">
			<h6><span>游客<?php echo $v ?></span></h6>
		</div>
<?php }
} ?>