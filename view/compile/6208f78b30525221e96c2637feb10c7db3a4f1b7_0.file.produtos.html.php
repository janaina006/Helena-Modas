<?php
/* Smarty version 4.1.1, created on 2022-10-29 14:35:23
  from 'C:\wamp\www\loja\view\produtos.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_635d3a2bc60650_79619267',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6208f78b30525221e96c2637feb10c7db3a4f1b7' => 
    array (
      0 => 'C:\\wamp\\www\\loja\\view\\produtos.html',
      1 => 1667053599,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_635d3a2bc60650_79619267 (Smarty_Internal_Template $_smarty_tpl) {
?><h3>Lista de produtos</h3>
<hr>

    <section id="pagincao" class="row">
        <center>
            PAGINAS
        </center>
    </section>

    <!-- começa lista de produtos -->
    <section id="produtos" class="row">
        <ul style="list-style: nome" >


            <div class="row" id="pularlinha">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>

                <li class="col-md-4">

                    <div class="thumbnail">

                        <a href="">

                            <img src= "<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
"  
                            width="200" height="200" alt="">

                            <div class="caption">

                                <h4 class="text-center"> <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</h4>
                                    
                                    <h3 class="text-center
                                    text-danger"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</h3>

                            </div>

                        </a>
                    </div>
                </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            </div>      
        </ul>
    </section>

    <!-- paginaçao inferior -->
    <section id="pagincao" class="row">
        <center>
            PAGINAS
        </center>
    </section><?php }
}
