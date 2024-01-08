<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../styles/login.css">
        <title>Project - Log In</title>
    </head>

    <body>
        <?php include_once "../../includes/header.php"?> 
        <main>
            <div class="login-form">
                <form action="../control/authUser.php" method="post">
                    <label for="name">Nome:</label>
                        <input type="text" id="name" name="user" required>
                    <br>

                    <label for="password">Senha:</label>
                        <input type="password" id="password" name="pass" required>
                    <br>
                    <button type="submit">Entrar</button>
                </form>
                <button>Criar conta</button>
                <a href="">Nao consigo entrar na minha conta</a>
            </div>

            <div class="signup-form">
                <form action="../control/authUser.php" method="post">
                    <label for="name">Nome:</label>
                        <input type="text" id="name" name="user" required>
                    <br>

                    <label for="password">Senha:</label>
                        <input type="password" id="password" name="pass" required>
                    <br>
                    <button type="submit">Entrar</button>
                </form>
                <button>Criar conta</button>
                <a href="">Nao consigo entrar na minha conta</a>
            </div>
            

        </main>
        <?php include_once "../../includes/footer.php"?>
        <script src="../../js/login.js">
    </body>
</html>