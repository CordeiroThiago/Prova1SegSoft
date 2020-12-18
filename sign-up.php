<html>
    <head>
    </head>
    <body>
        <div>
            sign up <?php echo $_GET["first-name"] ?>
        </div>
        <?php
            if (trim($_GET["email"]) == "") {
                echo "Erro: email em branco";
            }
        ?>
    </body>
</html>