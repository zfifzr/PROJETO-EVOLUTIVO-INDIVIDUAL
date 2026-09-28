<?php
declare(strict_types=1);

require_once 'Matricula.php';

class Pagamento {
    private int $codigo;
    private Matricula $matricula;
    private float $valor;
    private string $data;
    private bool $pago;

    public function __construct(int $codigo, Matricula $matricula, float $valor, string $data) {
        $this->codigo = $codigo;
        $this->matricula = $matricula;
        $this->valor = $valor;
        $this->data = $data;
        $this->pago = false;
    }

    public function realizarPagamento(): void {
        $this->pago = true;
    }

    public function isPago(): bool {
        return $this->pago;
    }

    public function obterDetalhes(): string {
        $situacao = $this->pago ? "Pago" : "Pendente";
        $valorFormatado = number_format($this->valor, 2, ',', '.');
        $nomeAluno = $this->matricula->getAluno()->getNome();

        return "=== PAGAMENTO ===<br>" .
               "Código: {$this->codigo}<br>" .
               "Aluno: {$nomeAluno}<br>" .
               "Valor: R$ {$valorFormatado}<br>" .
               "Data: {$this->data}<br>" .
               "Situação: {$situacao}<br>";
    }
}