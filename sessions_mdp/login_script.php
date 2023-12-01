    <?php
    session_start();
    // var_dump($_POST);

    if($_POST["login"]==$user[2] && password_verify($_POST("mdp"),$user[3])){
        $_SESSION["auth"]="ok";
        $_SESSION["nom"]=$_POST["login"];
    }
    else {
        unset($_SESSION["auth"]);
    };

    // var_dump($_SESSION);

    if(isset($_SESSION["auth"]) && $_SESSION["auth"]=="ok"){
        header("Location:sessions_mdp/connect.php");
    }
    else{
        header("Location:sessions_mdp/login_form.php");
    }
    ?>