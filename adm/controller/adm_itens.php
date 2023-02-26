<?php



$smarty = new Tamplate();

if(!isset($_POST['cod_pedido'])){
    Rotas::Redirecionar(1, Rotas::pag_PedidosADM());
    exit();
}

foreach($_SESSION['CLI'] as $campo => $valor){
    $smarty->assign(strtoupper($campo), $valor);

}

$itens = new Itens();
$pedido = filter_var($_POST['cod_pedido'], FILTER_SANITIZE_STRING);


$itens->GetItensPedido($pedido);
$smarty->assign('ITENS', $itens->GetItens());
$smarty->assign('TOTAL', $itens->GetTotal());
$smarty->assign('CEP', $destino = $_SESSION['PED']['cep']);


$smarty-> display('adm_itens.tpl');


?>