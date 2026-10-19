<?php
require_once __DIR__ . '/Cliente.php';

class OrdemServico
{
    private int $id;
    private Cliente $cliente;
    private string $descricao;
    private string $status;

    public function __construct(
        int $id,
        Cliente $cliente,
        string $descricao
    ) {
        $this->id = $id;
        $this->cliente = $cliente;
        $this->descricao = $descricao;
        $this->status = 'ABERTA';
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getCliente(): Cliente
    {
        return $this->cliente;
    }

    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function getStatus(): string
    {
        return $this->status;
    }
}
