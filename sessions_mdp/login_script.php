    <?php
    session_start();
    // var_dump($_POST);
    // $user[0]="admin"; 
    // $user[1]="admin";
    // $user[2]="admin";
    // $user[3]=password_hash("admin",PASSWORD_DEFAULT);
    $user_mdp= password_hash("admin",PASSWORD_DEFAULT);
    
    if($_POST["login"]=="admin" && password_verify($_POST("mdp"),$user_mdp)){
        $_SESSION["auth"]="ok";
        // $_SESSION["nom"]=$_POST["login"];
    }
    else {
        unset($_SESSION["auth"]);
    };

    // var_dump($_SESSION);

    if(isset($_SESSION["auth"]) && $_SESSION["auth"]=="ok"){
        header("Location:connect.php");
    }
    else{
        header("Location:login_form.php");
    }
    ?>