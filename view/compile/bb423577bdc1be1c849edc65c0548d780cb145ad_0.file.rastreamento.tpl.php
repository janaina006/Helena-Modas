<?php
/* Smarty version 4.1.1, created on 2023-03-22 11:30:46
  from 'C:\wamp\www\loja\view\rastreamento.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_641b11169d2788_24901632',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb423577bdc1be1c849edc65c0548d780cb145ad' => 
    array (
      0 => 'C:\\wamp\\www\\loja\\view\\rastreamento.tpl',
      1 => 1679495443,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641b11169d2788_24901632 (Smarty_Internal_Template $_smarty_tpl) {
?>



<center>

    

<hr>
    <table class="table  " style="text-align: center;">
        <tr >

            <td class=""> <div id="rastreioninja">
                <div id="rastreio"></div>
                <br>
                <p>Use seu codigo a seguir:  </p>
                <p><b><?php echo $_smarty_tpl->tpl_vars['RASTREO']->value;?>
</b></p>
                

                
                </div></td><p>
                

          
        </tr>  



    </table>
    <p style="color: red;">(Se seu códido ainda não estiver disponível, Aguarde!)</p>

    
    <br>
    <br>
    <br>
    <br>
    
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PS_SCRIPT']->value;?>
"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>var a = document.createElement("script"); a.src = "https://rastreio.ninja/w/app.js?v=" + Date.now(); document.head.appendChild(a);<?php echo '</script'; ?>
>
<center><?php }
}
