<?php
declare(strict_types=1);

require_once 'Pessoa.php';

class Aluno extends Pessoa {
    private string $matricula;
    private bool $ativo;

    public function __construct(string $nome, string $cpf, string $email, string $matricula) {
        parent::__construct($nome, $cpf, $email);
        $this->matricula = $matricula;
        $this->ativo = true;
    }

    public function getMatricula(): string {
        return $this->matricula;
    }

    public function isAtivo(): bool {
        return $this->ativo;
    }

    public function ativar(): void {
        $this->ativo = true;
    }

    public function desativar(): void {
        $this->ativo = false;
    }

    public function obterDetalhes(): string {
        $status = $this->ativo ? "Ativo" : "Inativo";

        return "=== ALUNO ===<br>" .
               parent::obterDetalhes() .
               "Matrícula: {$this->matricula}<br>" .
               "Status: {$status}<br>";
    }
}