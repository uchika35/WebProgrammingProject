<html>
    <body>
        <?php
        $c = mysqli_connect("mysql.itu.edu.tr", "db82920","ecJgnvJ7yk", "db82920");
        extract($_POST);
        function validate($input)
        {
            $input = trim($input);
            $input = stripslashes($input);
            $input = htmlspecialchars($input); 
            return $input;
        }
        $username = validate($_POST['username']);
        $pass = validate($_POST['pass']);

        $verified=mysqli_query($c ,"SELECT * FROM user_inf WHERE pwd='$pass' AND username='$username'");
       
            
        if(mysqli_num_rows($verified)==1)
        {
            setcookie("username", $username);
            header('Location: mainn.php');
            exit();
        }
        else{
            header('Location: index.php'); 
            exit();
           
        }
        ?>
</body>

</html>
