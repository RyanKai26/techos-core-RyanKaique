<?php
require_once __DIR__ . '/Usuario.php';

class Tecnico extends Usuario
{
    protected string $especialidade;

    public function __construct(
        int $id,
        string $nome,
        string $email,
        string $especialidade
    ) {
        parent::__construct($id, $nome, $email);
        $this->especialidade = $especialidade;
    }

    public function getEspecialidade(): string
    {
        return $this->especialidade;
    }
}
