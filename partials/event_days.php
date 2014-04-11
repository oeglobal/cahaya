<div class="small-8 columns">
	<dl class="sub-nav">
		<?php if ($post->ID === 489) : ?>
			<dd class="active"><a href="/2014/schedule/">Day 1, Wednesday 23.4.</a></dd>
		<?php else : ?>
			<dd><a href="/2014/schedule/">Day 1, Wednesday 23.4.</a></dd>
		<?php endif; ?>
		<?php if ($post->ID === 661) : ?>
			<dd class="active"><a href="/2014/schedule/thursday/">Day 2, Thursday 24.4.</a></dd>
		<?php else : ?>
			<dd><a href="/2014/schedule/thursday/">Day 2, Thursday 24.4.</a>
		<?php endif; ?>
		<?php if ($post->ID === 664) : ?>
			<dd class="active"><a href="/2014/schedule/friday/">Day 3, Friday 25.4</a></dd>
		<?php else : ?>
			<dd><a href="/2014/schedule/friday/">Day 3, Friday 25.4</a>
		<?php endif; ?>
	</dl>
	<dl class="sub-nav">
		<dd><a href="/2014/pre-conference-workshops/">Workshops, Tuesday 22.4.</a></dd>
		<?php if ($post->ID === 880) : ?>
			<dd><a href="/2014/webcamp-ljubljana/">WebCamp, Saturday 26.4.</a></dd>
		<?php else: ?>
			<dd class="active"><a href="/2014/webcamp-ljubljana/">WebCamp, Saturday 26.4.</a></dd>
		<?php endif; ?>
	</dl>
</div>