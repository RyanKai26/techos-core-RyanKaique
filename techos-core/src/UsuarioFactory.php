<?php
require_once __DIR__ . '/Cliente.php';
require_once __DIR__ . '/Tecnico.php';

class UsuarioFactory
{
    public static function criar(
        string $tipo,
        int $id,
        string $nome,
        string $email,
        string $extra
    ): Usuario {
        switch (strtolower($tipo)) {
            case 'cliente':
                return new Cliente($id, $nome, $email, $extra);

            case 'tecnico':
                return new Tecnico($id, $nome, $email, $extra);

            default:
                throw new InvalidArgumentException(
                    'Tipo de usuário inválido.'
                );
        }
    }
}
