<?php
// A mensagem
$message = "Linha 1\nLinha 2\nLinha 3";

// Se as linhas forem maiores que 70 caracteres, use wordwrap()
$message = wordwrap($message, 70, "\n");

// Enviar o e-mail
mail('caffeinated@example.com', 'Meu Assunto', $message);
?>
