<!-- container -->
<div class="container">

    <div class="page-header">
        <h1>Create Product</h1>
    </div>

    <?php
    if ($_POST) {
        if (isset($_POST['name'])) {
            $name = htmlspecialchars(strip_tags($_POST['name']));
        }

        if (isset($_POST['price'])) {
            $price = htmlspecialchars(strip_tags($_POST['price']));
        }

        if (isset($_POST['amount'])) {
            $amount = htmlspecialchars(strip_tags($_POST['amount']));
        }
        //Database connection
        $conn = $database;
        $query = "INSERT INTO products(name, price, amount) VALUES(?, ?, ?)";
        if ($name != '' && $price != '' && $amount != '') {
            $stmt = $conn->prepare($query);
            $stmt->bind_param("sss", $name, $price, $amount);
            // Execute the query
            if ($stmt->execute()) {
                echo "<div class='alert alert-success'>Record was saved.</div>";
            } else {
                echo "<div class='alert alert-danger'>Unable to save record.</div>";
            }
            $stmt->close();
            $conn->close();
        }
    }
    ?>

    <form action="index.php?section=products&action=create" method="POST">

        <table class='table table-hover table-responsive table-bordered'>
            <tr>
                <td><label for="name">Name:</label></td>
                <td><input type='text' id="name" name='name' class='form-control'/></td>
            </tr>
            <tr>
                <td><label for="price">Price:</label></td>
                <td><input type='text' id='price' name='price' class='form-control'/></td>
            </tr>
            <tr>
                <td><label for="amount">Amount:</label></td>
                <td><input type='text' id='amount' name='amount' class='form-control'/></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type='submit' name='submit' value='Add' class='btn btn-primary'/>
                    <input type='reset' name='reset' value='Reset' class='btn btn-primary'/>
                    <a href='index.php?section=products&action=index' class='btn btn-danger'>Back to read products</a>
                </td>
            </tr>
        </table>
    </form>

</div> <!-- end .container -->



