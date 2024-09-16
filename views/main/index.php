<?php foreach ($posts as $post): ?>
	<div class="note">
		<p>
			<span class="date"><? echo date('d.m.Y H:i:s', $post['date']); ?></span>
			<span class="name"><? echo $post['author']; ?></span>
		</p>
		<p><? echo $post['text']; ?></p>
	</div>	
<? endforeach; ?>