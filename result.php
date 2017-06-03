<!doctype html>
<html>
    <!-- Matheus Gamalier - 1575015 - B1FW2 - Prof.: Rodinei Pontelli -->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/custom.css" rel="stylesheet">
        <title>Projeto 2 - B1FW2</title>
        <style>           
            form input{
                background: #bbb;
            }         
        </style>
    </head>
    <body>
        <form>
            <label>ID Máquina</label>
            <input type="text" value="<?php echo strtoupper($_POST['tag']); ?>" readonly>
            <label>Tempo disponível</label>
            <input type="number" value="<?php echo $_POST['disp']; ?>" readonly>
            <label>Tempo indisponível</label>
            <input type="number" value="<?php echo $_POST['indisp']; ?>" readonly>
            <p>Disponibilidade: 
                <?php
                if (empty($_POST['disp']) || empty($_POST['indisp']) || empty($_POST['tag']))
                    echo "Preencha todos os dados acima para obter a porcentagem de disponibilidade da máquina.";
                else
                    echo round($_POST['disp'] / ($_POST['disp'] + $_POST['indisp']) * 100, 2) . "%";
                ?>
            </p>
            <div class="botoes">
                <a href="index.html">< Retornar</a>
            </div>
        </form>
    </body>
</html>