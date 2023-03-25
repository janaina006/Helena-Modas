<?php
/* Smarty version 4.1.1, created on 2023-03-14 15:20:30
  from 'C:\wamp\www\lojaeditando\view\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6410baeeeb9896_49936785',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d43a765954d4c050d5ead39f70758814eb08035' => 
    array (
      0 => 'C:\\wamp\\www\\lojaeditando\\view\\index.tpl',
      1 => 1678817992,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6410baeeeb9896_49936785 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="pt"> 
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title><?php echo $_smarty_tpl->tpl_vars['TITULO_SITE']->value;?>
</title>
        <!-- Favicon-->
        <!-- <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/script.js"><?php echo '</script'; ?>
>       -->

        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/css/styles.css" rel="stylesheet" />
        <!-- layout da página de contatos -->
        <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/contatos/contatos.css" rel="styesheet" />
        <!-- layout da da barra de navegação -->
        <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/css/nav.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        


       <style>
        .nav-a:hover{
            color:#AB4DB5;
        }
        .form{
            display: flex;
            justify-content: space-around;
        }
        .form form{
            margin-left: 25px;
        }

        body{
            overflow: initial;
        }

        .pagina {
    display: flex;
    justify-content: center;
    align-items: center;
    list-style: none;
    margin: 0;
    padding: 0;
  }

     
        .carrinho h6{
            display: none;

        }

        
        .search{
        position: center;
        width: 100%;
        height: 20%;
        margin-top: 1%;
        margin-bottom: 2px;
        background-color: rgb(255, 255, 255);
        font-size: 70%;
}

        .user{
        

        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    

        }
        .menu{
            display: flex;
            align-items: center;
        }

    

     



        @media (max-width:800px){
           
            .menu
             {
                display: none;

            }

            .one,
            .two,
            .three{
                background-color: #fff;
                height: 5px;
                width: 100%;
                margin: 6px auto;

                transition-duration: 0.3s;

            }

            .menu-toggle{
                width: 40px;
                height: 30px;
                margin-right: 20px;
                margin-bottom: 10px;
            }

            .menu-section.on{
                position: absolute;
                top:0;
                left: 0;

                width: 100%;
                height: 100%;
                


                background-color: #DFD5FB;

                z-index: 10;
                display: block;
                justify-content: center;
                align-items: center;

                

            }
            .menu-section.on .search{
                display: none;
            }


            .menu-section.on
             .carrinho
           {
                display: none;

           }


           .menu-section.on .menu{
            display: block;
          

           }
           .menu-section.on .log{
            position: absolute;
            top: 15px;
            left: 50%;
            transform: translate(-50%, 0);

           }
           .menu-section.on .nav-list {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-65%, -50%);
            flex-direction: column;
            line-height: 5rem;
            text-align: center;

           }
          

          
        

            .menu-section.on .menu-toggle{
                position:absolute;
                left: 5px;
                top: 5px;


            }

            .menu-section.on .menu-toggle .one{
                transform: rotate(45deg) translate(7px, 7px);
                
            }
            .menu-section.on .menu-toggle .two{
                opacity: 0;
            }
            .menu-section.on .menu-toggle .three{
                transform: rotate(-45deg) translate(8px, -9px);

            }

       

           

            
        

           






        }
     


        
       
        

        @media (max-width:500px){
            .footer{
                flex-direction: column;
               
               
                

            }
            .footer ul {

                padding: 20px;

                }
           

           

         
          
        }

 

       

        





        

       



       

        
         



    
       </style> 

    </head>
    

    <body>
       


        <header class="header">
            <div class="menu-section">
            
            <nav class="nav1">
                    <div class="menu-toggle ">
                          <div class="one"></div>
                          <div class="two"></div>
                          <div class="three"></div>
                      </div>
                
               
                
            
                <div class="menu">
             
                <div class="log">
                    <?php if ($_smarty_tpl->tpl_vars['LOGADO']->value == true) {?>
                    Olá  <?php echo $_smarty_tpl->tpl_vars['USER']->value;?>
 
                    
                        <span class="material-symbols-outlined"><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_LOGOFF']->value;?>
">
                         logout </a>
                         </span>
                        
                   <?php }?> 
                  
                 </div>
                   

                
             <ul class="nav-list">
                

                <li><a class="nav-a" href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
">Início</a></li>
                <li><a class="nav-a" href="<?php echo $_smarty_tpl->tpl_vars['PAG_MINHACONTA']->value;?>
">Minha Conta</a></li>

                <li><a class="nav-a" href="<?php echo $_smarty_tpl->tpl_vars['PAG_CONTATO']->value;?>
">Contato</a></li>

            </ul>

        </div>

            <div class="form">
                
                
                
                
                <form class="carrinho" method="get" action="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO']->value;?>
">
                    <button class="btn" type="submit">
                        <i style="font-size: 150%" class="bi-cart-fill me-1" > </i>
                        <h6>Carrinho</h6>
                    </button>
                </form>
            <form class="search" method="POST">
                <input style="color:black;"  name="txt_buscar" type="text" placeholder="Digite para buscar" required class="input">
                <button type="submit" class="button">
                </button>
            </form>

           
            </div>


           

            

             </nav>

             
            </div>
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
            
            <div class="ul2">
                <ul >
                    <li><b>ENCONTRE-NOS EM</b></li>
                    <li><a href="https://www.facebook.com/helenamodas00/"><i class="bi bi-facebook"></i></a></li>
                    <li><a href="https://www.instagram.com/helenamodas00/"><i class="bi bi-instagram"></i></a></li>
                    <li><a href="https://wa.me/5535997217065"><i class="bi bi-whatsapp"></i></a></li>
                </ul>
            </div>
            
               <div class="ul1">
                  <ul >
                   <li><b>Contato</b></li>
                   <li>Desenvolvedora: Janaina Araujo</li>
                   <li>Contato: 35 97217065</li>
                  </ul>
               </div>
        </footer>
        <!-- Bootstrap core JS-->
        <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/menu.js"><?php echo '</script'; ?>
>      

        <!-- Core theme JS-->
    </body>
</html>
<?php }
}
