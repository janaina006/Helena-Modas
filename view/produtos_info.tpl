
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>

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
 
    .text{
        font-size: 30px;
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
    {foreach from=$PRO item=P}
    <section class="py-5 " >
       <div class="container px-4 px-lg-3 my-1 ">
           <div class="row gx-4 gx-lg-5 align-items-center ">
               <div class="col-md-6 body">
              
                <section class="wrapper">
                  <img src="{$P.pro_img_g}" id="mainPhoto">
                  <div class="image-wrapper scroll-container">
                    {foreach from=$IMAGES item=I}
                
                    
                    <img src="{$I.img_nome}" class="imgCarousel">
                    {/foreach}
                     <img src="{$P.pro_img_g}" class="imgCarousel">

                    {/foreach}

                  </div>



                  </section>
               

                
           

            
                </div>
               <div class="col-md-6 info">
                   <div class="small mb-1">Ref: {$P.pro_ref}</div>
                   <h1 class="display-5 fw-bolder text">{$P.pro_nome} </h1>
                   <div class="fs-5 mb-5 text-color">
                       <span>R$ {$P.pro_valor}</span>
                   </div>
                   <p class="lead">{$P.pro_desc}</p>
                   <br>
                   <br>
                  
                   <div class="col-md-6 ">
                       <form name="carrinho" method="post" action="{$PAG_COMPRAR}">
                           <input type="hidden" name="pro_id" value="{$P.pro_id}">
                           <input type="hidden" name="acao" value="add">
                       <button  class="button-85">Comprar</button>
                           </form> 
                       
                   </div>   
                    <!-- -->
                    <br>
                   {*  listagem de imagens extras  *}
                  
               </br>
               </div>
           </div>
       </div>
   </section>

   
   
   
  
   



   <h4 class="text-center">Informações Adicionais</h4>
   <br>
<div class="information">

    <ul>
        <li>Peso: {$P.pro_peso}</li>
        <li>Largura: {$P.pro_largura}</li>
        <li>Altura: {$P.pro_altura}</li>
    
    </ul>
    <ul>
        <li>comprimento: {$P.pro_comprimento}</li>
        <li>Fabricante: {$P.pro_fabricante}</li>
        <li>Estoque: {$P.pro_estoque}</li>
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
<script>
  let images = Array.from(document.getElementsByClassName('imgCarousel'))
  let mainPhoto = document.getElementById("mainPhoto")
  
  function updateImage(event){
    let image = event.target
    mainPhoto.src = image.src
  }
  
  images.forEach(function(image) {
    image.addEventListener("click", updateImage)
  });
</script>
</body>
</html>

 