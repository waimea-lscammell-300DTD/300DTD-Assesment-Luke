<?php require_once '_config.php'; ?>

<?php require 'partials/top.php'; ?>

<?php require 'partials/header.php'; ?>

<main>

    <article class="login">

        <form hx-post="process-add-product.php">

            <h2>Add a New Product</h2>

            <label>Product Name</label>
            <input type="text" name="name" required>

            <label>Price</label>
            <input type="text" name="price" required>

            <label>Image File</label>
            <input type="file" name="image" accept="image/*" required>

            <input type="submit" value="Add">
        </form>

    </article>

</main>

<?php require 'partials/footer.php'; ?>

<?php require 'partials/bottom.php'; ?>