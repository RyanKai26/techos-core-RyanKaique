<?php
require_once __DIR__ . '/OrdemServico.php';

class GerenciadorOS
{
    private static ?GerenciadorOS $instancia = null;
    private array $ordens = [];

    private function __construct() {}

    public static function obterInstancia(): GerenciadorOS
    {
        if (self::$instancia === null) {
            self::$instancia = new GerenciadorOS();
        }

        return self::$instancia;
    }

    public function adicionar(OrdemServico $ordem): void
    {
        $this->ordens[] = $ordem;
    }

    public function listar(): array
    {
        return $this->ordens;
    }
}
