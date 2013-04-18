<?php
include_once('resources/init.php');

if ( isset($post['name']) ){
    $name = trim($_POST['name']);
    
    if ( empty($name) ){
        $error = 'You must submit a category name.';
    } else if ( category_exists($name) ){
    } else if ( strlen($name) > 24 ){
        $error = 'Category names can only be up to 24 characters';
    }
    
    if( ! isset($error) ) {
        add_category($name);
        
    }
}

?>

<!DOCTYPE html>

<html lang="en"></html>
<head>
    <meta charset='utf-8'>
    <meta http-equi v='X-UA-Compatible' content="IE=edge,chrome=1">
    
    
    <title> My Title </title>
</head>

<body>
    <h1> Add a Category </h1>
    
    <?php  
    if ( isset($error) ){
        echo "<p> {$error} </p>\n";
    }
    ?>
    
    <form action="" method="post">
        <div>
            <label for="name"> Name </label>
            <input type="text" name="name" value="">
        </div>
        <div> 
            <input type="submit" value="Add Category">
        </div>
    </form>
</body>
</html>

    
    ?>