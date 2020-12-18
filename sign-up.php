<html>
    <head>
    </head>
    <body>
        <div>
            sign up <?php echo $_POST["first-name"] ?>
        </div>
        <?php
            if (trim($_POST["email"]) == "") {
                echo "Erro: email em branco";
            }
        ?>
    </body>
</html>