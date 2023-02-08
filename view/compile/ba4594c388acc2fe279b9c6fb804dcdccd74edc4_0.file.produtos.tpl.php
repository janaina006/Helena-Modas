<?php
/* Smarty version 4.1.1, created on 2023-02-07 20:39:24
  from 'C:\wamp\www\loja\view\produtos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_63e2e12cefbdc4_13230918',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba4594c388acc2fe279b9c6fb804dcdccd74edc4' => 
    array (
      0 => 'C:\\wamp\\www\\loja\\view\\produtos.tpl',
      1 => 1675813114,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e2e12cefbdc4_13230918 (Smarty_Internal_Template $_smarty_tpl) {
?>





<?php if ($_smarty_tpl->tpl_vars['PRO_TOTAL']->value < 1) {?>
<H4 class="alert alert-danger">Nenhum produto encontrado!!</H4>
<meta http-equiv="refresh" content=1;url="<?php echo $_smarty_tpl->tpl_vars['PRODUTOS']->value;?>
">

<?php }?>


<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
            <div class="col mb-5">
                
                
                <div class="card h-100">
                    <a class="card-title" href="<?php echo $_smarty_tpl->tpl_vars['PRO_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_slug'];?>
">
                    <!-- Product image-->
                    <img class="card-img-top" src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="card-title">
                            <!-- Product name-->
                            <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>

                            <br>
                            <!-- Product price-->
                           <h6>R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</h6> 
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a  href="#"></a></div>
                    </div>
                </div>
                
            </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
</section>

   

    <!-- paginaçao inferior -->
    <section id="pagincao" class="pagination">
        <center>
            <?php echo $_smarty_tpl->tpl_vars['PAGINAS']->value;?>

        </center>
    </section>
    <br>
    <br><?php }
}
