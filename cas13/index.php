<?php
session_start();
$error =isset($_SESSION['error']) ? $_SESSION['error'] : '';
unset ($_SESSION['error']);
?>

<html>
    <head>
        <title>Fakulteti</title>
    </head>
    <body>
        <h1>Add Faculty</h1>
        <form method="POST" action="add_faculty.php">
            <div>
                <label for="name"> Name</label>
                <input  type="text" name="name"  id="name" />
                <p><?php echo $error; ?></p>
            </div>
            <div>
                <button type="submit" name="submit">Add</button>
            </div>
        </form>
    </body>
</html>



