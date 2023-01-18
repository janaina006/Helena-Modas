<?php

$smarty = new Tamplate();









$pedidos = new Pedidos();

$pedidos->GetPedidosCliente($_SESSION['CLI']['cli_id']);


$smarty->assign('PEDIDOS', $pedidos->GetItens());
$smarty->assign('PEDIDOS_QUANTIDADES', $pedidos->TotalDados());
$smarty->assign('PAG_ITENS', Rotas::pag_clienteItens());
$smarty->assign('PAGINAS', $pedidos->ShowPaginacao());


$smarty-> display('clientes_pedidos.tpl');

?>