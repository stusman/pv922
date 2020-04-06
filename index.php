<?php
require_once ("D:\OSPanel\domains\sp16\database.php");
$posts = getPosts($link);
/*echo "<pre>";
print_r($posts);
echo "</pre>";*/
?>
<html>
    <head>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    </head>
<body>
<hr>
<?php
foreach ($posts as $post)
    {
    ?>
<div class="container">
    <br/>
    <div class="row">
        <div class="col-md-3">
            <a href="#" class="thumbnail">
                <img src="<?=$post['image']; ?>" alt="">
            </a>
        </div>
        <div class="col-md-9">
            <h4><a href="#"><?=$post['title']; ?></a></h4>
            <p>
                <?=mb_substr($post['content'],0,250,"UTF-8"); ?>...
            </p>
            <p><a class="btn btn-info btn-sm" href="/post.php?id=<?=$post['id']?>">Read more</a></p>
            <br/>
            <ul class="list-inline">
                <li><i class="glyphicon glyphicon-user"></i> by <a href="#"><?=$post['autor']; ?></a> | </li>
                <li><i class="glyphicon glyphicon-calendar"></i> <?=$post['datetime']; ?> </li>
        </div>
    </div>
    <hr>

</div>
    <?php
}
?>
</body>
</html>
