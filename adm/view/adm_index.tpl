
<!DOCTYPE html>
<html lang="en"> 
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>{$TITULO_SITE}</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{$GET_TEMA}/tema/css/styles.css" rel="stylesheet" />
        <!-- layout da página de contatos -->
        <link href="{$GET_TEMA}/tema/contatos/contatos.css" rel="stylesheet" />
        <link href="{$GET_TEMA}/tema/css/nav.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />


        <style>
            .nav-a:hover{
                color:#AB4DB5;
            }
            body{
            overflow: initial;
        }
    
    
    
        
           </style> 


    </head>
    

    <body>
        <!-- Navigation-->
        <header class="header">
            <nav class="nav1">

                    <a class="navbar-brand" href="{$GET_SITE_ADM}">Painel Administrativo</a>



                <ul class="nav-list">
                

                    <li><a class="nav-a" href="{$PAG_ADM_PEDIDOS}">Pedidos</a></li>
                    <li><a class="nav-a" href="{$PAG_ADM_CLIENTE}">Clientes</a></li>
                    <li><a class="nav-a" href="{$PAG_SENHA}">Alterar Senha</a></li>
                    <li><a class="nav-a" href="{$PAG_ADM_PRODUTOS}">Produtos</a></li>
                    <li><a class="nav-a" href="{$PAG_CATEGORIAS}">Categorias</a></li>
    
                </ul>

            
                <div class="d-flex text-right">
                         
                            
                    {if $LOGADO == true}
                     Olá  {$USER} <span class="material-symbols-outlined"><a href="{$PAG_LOGOFF}">
                        logout </a>
                        </span>
                    
                    {/if}
       
                </div>

            

             </nav>

            

         </header>


        {php}

        Rotas::get_Pagina();
        //var_dump(Rotas::$pag);

        


        {/php}



        

  


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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js" ></script>
    </body>
</html>
