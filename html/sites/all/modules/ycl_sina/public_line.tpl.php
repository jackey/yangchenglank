<script type="text/javascript">
	function resize(img, max_width, max_height) {
		
	}
</script>

<?php
	$time_line = ycl_sina_get_user_timeline();
	$post = $time_line['statuses'][0];
?>
<div class="weibo_content">
	<div class="weibo_test">
		<span><?php print $post['text']?></span>
	</div>
	<div class="weibo_image">
		<?php if (isset($post['thumbnail_pic'])): ?>
			<img src="<?php print $post['thumbnail_pic']?>" onload="resize(this, 60,60)"/>
		<?php else : ?>
			<img src="#" />
		<?php endif;?>
	</div>
</div>