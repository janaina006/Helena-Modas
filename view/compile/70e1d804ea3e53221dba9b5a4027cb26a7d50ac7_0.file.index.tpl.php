<?php
/* Smarty version 4.1.1, created on 2023-01-16 13:27:09
  from 'C:\wamp\www\loja\view\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_63c57add1c16d1_56796462',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70e1d804ea3e53221dba9b5a4027cb26a7d50ac7' => 
    array (
      0 => 'C:\\wamp\\www\\loja\\view\\index.tpl',
      1 => 1673886336,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63c57add1c16d1_56796462 (Smarty_Internal_Template $_smarty_tpl) {
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
/tema/contatos/contatos.css" rel="styesheet" />
        <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/view/style.sass" rel="styesheet" />
        <!-- layout da da barra de navegação -->
        <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/css/nav.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <?php echo '</script'; ?>
>


       <style>
        .nav-a:hover{
            color:#AB4DB5;
        }



    
       </style> 

    </head>
    

    <body>

        <header class="header">
            <nav class="nav1">
            
             
                <div class="user"></div>
                    <?php if ($_smarty_tpl->tpl_vars['LOGADO']->value == true) {?>
                    Olá  <?php echo $_smarty_tpl->tpl_vars['USER']->value;?>
 
                    <div>
                        <span class="material-symbols-outlined"><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_LOGOFF']->value;?>
">
                         logout </a>
                         </span>
                        </div>
                   <?php }?> 
                   <br> 
                   

                
             <ul class="nav-list">
                

                <li><a class="nav-a" href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
">Início</a></li>
                <li><a class="nav-a" href="<?php echo $_smarty_tpl->tpl_vars['PAG_MINHACONTA']->value;?>
">Minha Conta</a></li>
                <li><a class="nav-a" href="<?php echo $_smarty_tpl->tpl_vars['PAG_CONTATO']->value;?>
">Contato</a></li>

            </ul>


            <form class="cart d-flex" method="get" action="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO']->value;?>
">
                <button class="btn" type="submit">
                    <i class="bi-cart-fill me-1" > </i>
                   Carrinho
                </button>
            </form>

            
            <form class="search" method="POST">
                <input style="color:black;"  name="txt_buscar" type="text" placeholder="Digite para buscar" required class="input">
                <button type="submit" class="button">
                </button>
            </form>

            

             </nav>
         </header>
         
 

         
        
     
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
        


       
        

  


      
        
        <!-- Footer-->
        <footer class="footer py-5 ">
         
            <div class="ul1">
               <ul >
                <li><b>Contato</b></li>
                <li>Desenvolvedora: Janaina Araujo</li>
                <li>Contato: 35 97217065</li>
               </ul>
            </div>
    
            <div class="ul2">
            <ul >
            <li><b>ENCONTRE-NOS EM</b></li>
            <li><a href="https://www.facebook.com/helenamodas00/"><i class="bi bi-facebook"></i></a></li>
            <li><a href="https://www.instagram.com/helenamodas00/"><i class="bi bi-instagram"></i></a></li>
            <li><a href="https://wa.me/55359997217065"><i class="bi bi-whatsapp"></i></a></li>
            </ul>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
        <!-- Core theme JS-->
        <?php echo '<script'; ?>
 src="js/scripts.js" ><?php echo '</script'; ?>
>
    </body>
</html>
<?php }
}
