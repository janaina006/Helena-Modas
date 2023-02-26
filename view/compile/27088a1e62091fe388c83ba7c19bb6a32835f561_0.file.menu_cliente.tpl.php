<?php
/* Smarty version 4.1.1, created on 2023-02-25 18:31:56
  from 'C:\wamp\www\lojaeditando\view\menu_cliente.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_63fa7e4c267488_61393891',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27088a1e62091fe388c83ba7c19bb6a32835f561' => 
    array (
      0 => 'C:\\wamp\\www\\lojaeditando\\view\\menu_cliente.tpl',
      1 => 1676244903,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63fa7e4c267488_61393891 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
.pagination{
    list-style: none;
    display: flex;
    justify-content: space-around;
    text-decoration: none;
    color: #fff;
    left:504px;
}
/* CSS */
.button-17 {

  align-items: center;
  text-decoration:none;
  appearance: none;
  background-color: #C1B3FB;
  border-radius: 50px;
  border-style: none;
  box-shadow: rgba(0, 0, 0, .2) 0 3px 5px -1px,rgba(0, 0, 0, .14) 0 6px 10px 0,rgba(0, 0, 0, .12) 0 1px 18px 0;
  box-sizing: border-box;
  color: #3c4043;
  cursor: pointer;
  display: inline-flex;
  fill: currentcolor;
  font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
  color: #fff;
  font-size: 14px;
  font-weight: 500;
  height: 48px;
  justify-content: center;
  letter-spacing: .15px;
  line-height: normal;
  max-width: 100%;
  overflow: visible;
  padding: 2px 24px;
  position: relative;
  text-align: center;
  text-transform: none;
  transition: box-shadow 280ms cubic-bezier(.4, 0, .2, 1),opacity 15ms linear 30ms,transform 270ms cubic-bezier(0, 0, .2, 1) 0ms;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  width: auto;
  will-change: transform,opacity;
  z-index: 0;
  
}

.button-17:hover {
  background: #F6F9FE;
  color: #222;
  
}

.button-17:active {
  box-shadow: 0 4px 4px 0 rgb(60 64 67 / 30%), 0 8px 12px 6px rgb(60 64 67 / 15%);
  outline: none;
}

.button-17:focus {
  outline: none;
  border: 2px solid #4285f4;
}

.button-17:not(:disabled) {
  box-shadow: rgba(60, 64, 67, .3) 0 1px 3px 0, rgba(60, 64, 67, .15) 0 4px 8px 3px;
}

.button-17:not(:disabled):hover {
  box-shadow: rgba(60, 64, 67, .3) 0 2px 3px 0, rgba(60, 64, 67, .15) 0 6px 10px 4px;
}

.button-17:not(:disabled):focus {
  box-shadow: rgba(60, 64, 67, .3) 0 1px 3px 0, rgba(60, 64, 67, .15) 0 4px 8px 3px;
}

.button-17:not(:disabled):active {
  box-shadow: rgba(60, 64, 67, .3) 0 4px 4px 0, rgba(60, 64, 67, .15) 0 8px 12px 6px;
}

.button-17:disabled {
  box-shadow: rgba(60, 64, 67, .3) 0 1px 3px 0, rgba(60, 64, 67, .15) 0 4px 8px 3px;
}

.menu2{
    list-style: none;
    text-decoration: none;
    display: grid;
    align-items: center;
    background: #fff;
    height: 100%;
    width: 100%;
    grid-template-columns: repeat(auto-fit, minmax(100px, 5fr));
    grid-gap: 20px;
    margin: auto;
    align-items: center;
    
}

@media (max-width:1480px){
    .menu2{
        grid-template-columns: 200px 200px 200px 200px 200px;
        
        

}

.container-{
        width: 60%;
            }
        }
@media (max-width:1200px){
    .menu2{
        grid-template-columns: 150px 150px 150px  150px;
        

}

.container-{
        width: 90%;
            }


        }
@media (max-width:930px){
    .menu2{
        grid-template-columns: 150px 150px 150px;

}

    .container-{
        width: 90%;
            }
 }
@media (max-width:600px){
    .menu2{
        grid-template-columns: 150px 150px ;

}

    .container-{
        width: 90%;
            }

          h4{
            font-size: 19px;
          }
 }
@media (max-width:350px){
    .menu2{
        grid-template-columns: 200px  ;

}

    .container-{
        width: 90%;
            }

            h4{
            font-size: 15px;
          }
 }

</style>
<br>

<h4 class="text text-center"> Olá <b><?php echo $_smarty_tpl->tpl_vars['USER']->value;?>
</b>! O que deseja fazer agora?</h4> 
<br>
<br>

<section >


    <div class="pagination menu2 ">
        
        
        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CLIENTE_PEDIDOS']->value;?>
" class="button-17" role="button"><i class="glyphicon glyphicon-barcode"></i> Pedidos</a>
        
        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CLIENTE_DADOS']->value;?>
" class="button-17" role="button"><i class="glyphicon glyphicon-edit"></i> Meus Dados </a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO']->value;?>
" class="button-17" role="button"><i class="glyphicon glyphicon-shopping-cart"></i> Carrinho </a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CLIENTE_SENHA']->value;?>
" class="button-17" role="button"> Alterar Senha </a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_LOGOFF']->value;?>
" class="button-17" role="button"><i class="glyphicon glyphicon-log-out"></i> Sair </a>
     
        
    </div>
    
</section>


<br>
<br><?php }
}
