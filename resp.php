<?php 

$nome="";
$sobre="";
$perfil_antes="";
$perfil_depois="";
$imagem="img/generico.jpeg";

$form= isset($_GET["nome"]) && isset($_GET["sobre"]);
$form= $form && isset($_GET["perfil_antes"]) && isset($_GET["perfil_depois"]);

if($form){
    $nome= ($_GET["nome"]);
    $sobre= ($_GET["sobre"]);
    $perfil_antes= intval($_GET["perfil_antes"]);
    $perfil_depois= intval($_GET["perfil_depois"]);
    if($_GET["imagem"] != ""){
        $imagem= ($_GET["imagem"]);
    }
}

else{
    header("Location: form.php");
    exit();
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>perfil</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Perfis</h1>

    <div id="perfis">

        <!-- perfil antes -->
        <?php for ($i=0; $i< $perfil_antes; $i++): ?>
            <div class="perfil">
                <div class="imagem">
                    <img src="img/generico.jpeg" alt="imagem generica">
                </div> 
                <div class="descricao">
                    <h3>perfil  anterior <?= $i+1; ?></h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit fuga, ipsum nisi aliquid nesciunt distinctio obcaecati, repudiandae ullam, quis excepturi nostrum! Numquam eaque porro, labore maxime dolore laborum at neque qui veritatis vero, facere, libero perferendis minus eos earum deserunt!</p>
                </div>
            </div>
        <?php endfor; ?>    

        <!-- perfil usuario -->
            <div class="perfil">
                <div class="imagem">
                    <img src="<?= $imagem; ?>" alt="imagem ">
                </div>
                <div class="descricao">
                    <h3> <?= $nome; ?></h3>
                    <p><?= $sobre; ?></p>
                </div>
            </div>


        <!-- perfil depois -->
        <?php for ($i=0; $i< $perfil_depois; $i++): ?>
            <div class="perfil">
                <div class="imagem">
                    <img src="img/generico.jpeg" alt="imagem generica">
                </div>
                <div class="descricao">
                    <h3>perfil Depois <?= $i+1; ?></h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit fuga, ipsum nisi aliquid nesciunt distinctio obcaecati, repudiandae ullam, quis excepturi nostrum! Numquam eaque porro, labore maxime dolore laborum at neque qui veritatis vero, facere, libero perferendis minus eos earum deserunt!</p>
                </div>
            </div>
        <?php endfor; ?> 

    </div>
    

</body>

</html>