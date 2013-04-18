<?php include_once('resources/init.php'); ?>
<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset='utf-8'>
        <meta http-equi v='X-UA-Compatible' content="IE=edge,chrome=1">
        
        <title> Category List </title>
        
    </head> 
    
<body>
        <?php
        foreach ( get_categories() as $category) {
         ?>
    <p><a href="category.php"?id=<?php echo $category['id']
        }
        
        ?>
        
        
</body>
</html>
