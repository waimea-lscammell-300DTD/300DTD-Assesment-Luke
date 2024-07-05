<?php

    $id = $_GET['id'] ?? null;

?>

<h2>DELETE Request Received!</h2>

<h4>Actions Required...</h4>

<ol>
    <li>User ID is from URL via <strong>$_GET</strong></li>
    <li>Use ID in a <strong>MySQL DELETE</strong> query</li>
    <li>Let user know it was successful</li>
</ol>

<h4>Example...</h4>

<ol>
    <li>
        <p>Data in <strong>$_GET</strong>:</p>

        <pre><code><?php print_r($_GET); ?></code></pre>
    </li>

    <li>
        <p>User ID from <strong>$_GET</strong>:</p>

        <pre><code><?= $id ?></code></pre>
    </li>

    <li>
        <p>Run MySQL query:</p>

        <pre><code>DELETE FROM users WHERE id=?</code></pre>
    </li>

    <li>
        <p>Feedback:</p>

        <article>
            <p>User record deleted successfully!</p>
        </article>
    </li>
</ol>

