<?php
declare(strict_types=1);

require_once 'classes/Pessoa.php';
require_once 'classes/Aluno.php';
require_once 'classes/Professor.php';
require_once 'classes/Plano.php';
require_once 'classes/Matricula.php';
require_once 'classes/Exercicio.php';
require_once 'classes/Treino.php';
require_once 'classes/Pagamento.php';

echo "<h1>Sistema de Academia - Versão Otimizada</h1>";

$planoBasico = new Plano("Plano Básico", 89.90, 12);
$planoPremium = new Plano("Plano Premium", 129.90, 12);

$aluno1 = new Aluno("João Silva", "111.111.111-11", "joao@email.com", "ALU001");
$aluno2 = new Aluno("Maria Oliveira", "222.222.222-22", "maria@email.com", "ALU002");

$professor1 = new Professor("Carlos Santos", "333.333.333-33", "carlos@email.com", "Musculação", "CREF001");

$matricula1 = new Matricula(1, $aluno1, $planoPremium, "19/09/2026");
$matricula2 = new Matricula(2, $aluno2, $planoBasico, "19/09/2026");

$supino = new Exercicio("Supino Reto", 4, 10);
$agachamento = new Exercicio("Agachamento", 4, 12);
$remada = new Exercicio("Remada", 3, 12);

$treinoA = new Treino("Treino A", $professor1);
$treinoA->adicionarExercicio($supino);
$treinoA->adicionarExercicio($agachamento);
$treinoA->adicionarExercicio($remada);

$pagamento1 = new Pagamento(1, $matricula1, $planoPremium->getValorMensal(), "19/09/2026");

echo "<hr>";
echo $aluno1->obterDetalhes();

echo "<hr>";
echo $professor1->obterDetalhes();

echo "<hr>";
echo $planoPremium->obterDetalhes();

echo "<hr>";
echo $matricula1->obterDetalhes();

echo "<hr>";
echo $treinoA->obterDetalhes();

echo "<hr>";
echo $pagamento1->obterDetalhes();

echo "<hr>";
echo "<h2>Realizando pagamento</h2>";
$pagamento1->realizarPagamento();
echo $pagamento1->obterDetalhes();

echo "<hr>";
echo "<h2>Alterando plano</h2>";
$matricula1->alterarPlano($planoBasico);
echo $matricula1->obterDetalhes();

echo "<hr>";
echo "<h2>Cancelando matrícula</h2>";
$matricula2->cancelar();
echo $matricula2->obterDetalhes();

echo "<br>";
echo $aluno2->obterDetalhes();