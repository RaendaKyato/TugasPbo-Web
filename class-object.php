<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Post{
        public $id;
        public $title;
        public $user_id;
        public $description;
    }
    $Post1 = new Post();
    $Post2 = new Post();

    $postid_1 = $Post1->id=1;
    $posttitle_1 = $Post1->title="Aku dan Tighnari Terbang";
    $postuser_1 = $Post1->user_id=5557;
    $postdesc_1 = $Post1->description="Tour";

    $postid_2 = $Post2->id=2;
    $posttitle_2 = $Post2->title="Osaka";
    $postuser_2 = $Post2->user_id=2942;
    $postdesc_2 = $Post2->description="Traveling";

    ?>
<h1>FaceeeboooKe</h1>
<hr>
<h2>Post 1</h2>
<p>Post ID :<?php echo $postid_1?></p>
<p>Title :<?php echo $posttitle_1?></p>
<p>ID User:<?php echo $postuser_1?></p>
<p>Description :<?php echo $postdesc_1?></p>
<hr>
<h2>Post 2</h2>
<p>Post ID :<?php echo $postid_2?></p>
<p>Title :<?php echo $posttitle_2?></p>
<p>ID User:<?php echo $postuser_2?></p>
<p>Description :<?php echo $postdesc_2?></p>

</body>
</html>