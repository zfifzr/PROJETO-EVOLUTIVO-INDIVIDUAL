<?php
declare(strict_types=1);

class Exercicio {
    private string $nome;
    private int $series;
    private int $repeticoes;

    public function __construct(string $nome, int $series, int $repeticoes) {
        $this->nome = $nome;
        $this->series = $series;
        $this->repeticoes = $repeticoes;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function obterDetalhes(): string {
        return "{$this->nome} - {$this->series} séries de {$this->repeticoes} repetições<br>";
    }
}