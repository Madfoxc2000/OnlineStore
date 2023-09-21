<?php   
require '../app/config/config.php';
require '../app/classes/User.php';
require '../app/classes/Product.php';

$user = new User();

if($user->isLoged() && $user->isAdmin()):
$products = new Product();
$products = $products->fetch_all();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

    <div class="container">
        <a href="add_product.php" class="btn btn-success">Add Product</a>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Product ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Size</th>
                        <th scope="col">Image</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($products as $product): ?>
                        <tr>
                            <th scope="row"><?php echo htmlspecialchars($product['product_id']);?></th>
                            <td><?php echo htmlspecialchars($product['name']);?></td>
                            <td><?php echo htmlspecialchars($product['price']);?></td>
                            <td>$<?php echo htmlspecialchars($product['size']);?></td>
                            <td><?php echo htmlspecialchars($product['image']);?></td>
                            <!-- <td><img src="<?php // echo htmlspecialchars($item['image']);?>" height="50"></td> -->
                            <td><?php echo htmlspecialchars($product['created_at']);?></td>
                            <td>
                                <a href="edit_product.php?id=<?php echo $product['product_id'];?>" class="btn btn-primary">Edit</a>
                                <a href="delete_product.php?id=<?php echo $product['product_id'];?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
    </div>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

<?php endif; ?>