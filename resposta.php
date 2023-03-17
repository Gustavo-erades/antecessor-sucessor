<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T001</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main id="resposta">
        <h1>Resultado:</h1>
        <p>
            <?php

                $num= $_REQUEST["num"] ?? 0;
                if($num>=1){
                    echo "O número digitado foi: <strong>$num</strong>";
                    echo "<br>";
                    echo "O seu <b><em>antecessor</em></b> é:"." ".($num-1).""; 
                    echo "<br>";
                    echo "O seu <b><em>sucessor</em></b> é:"." ".($num+1)."";
                }else{
                    echo"Nenhum número digitado! Tente novamente.";
                }
               
            ?>
        </p>
        <button onclick="javascript:history.go(-1)" id="botao">Novo Número</button>
    </main>
</body>
</html>