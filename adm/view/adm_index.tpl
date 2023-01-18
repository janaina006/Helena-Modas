
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

    </head>
    

    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">Painel Administrativo</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="{$GET_SITE_ADM}">Início</a></li>
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categorias</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{$PAG_ADM_PRODUTOS}">Todos</a></li>
                            <li><hr class="dropdown-divider" /></li>
                            {foreach from=$CATEGORIAS item=C}
                            <li><a class="dropdown-item" href="{$C.cate_link_adm}">{$C.cate_nome}</a></li>
                            {/foreach}


                        </ul>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="{$PAG_ADM_PRODUTOS}">Produtos</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="{$PAG_ADM_CLIENTE}">Clientes</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="{$PAG_ADM_PEDIDOS}">Pedidos</a></li>

                            </ul>
                        </li>
                     
                    </ul>
                    <div class="d-flex text-right">
                         
                            
                            {if $LOGADO == true}
                             Olá  {$USER} <a href="{$PAG_LOGOFF}" class="btn btn-outline-dark"><i class="glyphicon glyphicon-log-out"></i> Sair </a> 
                             <a href="{$PAG_SENHA}" class="btn btn_warning"><i class="glyphicon glyphicon-asterisk">
                             </i>Alterar Senha</a><br><br>
                             <h5>Ultimo Login:{$DATA} ás 1HORA
                             </p></h5>
                            {/if}
               
                        </div>
                        
        


                
                </div>
              
            </div>
        </nav>
        <!-- Header-->
   


        {php}

        Rotas::get_Pagina();
        //var_dump(Rotas::$pag);
        {/php}


        <h4 class="text-center text-danger"> Olá Administrador <b>{$USER}</b>, seja bem vindo! O que deseja fazer agora?</h4> 
        <section class="row">
            
            <div class="text-center">
                
                <a href="{$PAG_CATEGORIAS}" class="btn btn-success"><i class="glyphicon glyphicon-home"></i> Categorias</a>
                
                <a href="{$PAG_ADM_PRODUTOS}" class="btn btn-success"><i class="glyphicon glyphicon-barcode"></i> Produtos</a>
                
                <a href="{$PAG_ADM_CLIENTE}" class="btn btn-success"><i class="glyphicon glyphicon-edit"></i> Clientes </a>
                <a href="{$PAG_ADM_PEDIDOS}" class="btn btn-success"><i class="glyphicon glyphicon-shopping-cart"></i> Pedidos </a>
                <a href="{$PAG_SENHA}" class="btn btn-warning"> Alterar Senha </a>
                <a href="{$PAG_LOGOFF}" class="btn btn-danger"><i class="glyphicon glyphicon-log-out"></i> Sair </a>
             
                
            </div>
            
        </section>
        

  


        <!-- Section-->
        
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
