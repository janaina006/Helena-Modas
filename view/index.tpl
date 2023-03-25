
<!DOCTYPE html>
<html lang="pt"> 
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>{$TITULO_SITE}</title>
        <!-- Favicon-->
        <!-- <script src="{$GET_TEMA}/tema/js/script.js"></script>       -->

        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{$GET_TEMA}/tema/css/styles.css" rel="stylesheet" />
        <!-- layout da página de contatos -->
        <link href="{$GET_TEMA}/tema/contatos/contatos.css" rel="styesheet" />
        <!-- layout da da barra de navegação -->
        <link href="{$GET_TEMA}/tema/css/nav.css" rel="stylesheet" />
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
                    {if $LOGADO == true}
                    Olá  {$USER} 
                    
                        <span class="material-symbols-outlined"><a href="{$PAG_LOGOFF}">
                         logout </a>
                         </span>
                        
                   {/if} 
                  
                 </div>
                   

                
             <ul class="nav-list">
                

                <li><a class="nav-a" href="{$GET_SITE_HOME}">Início</a></li>
                <li><a class="nav-a" href="{$PAG_MINHACONTA}">Minha Conta</a></li>

                <li><a class="nav-a" href="{$PAG_CONTATO}">Contato</a></li>

            </ul>

        </div>

            <div class="form">
                
                
                
                
                <form class="carrinho" method="get" action="{$PAG_CARRINHO}">
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

         
 

         
        
     
             {php}
     
             Rotas::get_Pagina();
             //var_dump(Rotas::$pag);
             {/php}


             
        


       
        

  


      
        
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{$GET_TEMA}/tema/js/menu.js"></script>      

        <!-- Core theme JS-->
    </body>
</html>
