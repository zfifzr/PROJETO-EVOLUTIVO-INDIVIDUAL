<?php
declare(strict_types=1);

require_once 'Professor.php';
require_once 'Exercicio.php';

class Treino {
    private string $nome;
    private Professor $professor;
    private array $exercicios;

    public function __construct(string $nome, Professor $professor) {
        $this->nome = $nome;
        $this->professor = $professor;
        $this->exercicios = [];
    }

    public function adicionarExercicio(Exercicio $exercicio): void {
        $this->exercicios[] = $exercicio;
    }

    public function obterDetalhes(): string {
        $saida = "=== TREINO ===<br>" .
                 "Nome: {$this->nome}<br>" .
                 "Professor: " . $this->professor->getNome() . "<br><br>" .
                 "Exercícios:<br>";

        foreach ($this->exercicios as $exercicio) {
            $saida .= $exercicio->obterDetalhes();
        }

        return $saida;
    }
}