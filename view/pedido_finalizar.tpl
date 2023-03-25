<style>

body {
    overflow: hidden;
  }

  .colun{
    margin: 0;
  }

  .x{
    display: none;
  }

  @media (max-width:1200px){
    .pag{
      width: 80%;
      height: 80%;
    }
        .im{
    width: 40%;
  height: auto;
  }
    
  }

  @media (max-width:991px){

    .pag{
      width: 60%;
      height: 60%;
    }

    .im{
    width: 40%;
  height: auto;
  }

  .infopag{
    margin-top: -65px;
  }

  }
@media (max-width:900px){

  
  .im{
    width: 50%;
  height: auto;
  }

}

@media (max-width:700px){

  .table{
    font-size: 13px;
  }

  .t3{
    font-size: 13px;
    
  }

  .im{
    width: 30%;
  height: auto;
  }

  .x{
    display: block;
  }

  .q{
    display: none;
  }

}
.nome{
    display: none;
  }
  .td{
    display: none;

  }

@media (max-width:500px){

  .table{
    font-size: 10px;
  }



  .t3{
    font-size: 10px;
    
  }

  .im{
    width: 30%;
  height: auto;
  }

}

    .table{
    
    background-color:#DFD5FB;
    }

    .c {

 
display: flex;
  justify-content: center;
  align-items: center;

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
  </style>
  


      <section class="" style="background-color: #d2c9ff;">
        
        <div class="container py-5 h-100">
            <h4 class="nav1 text-center card-title"> Finalizar Pedido</h4>
            
            <div class="row d-flex justify-content-center align-items-center h-100">
              <div class="col-12">
                <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                  <div class="card-body p-0">
                    <div class="row g-0">
                      <div class="col-lg-8">
                        <div class="p-5">
                          
                          <center>
                             
                              <table class="table"  style="width: 100%">
                                  
                                  <tr class="colun">
                                      <td></td>
                                      <td class=""> <b> Total :</b> R$ {$TOTAL}</td><p>
                  
                                          <td class=""> <b>Frete :</b> R$ {$FRETE}</td>
                  
                                          <td class=""> <b>Total com Frete :</b> R$ {$TOTAL_FRETE}</td>
                                  </tr>
                              </table>
                             
                              <br>
                              
                          <center>
                          <hr class="my-4">

                          
                          <center>
                              <table class=" " style="width: 100%">
                                  
                                <tr class="">
                                  <td class="td"></td>
        
        
                                    <td><b>Item</b></td>
                                        <td><b>Valor</b></td>
                                        <td class="x"><b>X</b></td>
                                        <td class="q"><b>Quantidade</b></td>
                                        <td><b>Total</b></td>
                                    </tr>
                                   
                                </tr>
                                  
                                  {foreach from=$PRO item=P}
                                  <tr>
                                      
                                      <td> <img class="im" src="{$P.pro_img}" alt="{$P.pro_nome}"> </td>
                                      <td class="nome">  {$P.pro_nome} </td>
                                      <td>  {$P.pro_valor} </td>
                                      <td> {$P.pro_qtd}  </td>
                                      <td>  {$P.pro_subTotal} </td>
                                  </tr>
                                  
                                  {/foreach}
                                  
                                  
                              </table>
                              </center>
                              
                              <hr class="my-4">
                              <p style="color:red ;"> (Os dados inseridos na hora do pagamento devem ser os mesmos cadastrados no site!)</p>

                            
                        

                        


                      
                          
                              <br>
                    
                           
                          
          
                          </form>
                        </div>
                      </div>
                      
                      <div class="infopag col-lg-4 bg-grey">
                        <div class="p-5">
                          <h3 class="">Formas de pagamento</h3>
                          <hr class="my-4">
        
                        
        
                          
        
                          <div class="">


                              <!-- FORMA DE PGTO AQUI -->
                              <button class="button-85" onclick="PagSeguroLightbox({
                                  code: '{$PS_COD}'
                                  }, {
                                  success : function(transactionCode) {
                                    alert('Transação efetuada - ' + transactionCode);
                                      window.location ='{$PAG_RETORNO}/{$REF}';
                                  },
                                  abort : function() {
                                     alert('Erro no processo de pagamento');
                                       window.location ='{$PAG_ERRO}/{$REF}';
                                  }
                              });     
                              
                              ">Pague com Pagseguro</button>
                              <hr>
                              <img class="pag" src="{$TEMA}/images/logo-pagseguro.png"  alt=""> 
                            
                                  
                              </div>
                              <script type="text/javascript" src="{$PS_SCRIPT}"></script>

      
                          </form>


          
                        </div>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>


        
  
 
  
        
  
         
