<?php
include_once('resources/init.php');

$posts = (isset($_GET['id']))? get_posts($_GET['id']) : get_posts();

?> 
<!DOCTYPE html>
<html>
    <head>
        <title>Min blog</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <style> 

        </style>
    </head>
    <body>
            
        <nav> 
            <ul>
                <li><a href="index.php"> Index </a>-</li>
                <li><a href="add_post.php"> Add a Post </a>-</li>
                <li><a href="add_category.php"> Add a category </a>-</li>
                <li><a href="category_list.php"> Category list</a>-</li>
            </ul>
        </nav>
    </div>
        
        <h1> Ackeylo's awesome blog </h1>

              
                
        <?php 
        foreach ( $posts as $post ){
            
            ?>
            <h2><a href="index.php?id=<?php echo $post['post_id']?>"><?php echo $post['title'];?></a></h2>
            <p> Posted on <?php echo date('d-m-Y h:i:s', strtotime($post['date_posted'])); ?>
                in <a href="category.php?id=<?php echo $post['category_id']; ?>"><?php echo $post['name'];?></a>
            </p>
            <div id="text">
                <p>
                <?php echo nl2br($post['contents']); ?>
            </p>
            </div>
            
            <menu>
                <ul>
                    <li><a href="delete_post.php?id=<?php echo $post['post_id']; ?>">Delete this post</a></li>
                    <li><a href ="edit_post.php?id=<?php echo $post['post_id'];?>">Edit this post</a>
                </ul>
                
            </menu>
            <?php
            
        }
        ?>
                       <div id="footer">
    </div>
    
    </body>
</html>