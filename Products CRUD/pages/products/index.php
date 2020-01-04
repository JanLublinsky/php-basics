<!-- container -->
<div class="container">

    <div class="page-header">
        <h1>Read Products</h1>
    </div>

    <?php

    $action = $_GET['action'] ?? "";

    // if it was redirected from delete.php
    if ($action == 'deleted') {
        echo "<div class='alert alert-success'>Record was deleted.</div>";
    }

    $products = [];
    foreach ($database->query('select * from products')->fetch_all() as $productInfo) {
        $products[(int)$productInfo[0]] = new Product(
            $productInfo[1],
            $productInfo[2],
            $productInfo[3],
            $productInfo[4],
            (int)$productInfo[0]
        );
    }
    //check if more than 0 record found
    if (count($products) <= 0) {
        echo "<div class='alert alert-danger'>No records found.</div>";
        exit();
    }
    ?>

    <!-- link to create record form -->
    <a href='index.php?section=products&action=create' class='btn btn-primary m-b-1em'>Create New Product</a>

    <!--start table -->
    <table class='table table-hover table-responsive table-bordered'>

        <!-- creating our table heading -->
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Amount</th>
            <th scope="col">Created at</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($products as $product): ?>
            <tr>
                <th scope="row"><?php echo $product->id(); ?></th>
                <td><?php echo $product->name(); ?></td>
                <td><?php echo $product->formattedPrice(); ?></td>
                <td><?php echo $product->amount(); ?></td>
                <td><?php echo $product->createdAt(); ?></td>
                <td>
                    <!--read one record -->
                    <a href='index.php?section=products&action=show&id=<?php echo $product->id(); ?>'
                       class='btn btn-info m-r-1em'>Read</a>
                    <!-- update one record -->
                    <a href='index.php?section=products&action=update&id=<?php echo $product->id(); ?>'
                       class='btn btn-primary m-r-1em'>Update</a>
                    <!-- delete one record -->
                    <a href='#' onclick='delete_user(<?php echo $product->id(); ?>);' class='btn btn-danger'>Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div> <!-- end .container -->

<script type='text/javascript'>
    // confirm record deletion
    function delete_user(id) {

        var answer = confirm('Are you sure?');
        if (answer) {
            // if user clicked ok,
            // pass the id to delete.php and execute the delete query
            window.location = 'index.php?section=products&action=delete&id=' + id;
        }
    }
</script>