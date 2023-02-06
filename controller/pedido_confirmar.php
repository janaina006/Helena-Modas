<?php
if(!Login::Logado()){
    Login::AcessoNegado();
    Rotas::Redirecionar(2, Rotas::pag_ClienteLogin());
}else{

if(isset($_SESSION['PRO'])) {

    if(!isset($_POST['frete_radio'])){
        Rotas::Redirecionar(3,Rotas::pag_Carrinho().'#dadosfrete');
        exit ('<h4 class="alert alert-danger"> Favor selecionar o frete! </h4>');
    }


    $smarty = new Tamplate();

    $carrinho = new Carrinho();

    $pedidos = new Pedidos();

    /////////////////////////
    

    $smarty->assign('PRO', $carrinho->GetCarrinho());
    
    // $_SESSION['PED']['frete'] = $_POST['frete_radio'];
    $frete_tipo = $_SESSION['PED']['frete_tipo'];
    
    // $_SESSION['PED']['total_com_frete'] = ($_POST['frete_radio'] +
    // $carrinho->GetTotal());

    
    



    
    $smarty->assign('TOTAL', Sistema::MoedaBR($carrinho->GetTotal()));
    $smarty->assign('PAG_CARRINHO_ALTERAR', Rotas::pag_CarrinhoAlterar());
    $smarty->assign('PAG_CONFIRMAR', Rotas::pag_PedidoConfirmar());
    $smarty->assign('PAG_PRODUTOS', Rotas::pag_Produtos());
    $smarty->assign('PAG_CARRINHO', Rotas::pag_Carrinho());
    $smarty->assign('PAG_FINALIZAR', Rotas::pag_PedidoFinalizar());
    // $smarty->assign('FRETE', Sistema::MoedaBR($_SESSION['PED']['frete']));
    $smarty->assign('TIPOFRETE',($frete_tipo));
    // $smarty->assign('TOTAL_FRETE', Sistema::MoedaBR($_SESSION['PED']['total_com_frete']));
    $smarty->assign('PEDIDOS', $pedidos->GetItens());




    $smarty-> display('pedido_confirmar.tpl');
    }else {
       echo '<h4 class="alert alert-danger"> Não possui produtos no carrinho </h4>';
          Rotas::Redirecionar(2, Rotas::pag_Produtos());

    }

}
?>