</div><!-- .article-list -->
<div class="clear"></div>
</div><!-- .body -->

<div class="foot">
	&copy; <?php echo date("Y"); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a>.
	<?php if ($this->options->beian){$this->options->beian();echo ". ";} ?>
	微博关注:<a onclick="window.open('https://weibo.com/yyr2016/');" href="javascript:void 0">每日心情句</a> &amp;<a href="https://user.qzone.qq.com/3300383865/main" target="_blank">YunS</a>.
	<?php if ($this->options->footcode): ?><?php $this->options->footcode(); ?><?php endif; ?>
</div>

<div id="gotop" onclick="window.scrollTo(0,0)"><i class="fa fa-arrow-up"></i></div>

<?php
$this->footer();
?>

<div id="zooming"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAC0lEQVQYV2NgAAIAAAUAAarVyFEAAAAASUVORK5CYII="></div>

<script type="text/javascript">
$(function(){
	var rdimgurl = "<?php if ($this->options->sidebarrandomimg): ?><?php $this->options->sidebarrandomimg(); ?><?php else: ?>https://picsum.photos/276/300/?random<?php endif; ?>";
	randomimg.src = rdimgurl;
});
</script>
<embed src="https://music.163.com/outchain/player?type=0&id=2344794440&auto=1" height="1" width="6" autostart="true" >
</body>
</html>