

<?php require_once '_config.php'; ?>

<?php require 'partials/top.php'; ?>

    <?php require 'partials/header.php'; ?>

    <main>

        <article>
            
            <h2>Signup</h2>

            <p>User: <strong>jimmy</strong>,  Pass: <strong>jimmy</strong></p>

            <form method="POST" action="actions/process-signup.php">

            <label>Forename</label>
            <input name="forename" type="text" required>

            <label>Surname</label>
            <input name="surname" type="text" required>

            <label>Username</label>
            <input name="username" type="text" required>

            <label>Password</label>
            <input name="password" type="text" required>

            <input type="submit" value="Sign Up">

            </form>

        </article>

    </main>

    <?php require 'partials/footer.php'; ?>

<?php require 'partials/bottom.php'; ?>