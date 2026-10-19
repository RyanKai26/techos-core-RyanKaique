<?php
require_once __DIR__ . '/Usuario.php';

class Cliente extends Usuario
{
    protected string $telefone;

    public function __construct(
        int $id,
        string $nome,
        string $email,
        string $telefone
    ) {
        parent::__construct($id, $nome, $email);
        $this->telefone = $telefone;
    }

    public function getTelefone(): string
    {
        return $this->telefone;
    }
}
