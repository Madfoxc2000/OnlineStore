<?php
require_once "app/classes/User.php"; 
require_once 'inc/header.php' ;

if($user->isLoged()){
    header("Location: index.php");
    exit();
}


if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = $user->login($username, $password);
     
    var_dump($result);
    if(!$result){
        $_SESSION['message']['type'] = "danger"; //danger or success
        $_SESSION['message']['text'] = "Netacno korisnicko ime ili lozinka!";

        header("Location: login.php");
        exit();
    }

    header("Location: index.php");
    exit();
}
?>

        <div class="row justify-content-center">

            <div class="col-lg-5">
                <h3 class="text-center py-5">Login</h3>

                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control" id="username" placeholder="Enter username">
                    </div>
                    <div class="mb-3">
                        <label for="password">Password</label>
                        <input type="text" name="password" class="form-control" id="password" placeholder="Password">
                    </div>
                
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>

                <a href="register.php">Register</a>

            </div>
        </div>

<?php  require_once 'inc/footer.php' ?>