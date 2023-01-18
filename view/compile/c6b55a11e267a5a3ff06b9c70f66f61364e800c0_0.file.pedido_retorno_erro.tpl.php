<?php
/* Smarty version 4.1.1, created on 2023-01-12 00:38:05
  from 'C:\wamp\www\loja\view\pedido_retorno_erro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_63bf809dc2be01_82958584',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6b55a11e267a5a3ff06b9c70f66f61364e800c0' => 
    array (
      0 => 'C:\\wamp\\www\\loja\\view\\pedido_retorno_erro.tpl',
      1 => 1673494684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bf809dc2be01_82958584 (Smarty_Internal_Template $_smarty_tpl) {
?><style>


</style>

<div class="erro">
  <br>  
<h3 class="text-center text-danger"> Ocorreu um problema no pagamento, ou foi cancelado</h3>
<br>
<section  class="row">
    
    
    <div class="col-md-3"></div>
   
    
    <div class="col-md-6">
        
          <p> Caso teve algum problema entre em contato conosco, informando <br>
        o código de referência:<b> <?php echo $_smarty_tpl->tpl_vars['REF']->value;?>
 </b>
        </p> 
        
         <p> Ou pode tentar novamente o pagamento na seção "Pedidos" clicando em "Detalhes"<br>
         
        </p>  
        
         <p> Para ir a tela do pedido e efetivar o pagamento, clique no botão.</p>  
         <p>
        <br>
        <hr>
         
        <form class="row" name="pagamento" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_ITENS']->value;?>
">
            <input type="hidden" name="cod_pedido" value="<?php echo $_smarty_tpl->tpl_vars['REF']->value;?>
">  
            <button class="btn btn-success "> Fazer Pagamento Agora</button>
                
            
            
        </form>        
              
         </p>
        
        
    <br> 
    </div>
    <div class="col-md-3">
        
    </div>
    
    
    
    
    
</section>

</div>
<?php }
}
