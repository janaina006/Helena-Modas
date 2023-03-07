<?php



$smarty = new Tamplate();

$pedido = new Pedidos();
$itens = new Itens();

if(isset($_POST['cod_pedido'])){
    
    $_SESSION['PED']['cod_para_rastreo'] = $_POST['cod_pedido'];
}

if(isset($_POST['cod_rastreo'])) {
$_SESSION['PED']['rastreo'] = $_POST['cod_rastreo'];



$ped_pag_codigo = $_SESSION['PED']['rastreo'];
$cod = $_SESSION['PED']['cod_para_rastreo'];

$pedido->AtualizarCodigoPagamento($cod, $ped_pag_codigo);



}

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