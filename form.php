
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>perfil</title>
</head>
<body>
    
    <div style="text-align: center;">
        <form action="resp.php">
            <input type="text" name="nome" placeholder="Nome*"  required >
            <br><br>
            <textarea name="sobre" cols="30" rows="10" required placeholder="Sobre*"></textarea>
            <br><br>
            <input type="number" name="perfil_antes" placeholder="Perfil anterior*" min="1" required>
            <br><br>
            <input type="number" name="perfil_depois" placeholder="Perfil Posterior*" min="1" required>
            <br><br>
            <input type="text" name="imagem" placeholder="Link imagem">
            <br><br>
            <input type="submit" value="Ir">

        </form>
    </div>

</body>
</html>