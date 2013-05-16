<?php
include_once('resources/init.php');

if ( isset($_POST['title'], $_POST['contents'], $_POST['category']) ){
    $errors = array();  
    
    $title      =trim($_POST['title']);
    $contents   =trim($_POST['contents']);
    
    if ( empty($title) ){
            $errors[] = 'You need to supply a title.';
    } else if ( strlen($title) > 255 ){
        $errors[] = 'Title cannot be longer than 255 characters.';
    }
     if ( empty($contents) ){
         $errors[] = 'You need to supply some text.';
     }   
     
     if( !category_exists('id', $_POST['category']) ){
         $errors[] = 'The category does no exist';
     }
     
     if ( empty($errors) ){
         edit_post($_GET['id'], $title, $contents, $_POST['category']);
         
         header("Location: index.php?id={$id}");
         die();
     }
}

?>
<!DOCTYPE html>

<html>
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

