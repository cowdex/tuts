<?php
   if(isset($_POST['submit'])){
    // email check
    if(empty($_POST['email'])){
    echo ("An email is required. <br />");
    }
    else{
        $email = $_POST['email'];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo ("Please enter a valid email address.");
        }
        else{
        echo htmlspecialchars($_POST['email']);
        }
    }
    }
   // title check
    $title = $_POST['title'];
    if(empty($title)){
    echo ("A title is required. <br />");
    }
    else{
    if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
        echo 'Title must be a valid title string';
    }
    }
   // ingredients check
    $ingredients = $_POST['ingredients'];
    if(empty($ingredients)){
    echo ("Ingridients are required. <br />");
    }
    else{
    if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)){
        echo("Ingridients must be a comma separated list <br />");
    }
   } // this is the end of the POST check
   
   
?>

<!DOCTYPE html>
<html>

    <section class="container grey-text">
        <h4 class="center grey-text">Add a Pizza</h4>
        <form action="add.php" method="POST">
            <label>Your Email:</label>
            <input type="text" name="email">
            <label>Pizza Title:</label>
            <input type="text" name="title">
            <label>Ingredients (comma seperated):</label>
            <input type="text" name="ingredients">
            <div class="center">
                <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
            </div>
        </form>
    </section>
</html>