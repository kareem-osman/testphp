<html>
    <?php
    session_start();
    if(isset($_SESSION['user']) && $_SESSION['user'])
    {
        header('Location: index.php');
    }
    ?>
    <head>


    </head>
    <body>
        Login Form
        <form action="checklogin.php" method="POST">
            <input type="text" name="user_name" ><br>
            <input type="submit">
        </form>
        <?php
            if(isset($_SESSION['error']) && $_SESSION['error']==1)
            {
                echo "<h1>Invalid cardentials</h1>";
            }
        ?>
        

    </body>
</html>