<?php require_once '_config.php'; ?>

<?php require 'partials/top.php'; ?>

<?php require 'partials/header.php'; ?>

<main>

    <article class="login">

        <h2>Login</h2>

        <form hx-post="login-user.php">

            <label>Username</label>
            <input name="username" type="text" required>

            <label>Password</label>
            <input name="password" type="password" required>

            <input type="submit" value="Login">

        </form>

    </article>

</main>

<?php require 'partials/footer.php'; ?>

<?php require 'partials/bottom.php'; ?>