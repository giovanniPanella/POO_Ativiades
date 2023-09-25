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
        //vamos criar um vetor para simular um Banco de dados com alguns videos
        $v[0] = new Video("Historia Senai");
        $v[1] = new Video("Curso de TDS");
        $v[2] = new Video("Gols da Rodada");
        
        //print_r($v);
        $p[0] = new Usuario("Jose", 15, "M", "zeze");
        $p[1] = new Usuario("Tati", 40, "F", "Tati");

        
        $vis[0] = new Visualizacao ($p[0], $v[1]); //Testando jose assiste TDS
        $vis[1] = new Visualizacao ($p[0], $v[0]); //jose assite outro video
        
        $vis[0]->avaliar();
        print_r($vis);
        $vis[1]->avaliarNota(6);
        print_r($vis);
        $vis[0]->avaliarPorc(4);
        
        print_r($vis);
        ?>
    </body>
    </pre>
</html>
