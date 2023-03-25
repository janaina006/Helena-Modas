<?php

$smarty = new Tamplate();

$pag = new PagamentoPS();






if(!isset($_POST['cod_pedido'])){
    Rotas::Redirecionar(1, Rotas::pag_ClientePedidos());
    exit();
}

$itens = new Itens();
$pedido = filter_var($_POST['cod_pedido'], FILTER_SANITIZE_STRING);


$itens->GetItensPedido($pedido);
$smarty->assign('ITENS', $itens->GetItens());
$smarty->assign('TOTAL', $itens->GetTotal());
$smarty->assign('PRO_INFO', Rotas::pag_ProdutosInfo());
$smarty->assign('FORMA_PAG', $_SESSION['PED']['teste']);
$smarty->assign('PAG_ITENS', Rotas::pag_CLienteItens());
$smarty->assign('PAG_RASTREO', Rotas::pag_Rastreo());




switch($itens->GetItens()[1]['ped_pag_status']) {
    case 'Realize o pagamento':
        // PAGAMENTO PS --------------------------
        $pag->PagamentoITENS($_SESSION['CLI'], $itens->GetItens()[1], $itens->GetItens());
        // passando para o template dados do PS
        $smarty->assign('PS_URL', $pag->psURL);            
        $smarty->assign('PS_COD', $pag->psCod);
        $smarty->assign('PS_SCRIPT', $pag->psURL_Script);
        $smarty->assign('REF',$pedido);
        $smarty->assign('PAG_RETORNO', Rotas::pag_PedidoRetorno());
        $smarty->assign('PAG_ERRO', Rotas::pag_PedidoRetornoERRO());
        $smarty->assign('TEMA', Rotas::get_SiteTEMA());
        $smarty->assign('PAGO',  'Realize o pagamento');

        /// fim do pagamento            
        $smarty->display('clientes_itens.tpl');
        break;
    case 'Aguardando Pagamento':
    case 'Pago':
    case 'Cancelado':

        // recebe notificação automática
$pag->Nofificacao();

$ref = $_POST['cod_pedido'];

// verifico se tem um COD REF na URL, se não tiver não mostro nada
if(isset($ref)):

// pegando a rota com o cod referencia GET

// pega a transação por REF apos ter efetuado a compra
$pag->BuscarTransacaoREF($ref);

// passo variaveis  para o template 
$smarty->assign('PAGO',      $pag->info['pago']);
$smarty->assign('CODIGO',    $pag->info['codigo']);
$smarty->assign('REF',       $pag->info['referencia']);
$smarty->assign('FORMA_PAG', $pag->info['forma_pag']);
$smarty->assign('PAG_ITENS', Rotas::pag_CLienteItens());
// chamando o temnplate
$smarty->display('pedido_retorno.tpl');
$smarty->display('clientes_itens.tpl');


else:
    
    echo '<div class="alert alert-danger">Sem transações  para informar </div>';
    
endif;
        break;
    default:
        // caso o status do pagamento não seja nenhum dos valores acima, mostra novamente o botão de pagar 
        $smarty->display('clientes_itens.tpl');
        break;
}




?>