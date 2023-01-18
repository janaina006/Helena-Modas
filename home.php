<?php

$smarty = new Tamplate();
$categorias = new Categorias();

$categorias->GetCategorias();


$smarty->assign('BANNER', Rotas::ImageLink('Banner.jpg', 750,230
    ));
$smarty-> assign ('CATEGORIAS', $categorias->GetItens());
$smarty-> assign ('GET_TEMA', Rotas::get_SiteTEMA());


$smarty-> display('home.tpl');

include_once Rotas::get_Pasta_Controller(). '/produtos.php';

?>