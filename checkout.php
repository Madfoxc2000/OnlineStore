<?php 
require_once 'inc/header.php';
require_once 'app/classes/Cart.php';
require_once 'app/classes/Order.php';
if(!$user->isLoged()){
    header("Location: login.php");
    exit();
}


if($_SERVER['REQUEST_METHOD']=="POST"){

    $delivery_address = $_POST['country']. ", " .$_POST['city'] . ", " . $_POST['zip'] . ", ". $_POST['address'];

   $order = new Order();
   $order= $order->create($delivery_address);
   $_SESSION['message']['type'] = "success"; //danger or success
        $_SESSION['message']['text'] = "Uspesno naručeni proizvodi!";
        header("Location: orders.php");
        exit();
}
?>

    <form action="" method="POST">
        <div class="form-group mb-3">
            <label for="country">Drzava</label>
            <input type="text" name="country" class="form-control" id="country" required>
        </div>
        <div class="form-group mb-3">
            <label for="city">Grad</label>
            <input type="text" name="city" class="form-control" id="city" required>
        </div>
        <div class="form-group mb-3">
            <label for="zip">Postanski broj</label>
            <input type="text" name="zip" class="form-control" id="zip" required>
        </div>
        <div class="form-group mb-3">
            <label for="address">Adresa</label>
            <input type="text" name="address" class="form-control" id="address" required>
        </div>
    
        <button type="submit" class="btn btn-primary">Order</button>
    </form>

<?php require_once 'inc/footer.php'?>