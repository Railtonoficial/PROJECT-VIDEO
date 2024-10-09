<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
<div>
    <pre>
    <?php
        require_once 'Video.php';
        require_once 'Usuario.php';
        require_once 'Vizualizacao.php';

        $v[0] = new Video("Aula 1 de POOO");
        $v[1] = new Video("Aula 2 de POOO");
        $v[2] = new Video("Aula 3 de POOO");

        $u[0] = new Usuario("Pedro", 27, "M", "PedroOficial");
        $u[1] = new Usuario("Creuza", 24, "F", "CreuzaOficial");

        $vis[0] = new Vizualizacao($u[0] , $v[2]);
        $vis[1] = new Vizualizacao($u[0] , $v[1]);

        $vis[0]->avaliar();
        $vis[1]->avaliarPorcentagem(85);

        print_r($v);
        print_r($u);
        print_r($vis);

    ?>
    </pre>
</div>
</body>
</html>