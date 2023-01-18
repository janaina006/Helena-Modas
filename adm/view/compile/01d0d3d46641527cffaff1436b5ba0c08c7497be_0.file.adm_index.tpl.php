<?php
/* Smarty version 4.1.1, created on 2023-01-17 19:33:50
  from 'C:\wamp\www\loja\adm\view\adm_index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_63c7224ea65ef7_73399470',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01d0d3d46641527cffaff1436b5ba0c08c7497be' => 
    array (
      0 => 'C:\\wamp\\www\\loja\\adm\\view\\adm_index.tpl',
      1 => 1673994829,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63c7224ea65ef7_73399470 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en"> 
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title><?php echo $_smarty_tpl->tpl_vars['TITULO_SITE']->value;?>
</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/css/styles.css" rel="stylesheet" />
        <!-- layout da página de contatos -->
        <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/contatos/contatos.css" rel="stylesheet" />

    </head>
    

    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">Painel Administrativo</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_ADM']->value;?>
">Início</a></li>
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categorias</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['PAG_ADM_PRODUTOS']->value;?>
">Todos</a></li>
                            <li><hr class="dropdown-divider" /></li>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIAS']->value, 'C');
$_smarty_tpl->tpl_vars['C']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
$_smarty_tpl->tpl_vars['C']->do_else = false;
?>
                            <li><a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['C']->value['cate_link_adm'];?>
"><?php echo $_smarty_tpl->tpl_vars['C']->value['cate_nome'];?>
</a></li>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                        </ul>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="<?php echo $_smarty_tpl->tpl_vars['PAG_ADM_PRODUTOS']->value;?>
">Produtos</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="<?php echo $_smarty_tpl->tpl_vars['PAG_ADM_CLIENTE']->value;?>
">Clientes</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="<?php echo $_smarty_tpl->tpl_vars['PAG_ADM_PEDIDOS']->value;?>
">Pedidos</a></li>

                            </ul>
                        </li>
                     
                    </ul>
                    <div class="d-flex text-right">
                         
                            
                            <?php if ($_smarty_tpl->tpl_vars['LOGADO']->value == true) {?>
                             Olá  <?php echo $_smarty_tpl->tpl_vars['USER']->value;?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_LOGOFF']->value;?>
" class="btn btn-outline-dark"><i class="glyphicon glyphicon-log-out"></i> Sair </a> 
                             <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_SENHA']->value;?>
" class="btn btn_warning"><i class="glyphicon glyphicon-asterisk">
                             </i>Alterar Senha</a><br><br>
                             <h5>Ultimo Login:<?php echo $_smarty_tpl->tpl_vars['DATA']->value;?>
 ás 1HORA
                             </p></h5>
                            <?php }?>
               
                        </div>
                        
        


                
                </div>
              
            </div>
        </nav>
        <!-- Header-->
   


        <?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['php'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['php'][0] : null;
if (!is_callable($_block_plugin1)) {
throw new SmartyException('block tag \'php\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('php', array());
$_block_repeat=true;
echo $_block_plugin1(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

        Rotas::get_Pagina();
        //var_dump(Rotas::$pag);
        <?php $_block_repeat=false;
echo $_block_plugin1(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>


        <h4 class="text-center text-danger"> Olá Administrador <b><?php echo $_smarty_tpl->tpl_vars['USER']->value;?>
</b>, seja bem vindo! O que deseja fazer agora?</h4> 
        <section class="row">
            
            <div class="text-center">
                
                <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CATEGORIAS']->value;?>
" class="btn btn-success"><i class="glyphicon glyphicon-home"></i> Categorias</a>
                
                <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_ADM_PRODUTOS']->value;?>
" class="btn btn-success"><i class="glyphicon glyphicon-barcode"></i> Produtos</a>
                
                <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_ADM_CLIENTE']->value;?>
" class="btn btn-success"><i class="glyphicon glyphicon-edit"></i> Clientes </a>
                <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_ADM_PEDIDOS']->value;?>
" class="btn btn-success"><i class="glyphicon glyphicon-shopping-cart"></i> Pedidos </a>
                <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_SENHA']->value;?>
" class="btn btn-warning"> Alterar Senha </a>
                <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_LOGOFF']->value;?>
" class="btn btn-danger"><i class="glyphicon glyphicon-log-out"></i> Sair </a>
             
                
            </div>
            
        </section>
        

  


        <!-- Section-->
        
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
        <!-- Core theme JS-->
        <?php echo '<script'; ?>
 src="js/scripts.js"><?php echo '</script'; ?>
>
    </body>
</html>
<?php }
}
