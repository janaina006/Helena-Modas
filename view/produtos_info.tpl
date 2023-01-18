
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

    .body{
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 30px 10px;
      /* transition: background 0.4s ease-in; */
    }

    input[type=radio]{
      display: none;
    }
    img{
      width: 100%;
      height: 100%;
      border-radius: 10px;
      /* object-fit: cover; */

    }

    .cardd{
      position: absolute;
      width: 50%;
      height: 100%;
      left: 0;
      right: 0;
      margin: auto;
      cursor: pointer;
      /* transition: transform 0.4s ease; */

    }

    .containerr{
      width: 100%;
      height: 100%;
      max-width: 600px;
      max-height: 600px;
      display: flex;
      /* transform-style: preserve-3d; */
      justify-content: center;
      flex-direction: column;
      align-items:center;


    }
    .cardss{
      position: relative;
      width:100%;
      height: 100%;
      margin-bottom: 20px;

    }
/* 
    #item-1:checked ~ .cards #song-3,
    #item-2checked ~ .cards #song-1,
    #item-3checked ~ .cards #song-2{
      transform: translate(-40%) scale(0.8);
      opacity:0.4;
      z-index: 0;
    }
    #item-1:checked ~ .cards #song-2,
    #item-2checked ~ .cards #song-3,
    #item-3checked ~ .cards #song-1{
      transform: translate(40%) scale(0.8);
      opacity:0.4;
      z-index: 0;
    }
    #item-1:checked ~ .cards #song-1,
    #item-2checked ~ .cards #song-2,
    #item-3checked ~ .cards #song-3{
      transform: translate(0) scale(1);
      opacity:1;
      z-index: 1;
    }
    #item-1:checked ~ .cards #song-1 img,
    #item-2checked ~ .cards #song-2 img,
    #item-3checked ~ .cards #song-3 img{
      box-shadow: 0px 0px 5px 0px ;
    } */

    html,body{
      width: 100%;
      height: 100%;
    }
    





</style>
<body>
    {foreach from=$PRO item=P}
    <section class="py-5 " >
       <div class="container px-4 px-lg-3 my-1 ">
           <div class="row gx-4 gx-lg-5 align-items-center ">
               <div class="col-md-6 body">

                <div class="containerr">

                  <input type="radio" name="slider" id="item-1" checked>
                  <input type="radio" name="slider" id="item-2">
                  <input type="radio" name="slider" id="item-3">
                  <div class="cardss">
                    <label class="cardd" for="item-1" id="song-1">
                      <img src="{$P.pro_img_g}" alt="">
                    </label>
                    <label class="cardd" for="item-1" id="song-1">
                      {foreach from=$IMAGES item=I}
                     
                      <img src="{$I.img_nome}" alt="">
                      {/foreach}

                    </label>
                  </div>
                </div>
                
           

            
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
   {/foreach}
   



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
        <li>Fabricante {$P.pro_fabricante}</li>
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
</body>
</html>

 