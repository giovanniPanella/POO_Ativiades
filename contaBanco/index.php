<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
         require_once 'ContaBanco.php';
         
         $pessoa1 = new ContaBanco();
         $pessoa2 = new ContaBanco();
         $pessoa1->abrirConta("cp");
         $pessoa1->setNumConta(1111);
         $pessoa1->setNome("Maria");
         $pessoa1->depositar(300);
         $pessoa1->sacar(100);
         $pessoa1->sacar(1000);
         $pessoa1->pagarMensal();
         $pessoa1->depositar(0);
         $pessoa1->fecharConta();
         $pessoa1->sacar(330);
         $pessoa1->fecharConta();
         $pessoa1->depositar(300);
         
        
        
        ?>
    </body>
</html>
