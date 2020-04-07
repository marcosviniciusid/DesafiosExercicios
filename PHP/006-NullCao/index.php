<?php
/**
 * 
 * Autor do código: Marcos Silva
 * GitHub: https://github.com/marcosviniciusid
 * Fundador DevPro Community
 * 
 */

$nome = 'Marcos';

$nomeCompleto = $nome ?? 'Visitante';
$nomeCompleto .= $sobrenome ?? '';

echo $nomeCompleto;