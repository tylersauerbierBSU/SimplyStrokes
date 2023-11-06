<?php
require_once("login-nav.php");
session_start();
?>

<html>
    
    <head>
        <link rel="stylesheet" href="login.css">
    </head>

    <body>
        <div class="form-block">
                <h1>Welcome to Simply Strokes</h1>
                <br>
                <h2>If you are new, please register your new account <a href="register.php"> HERE</a><h2>
                <h2>If you already have an account, please log in<h2>

                <form method="post" action="login-handler.php">
                    <div id="login_form">First name: <input type="text"
                                                            value = "<?php echo isset($_SESSION['post']['first']) ? $_SESSION['post']['first'] : ''; ?>"
                                                            name="first"/></div>
                    <div id="login_form">Last name: <input type="text"
                                                        value = "<?php echo isset($_SESSION['post']['last']) ? $_SESSION['post']['last'] : ''; ?>"
                                                        name="last"/></div>
                    <div id="login_form">Username: <input type="text"
                                                        value = "<?php echo isset($_SESSION['post']['username']) ? $_SESSION['post']['username'] : ''; ?>"
                                                        name="username"/></div>
                    <div id="login_form">Password: <input type="password"
                                                        value = "<?php echo isset($_SESSION['post']['password']) ? $_SESSION['post']['password'] : ''; ?>"
                                                        name="password"/></div>
                    <div id="submit_box"><input type="submit" name="Login" value="Login"/></div>
                </form>
                <br>


            </div>

            <?php
            if (isset($_SESSION['messages'])) {
                if (isset($_SESSION['messages']['bad'])) {
                    foreach ($_SESSION['messages']['bad'] as $bad) {
                        echo "<div class='message bad'>{$bad}</div>";
                    }
                }
                if (isset($_SESSION['messages']['good'])) {
                    foreach ($_SESSION['messages']['good'] as $good) {
                        echo "<div class='message good'>{$good}</div>";
                    }
                }
            }

            unset($_SESSION['messages']);
            unset($_SESSION['post']);
            ?>

    </body>
</html>
