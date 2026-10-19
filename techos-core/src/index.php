<?php
require_once __DIR__ . '/UsuarioFactory.php';
require_once __DIR__ . '/GerenciadorOS.php';

$cliente = UsuarioFactory::criar(
    'cliente', 101, 'Ana', 'ana@email.com', '81999990000'
);

$tecnico = UsuarioFactory::criar(
    'tecnico', 202, 'Carlos', 'carlos@email.com', 'Informática'
);

$gerenciador = GerenciadorOS::obterInstancia();
$gerenciador2 = GerenciadorOS::obterInstancia();

echo "<p>Singleton funcionando: ";
echo ($gerenciador === $gerenciador2) ? "SIM" : "NÃO";
echo "</p>";

$ordem = new OrdemServico(
    1,
    $cliente,
    'Troca de tela'
);

$gerenciador->adicionar($ordem);

echo "<h2>TechOS Core</h2>";
echo "<p>Cliente: " . htmlspecialchars($cliente->getNome()) . "</p>";
echo "<p>Técnico: " . htmlspecialchars($tecnico->getNome()) . "</p>";
echo "<p>Ordem: #" . $ordem->getId() . "</p>";
echo "<p>Descrição: " .
    htmlspecialchars($ordem->getDescricao()) . "</p>";
echo "<p>Status: " . $ordem->getStatus() . "</p>";
echo "<p>Total de ordens: " .
    count($gerenciador->listar()) . "</p>";
