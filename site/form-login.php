
<?php require_once '_config.php'; ?>

<?php require 'partials/top.php'; ?>

    <?php require 'partials/header.php'; ?>

    <main>

        <article>
            
            <h2>Login</h2>

            <p>User: <strong>jimmy</strong>,  Pass: <strong>jimmy</strong></p>

            <form hx-post="actions/login-user.php" hx-swap="outerHTML">

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