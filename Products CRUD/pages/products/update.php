<!-- container -->
<div class="container">

    <div class="page-header">
        <h1>Update Product</h1>
    </div>
    <?php
    $id = $_GET['id'] ?? 0;
    $conn = $database;
    // read current record's data
    $query = 'select * from products where id=' . $id;
    // store retrieved product to a variable
    $product = $conn->query($query)->fetch_assoc();

    if ($product == null) {
        header("Location: index.php?section=products&action=index");
        exit();
    }
    // values to fill up form
    $name = $product['name'];
    $price = $product['price'];
    $amount = $product['amount'];

    ?>
    <?php
    if ($_POST) {
        $query = "UPDATE products SET name = ?, price = ?, amount = ? WHERE id=" . $id;
        $stmt = $conn->prepare($query);

        if (isset($_POST['name'])) {
            $name = htmlspecialchars(strip_tags($_POST['name']));
        }

        if (isset($_POST['price'])) {
            $price = htmlspecialchars(strip_tags($_POST['price']));
        }

        if (isset($_POST['amount'])) {
            $amount = htmlspecialchars(strip_tags($_POST['amount']));
        }

        $stmt->bind_param("sss", $name, $price, $amount);

        // Execute the query
        if ($stmt->execute()) {
            echo "<div class='alert alert-success'>Record was updated.</div>";
        } else {
            echo "<div class='alert alert-danger'>Unable to update the record. Please try again.</div>";
        }
        $stmt->close();
        $conn->close();
    }
    ?>
    <form action="index.php?section=products&action=update&id=<?php echo $id ?>" method="POST">

        <table class='table table-hover table-responsive table-bordered'>
            <tr>
                <td><label for="name">Name:</label></td>
                <td><input type='text' id='name' name='name'
                           value="<?php echo htmlspecialchars($name, ENT_QUOTES); ?>" class='form-control'/></td>
            </tr>
            <tr>
                <td><label for="price">Price:</label></td>
                <td><input type='text' id='price' name='price'
                           value="<?php echo htmlspecialchars($price, ENT_QUOTES); ?>" class='form-control'/></td>
            </tr>
            <tr>
                <td><label for="amount">Amount:</label></td>
                <td><input type='text' id='amount' name='amount'
                           value="<?php echo htmlspecialchars($amount, ENT_QUOTES); ?>" class='form-control'/></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type='submit' name='submit' value='Update' class='btn btn-primary'/>
                    <input type='reset' name='reset' value='Reset' class='btn btn-primary'/>
                    <a href='index.php?section=products&action=index' class='btn btn-danger'>Back to read products</a>
                </td>
            </tr>
        </table>
    </form>


</div> <!-- end .container -->
