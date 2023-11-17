<!DOCTYPE html>
<html>
    <head>
        <title>Rejestracja-Saper</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <link href="assets/png/bomb.png" rel="icon">
        <?php include "php/register_conn_with_sql.php" ?>
    </head>
    <body>
        <div class="cen">
            <form class="logirej rej"  method="post">
                <h1>Zarejestruj się</h1>
                Wpisz swój login:
                <input type="text" name="login_reg" class="pole">
                Wpisz swoje hasło:
                <input type="password" name="password_reg" class="pole">
                Powtórz swoje hasło
                <input type="password" name="password_conf" class="pole">
                <div class="flexbox">
                    <input type="submit" name="submit" value="Zarejestruj się" class="przycisk">
                </div>
            </form>
        </div>
    </body>
</html>