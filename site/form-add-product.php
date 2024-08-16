<?php require_once '_config.php'; ?>

<?php require 'partials/top.php'; ?>

<?php require 'partials/header.php'; ?>

<main>

    <article class="login">

        <form hx-post="process-add-product.php" enctype="multipart/form-data">

            <h2>Add a New Product</h2>

            <label>Product Name</label>
            <input type="text" name="name" required>

            <label>Category</label>
            <input type="text" name="category" required>

            <label>Price</label>
            <input type="number" name="price" min="1" max="99" required>

            <label>Image File</label>
            <input type="file" name="image" accept="image/*" required>

            <input type="submit" value="Add">
        </form>

    </article>

</main>

<?php require 'partials/footer.php'; ?>

<?php require 'partials/bottom.php'; ?>