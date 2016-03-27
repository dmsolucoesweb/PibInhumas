<?php

require_once 'montahtml.php';

$html = new MontaHtml();

$index = null;
$index .= $html->Cabecalho();
$index .= $html->Head();
$index .= $html->Body();
$index .= $html->Fim();

echo $index;

