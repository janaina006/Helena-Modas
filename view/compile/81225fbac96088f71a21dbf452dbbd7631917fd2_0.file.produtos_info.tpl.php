<?php
/* Smarty version 4.1.1, created on 2023-02-12 20:37:12
  from 'C:\wamp\www\loja\view\produtos_info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_63e9782871bf24_70095408',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81225fbac96088f71a21dbf452dbbd7631917fd2' => 
    array (
      0 => 'C:\\wamp\\www\\loja\\view\\produtos_info.tpl',
      1 => 1676244369,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e9782871bf24_70095408 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>

.t{
    font-size: 20px;
  }

@media (max-width:1000px){



  .d{
    font-size: 15px;
  }

  .wrapper img{
      width: 90px;
      height: 90px;
      margin-left: 14px;
      transition: 0.3s;
      
    }

    .wrapper{

      margin-left: -90px;


    
    }

  

 



}
@media (max-width:800px){

  .wrapper{
      width: 130%;
      height: 100%;
      object-fit: cover;
      margin-bottom: 10px;
      display: flex;
      margin-left: -90px;


    }

    .wrapper img{
      width: 100px;
      height: 90px;
      margin-left: 14px;
      transition: 0.3s;
      
    }

    .c {

 
  display: flex;
  justify-content: center;
  align-items: center;

}

.s{
    flex-direction: column;
  }

  .t{
    font-size: 20px;
  }

  .d{
    font-size: 18px;
  }
 








@media (max-width:600px){

  .wrapper{
      width: 70%;
      height: 10%;
      margin-left: 1%;
      object-fit: cover;
      margin-bottom: 10px;
      display: flex;

    }
    .wrapper img{
      width: 90px;
      height: 80px;
      margin-left: 20px;
      transition: 0.3s;
      
    }

}
@media (max-width:500px){

  .wrapper{
      width: 60%;
      height: 10%;
      margin-left: 3%;
      object-fit: cover;
      margin-bottom: 10px;
      display: flex;

    }

    .wrapper img{
      width: 90px;
      height: 70px;
      margin-left: 20px;
      transition: 0.3s;
      
    }



}
@media (max-width:400px){

  .wrapper{
      width: 60%;
      height: 10%;
      margin-left: 3%;
      object-fit: cover;
      margin-bottom: 10px;
      display: flex;

    }

    .wrapper img{
      width: 60px;
      height: 50px;
      margin-left: 20px;
      transition: 0.3s;
      
    }



}







}
.button-85 {
  text-decoration:none;
  padding: 0.5em 2em;
  border: none;
  outline: none;
  color: rgb(255, 255, 255);
  background:#C1B3FB;
  
;
  cursor: pointer;
  position: relative;
  z-index: 0;
  border-radius: 10px;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.button-85:before {
  content: "";
  background: linear-gradient(
    50deg,
    #C1B3FB,
    #AB4DB5,
    #9949E7,
    #8868DD,
    #C1B3FB,
    #AB4DB5,
    #9949E7,
    #8868DD
    
  );
  position: absolute;
  top: -2px;
  left: -2px;
  background-size: 400%;
  z-index: -1;
  filter: blur(5px);
  -webkit-filter: blur(5px);
  width: calc(100% + 4px);
  height: calc(100% + 4px);
  animation: glowing-button-85 20s linear infinite;
  transition: opacity 0.3s ease-in-out;
  border-radius: 10px;
}

@keyframes glowing-button-85 {
  0% {
    background-position: 0 0;
  }
  50% {
    background-position: 400% 0;
  }
  100% {
    background-position: 0 0;
  }
}

.button-85:after {
  text-decoration:none;
  z-index: -1;
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  background: transparent;
  left: 0;
  top: 0;
  border-radius: 10px;
}


@keyframes btn-anim4 {
  0% {
    bottom: -100%;
  }
  50%,100% {
    bottom: 100%;
  }
}


 

    .info{
        margin-bottom: 90px;
    }
 
   
    .text-color{
        color: #9949E7;
;
    }

    .information{
        background-color: #DFD5FB;
    }
    .information li{
        display: flex;
        justify-content: space-around ;
        padding-top: 5px;

    }



 

    .body-foto{
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;

    }

 

    #mainPhoto{
      width: 100%;
      height: 500%;
      object-fit: cover;
      margin-bottom: 10px;
    }

    .imgCarousel{
      width: 100px;
      height: 100px;
      margin-left: 20px;
      transition: 0.3s;
      
    }



    .img{
      border-radius: 10px;
      cursor: pointer;
   
    }

    





    





</style>
<body>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
    <section class="py-5  " >
       <div class="container px-4 px-lg-3 my-1 ">
           <div class="s row gx-4 gx-lg-5 align-items-center ">
               <div class="col-md-6 body">
              
                <section class="wrapper">
                  <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img_g'];?>
" id="mainPhoto">
                  <div class="image-wrapper scroll-container">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['IMAGES']->value, 'I');
$_smarty_tpl->tpl_vars['I']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['I']->value) {
$_smarty_tpl->tpl_vars['I']->do_else = false;
?>
                
                    
                    <img src="<?php echo $_smarty_tpl->tpl_vars['I']->value['img_nome'];?>
" class="imgCarousel">
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                     <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img_g'];?>
" class="imgCarousel">

                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                  </div>



                  </section>
               

                
           

            
                </div>
               <div class="col-md-6 info">
                <div class="in">

                
                   <div class="small mb-1">Ref: <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_ref'];?>
</div>
                   <h1 class="t"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
 </h1>
                   <div class="fs-5 mb-5 text-color">
                       <span>R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</span>
                   </div>
                  <div class="in2">
                 
                   <h6><b>Descrição</b></h6>
                   <p class="lead d"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_desc'];?>
</p>
                   <br>
                   <br>
                  
                   <div class="col-md-6 ">
                       <form name="carrinho" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_COMPRAR']->value;?>
">
                           <input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
                           <input type="hidden" name="acao" value="add">
                           <div class="c">

                             <button  class="button-85">Comprar</button>
                           </div>
                           </form> 
                       
                   </div>   
                    <!-- -->
                    <br>
                                     
               </br>
               </div>
           </div>
       </div>
   </section>

   
   
   
  
   

<div class="in3">

   <h4 class="text-center">Informações Adicionais</h4>
   <br>
<div class="information">

    <ul>
        <li>Peso: <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_peso'];?>
</li>
        <li>Largura: <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_largura'];?>
</li>
        <li>Altura: <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_altura'];?>
</li>
    
    </ul>
    <ul>
        <li>comprimento: <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_comprimento'];?>
</li>
        <li>Fabricante: <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_fabricante'];?>
</li>
        <li>Estoque: <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_estoque'];?>
</li>
    </ul>
</div>

<br>
<h4 class="text-center">Não se preocupe!</h4>

<div class="information">
 <ul>
     <li>Todas as peças do site são modelos prontos, não se preocupe
        se não tiver encontrado uma peça com sua numeração ou cor desejada.
     </li>
    
</ul>
<hr>
 <ul>
    <li>Faça agora a encomenda da sua peça, que sera feita especialmente com todas 
        as caracteristicas e numerações pedidas.
    </li>
    
</ul>
</div>

<div class="text-center">
    
    <a href="https://wa.me/55359997217065">
    <button  class="button-85">Encomendar</button>
    </a>
    
</div>   
<br>
<?php echo '<script'; ?>
>
  let images = Array.from(document.getElementsByClassName('imgCarousel'))
  let mainPhoto = document.getElementById("mainPhoto")
  
  function updateImage(event){
    let image = event.target
    mainPhoto.src = image.src
  }
  
  images.forEach(function(image) {
    image.addEventListener("click", updateImage)
  });
<?php echo '</script'; ?>
>
</body>
</html>

</div><?php }
}
