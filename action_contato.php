<?php
// action_contato.php

echo "<h1>Dados do Contato Recebidos</h1>";

echo "<p><strong>Nome:</strong> " . htmlspecialchars($_POST['nome']) . "</p>";
echo "<p><strong>E-mail:</strong> " . htmlspecialchars($_POST['email']) . "</p>";
echo "<p><strong>Idade:</strong> " . htmlspecialchars($_POST['idade']) . "</p>";
echo "<p><strong>Data do contato:</strong> " . htmlspecialchars($_POST['data']) . "</p>";
echo "<p><strong>Sexo:</strong> " . htmlspecialchars($_POST['sexo']) . "</p>";

if (!empty($_POST['interesses'])) {
    echo "<p><strong>Interesses:</strong> " . implode(", ", array_map('htmlspecialchars', $_POST['interesses'])) . "</p>";
} else {
    echo "<p><strong>Interesses:</strong> Nenhum selecionado</p>";
}

echo "<p><strong>Mensagem:</strong><br>" . nl2br(htmlspecialchars($_POST['mensagem'])) . "</p>";
?>
