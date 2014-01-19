<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1><?php echo $post->title; ?></h1>
    <p>Posted on <?php echo strftime("%B %d, %Y", $post->created); ?></p>
    <p><?php echo $post->content; ?></p>
</body>
</html>