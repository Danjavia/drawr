<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Write Post</h1>
    <form action="<?php echo Url::action( 'PostsController::create' ); ?>" method="POST">
        <fieldset>
            <label for="title">Title</label>
            <input type="text" id="title" name="post[title]" value=""/>    
            <label for="content">Content</label>
            <textarea id="content" name="post[content]" rows="20" cols="50"></textarea>
            <input type="submit" value="Create Post"/>
        </fieldset>
    </form>
</body>
</html>