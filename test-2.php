<?php
$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
$headers .= "From: sac@multimoneycorretora.com.br\r\n"; //E-mail do remetente
$headers .= "Return-Path: sac@multimoneycorretora.com.br\r\n"; //E-mail do remetente
mail("crisstanza@gmail.com", "Assunto", "Texto", $headers, "-r". "sac@multimoneycorretora.com.br");
print "Mensagem enviada com sucesso! Argumento -r.";
?>
