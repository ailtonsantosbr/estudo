
<?php
$str = <<<EOD
Exemplo de uma string
distribu�da em v�rias linhas
utilizando a sintaxe heredoc.
EOD;

/* Exemplo mais complexo, com vari�veis */
class foo
{
    var $foo;
    var $bar;

    function foo()
    {
        $this->foo = 'Foo';
        $this->bar = array('Bar1', 'Bar2', 'Bar3');
    }
}

$foo = new foo();
$name = 'Meu nome';

echo <<<EOT
Meu nome � "$name". Eu estou imprimindo $foo->foo.
Agora, eu estou imprimindo {$foo->bar[1]}.
Isto deve imprimir um 'A' mai�sculo: \x41
EOT;
?>
