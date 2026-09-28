<?php
declare(strict_types=1);

require_once 'Pessoa.php';

class Professor extends Pessoa {
    private string $especialidade;
    private string $cref;

    public function __construct(string $nome, string $cpf, string $email, string $especialidade, string $cref) {
        parent::__construct($nome, $cpf, $email);
        $this->especialidade = $especialidade;
        $this->cref = $cref;
    }

    public function getEspecialidade(): string {
        return $this->especialidade;
    }

    public function getCref(): string {
        return $this->cref;
    }

    public function obterDetalhes(): string {
        return "=== PROFESSOR ===<br>" .
               parent::obterDetalhes() .
               "Especialidade: {$this->especialidade}<br>" .
               "CREF: {$this->cref}<br>";
    }
}