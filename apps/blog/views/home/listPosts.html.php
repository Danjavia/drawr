<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Posts</h1>
	<ul>
		<?php foreach ( $posts as $post ) : ?>
			<li>
				<h2><a href="<?php echo Url::action( 'PostsController::show', $post->id ); ?>"><?php echo $post->title; ?></a></h2>
				<span>Posted on <?php echo strftime( "%B %d, %Y", $post->created ); ?></span>
				<p>
					<?php echo $post->content; ?>
				</p>
			</li>
		<?php endforeach; ?>
	</ul>
</body>
</html>