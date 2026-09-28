<?php
declare(strict_types=1);

class Pessoa {
    protected string $nome;
    protected string $cpf;
    protected string $email;

    public function __construct(string $nome, string $cpf, string $email) {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->email = $email;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function getCpf(): string {
        return $this->cpf;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function obterDetalhes(): string {
        return "Nome: {$this->nome}<br>" .
               "CPF: {$this->cpf}<br>" .
               "E-mail: {$this->email}<br>";
    }
}