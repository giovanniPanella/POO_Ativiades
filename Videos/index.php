<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <pre>
        <body>
            <?php
                require_once 'Video.php';
                require_once 'Usuario.php';
                require_once 'Visualizacao.php';
                
                //Vamos criar um vetor para simular um BD
                $v[0] = new Video("Historia do Senai");
                $v[1] = new Video("Gols da Rodada");
                $v[2] = new Video("Memes Br");
                //print_r($v);
                
                $p[0] = new Usuario("José", 30, "M", "zeze");
                $p[1] = new Usuario ("Maria", 45,"F","MariaA");
               // print_r($p);
               $vis[0]=  new Visualizacao ($p[0], $v[2]);
               $vis[0]->avaliar();
               print_r($v);
               $vis[1] = new Visualizacao($p[1],$v[2]);
               $vis[1]->avaliarNota(7);
               print_r($v);
               
            ?>
        </body>
    </pre>
</html>
