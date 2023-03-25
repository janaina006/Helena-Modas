<?php 
$smarty = new Tamplate();
$itens = new Itens();
if(isset($_POST['rastreo'])){
    $smarty->assign('RASTREO', $_POST['rastreo']);

}
$smarty->assign('ITENS', $itens->GetItens());

$smarty->display('rastreamento.tpl');


 ?>