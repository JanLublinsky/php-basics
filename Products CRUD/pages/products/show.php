<!-- container -->
<div class="container">

    <div class="page-header">
        <h1>Read Product</h1>
        <?php
        // get passed parameter value, in this case, the record ID
        // isset() is a PHP function used to verify if a value is there or not
        //$id = $_GET['id'] ?? die('ERROR: Record ID not found.');
        $id = $_GET['id'] ?? 0;

        $query="select * from products where id=".$id;
        $product = $database->query($query)->fetch_assoc();
        if ($product == null) {
            header("Location: index.php?section=products&action=index");
            exit();
        }
        ?>

        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Amount</th>
                <th scope="col">Created at</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row"><?php echo htmlspecialchars($product["id"], ENT_QUOTES); ?></th>
                <td><?php echo htmlspecialchars($product["name"], ENT_QUOTES); ?></td>
                <td><?php echo htmlspecialchars($product["price"], ENT_QUOTES); ?></td>
                <td><?php echo htmlspecialchars($product["amount"], ENT_QUOTES); ?></td>
                <td><?php echo htmlspecialchars($product["created at"], ENT_QUOTES); ?></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <a href='index.php?section=products&action=index' class='btn btn-danger'>Back to read products</a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>