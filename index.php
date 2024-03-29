<?php

$this->need('head.php');
if ($this->have()){
while($this->next()): ?>
<div class="post">
	<img class="post-head" src="<?php if ($this->options->face): ?><?php $this->options->face();else:echo "https://cn.gravatar.com/avatar/".md5($this->author->mail)."?s=64&d=&r=X";endif; ?>" />
	<div class="post-article">
		<div class="post-info-i">
			<h2><a title="<?php $this->title() ?>" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
			<small><i class="fa fa-clock-o"></i><?php $this->date('Y年m月d日'); ?>
			<?php if (!empty($this->options->sidebarBlock) && in_array('df_views', $this->options->sidebarBlock)): ?><i class="fa fa-eye"></i><?php _e(getViewsStr($this));endif ?>
			<?php if($this->user->hasLogin()): ?> <a href="<?php $this->options->adminUrl("write-post.php?cid=".$this->cid); ?>"><i class="fa fa-pencil-square-o"></i>编辑</a><?php endif; ?></small>
		</div>
		<div class="post-content">
		<?php $this->excerpt(200,"...");if (!empty($this->options->sidebarBlock) && in_array('show_Thumb', $this->options->sidebarBlock)) showThumb($this); ?>
		<p class="more"><a href="<?php $this->permalink(); ?>" title="<?php $this->title(); ?>">继续阅读</a></p>
		</div>
	</div>
	<div class="clear"></div>
	<div class="post-meta">
			<span><i class="fa fa-user"></i><a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a></span>
			<span><i class="fa fa-inbox"></i><?php $this->category(','); ?></span>
	    	<span><i class="fa fa-comment"></i><?php $this->commentsNum('%d 条'); ?></span>
	    	<div class="clear"></div>
	</div>
</div>
<?php endwhile;
}else{
?>
<div class="post">
	<img class="post-head" src="<?php if ($this->options->face): ?><?php $this->options->face();else:echo "https://cn.gravatar.com/avatar/".md5($this->author->mail)."?s=64&d=&r=X";endif; ?>" />
	<div class="post-article">
		<div class="post-info-i">
			<h2><a href="#">抱歉啥也没找到</a></h2>
		</div>
		<div class="post-content">
			<p>什么都没有找到啊。。抱歉啦！</p>
			长知识:404页面是客户端在浏览网页时，服务器无法正常提供信息，或是服务器无法回应，且不知道原因所返回的页面。据说在第三次科技革命之前，互联网的形态就是一个大型的中央数据库，这个数据库就设置在404房间里面。那时候所有的请求都是由人工手动完成的，如果在数据库中没有找到请求者所需要的文件，或者由于请求者写错了文件编号，用户就会得到一个返回信息：room 404 : file not found。404错误信息通常是在目标页面被更改或移除，或客户端输入页面地址错误后显示的页面，人们也就习惯了用404作为服务器未找到文件的错误代码了。当然实际考证传说中的room 404是不存在的，在http请求3位的返回码中，4开头的代表客户错误，5开头代表服务器端错误。
		</div>
	</div>
	<div class="clear"></div>
	<div class="post-meta">
			<span><i class="fa fa-user"></i> <a href="http://www.449.gs">OLD</a></span>
			<span><i class="fa fa-inbox"></i> Say it.</span>
	    	<span><i class="fa fa-comment"></i> Count</span>
	    	<div class="clear"></div>
	</div>
</div>
<?php
}
$this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>

<?php
$this->need('foot.php');