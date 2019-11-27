<?php
/**
 * User: Vanessa Lima
 * Date: 18/07/2018
 */

require_once '../gerenciador/GerenciadorEvento.php';
require_once '../view/PortifolioDeEventos/showPortifolioIndex.php';
require_once '../view/PortifolioDeEventos/showPortifolioEventos.php';

$actionPadrao = 'showPortifolioIndex'; // ação padrao a ser desenvolvida pela controladora.
if ($_REQUEST['action']) // Caso receba alguma informação via GET ou POST
    $actionPadrao = $_REQUEST['action']; // Será atribuído o que recebeu a variavel de ação padrão.



// Consulta para montar o array de eventos
$gerenciadorEvento = new GerenciadorEvento();
$arrayEventosAbertos = $gerenciadorEvento->obterTodosAbertos();

?>