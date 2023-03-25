<?php
/* Smarty version 4.1.1, created on 2023-03-23 22:26:43
  from 'C:\wamp\www\loja\view\pedido_retorno_erro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_641cfc53326293_82816434',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6b55a11e267a5a3ff06b9c70f66f61364e800c0' => 
    array (
      0 => 'C:\\wamp\\www\\loja\\view\\pedido_retorno_erro.tpl',
      1 => 1679621202,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641cfc53326293_82816434 (Smarty_Internal_Template $_smarty_tpl) {
?><style>

@media (max-width:900px){

  .erro{
    font-size: 15px;
  }

  .t{
    font-size: 19px;

  }

  .bo{
    display: flex;
    justify-content: center;
    align-items: center;
    height: 50px;
  }

}

@media (max-width:768px){
  p{
    text-align: center;
  }
  .erro{
    margin: 6%;
  }

}
@media (max-width:600px){
  p{
    font-size: 13px;

  }

}
@media (max-width:530px){
   .erro{
    font-size: 13px;
    margin: 5%;

  }

  .t{
    font-size: 16px;

  }

  .bo{
    display: flex;
    justify-content: center;
    align-items: center;
    height: 50px;
  }

}
@media (max-width:420px){
   .erro{
    font-size: 11px;
    margin: 5%;
  }

  .t{
    font-size: 15px;

  }

  .bo{
    display: flex;
    justify-content: center;
    align-items: center;
    height: 50px;
  }
  

}


</style>

<div class="erro">
  <br>  
<h3 class="text-center text-danger t"> Ocorreu um problema no pagamento, ou foi cancelado</h3>
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
<p style="color:red ;"> (Os dados inseridos na hora do pagamento devem ser os mesmos cadastrados no site!)</p>

         <p>
        <br>
        <hr>
         
        <form class="row" name="pagamento" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_ITENS']->value;?>
">
          <input type="hidden" name="cod_pedido" value="<?php echo $_smarty_tpl->tpl_vars['REF']->value;?>
">  
          <div class="bo">

            <button class="btn btn-success "> Fazer Pagamento Agora</button>
          </div> 
                
            
            
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
