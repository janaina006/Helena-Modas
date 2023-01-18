<?php

$smarty = new Tamplate();
$smarty-> assign ('GET_TEMA', Rotas::get_SiteTEMA());

Rotas::Redirecionar(1.5, Rotas::get_SiteHOME());

$smarty-> display('erro.tpl');


?>