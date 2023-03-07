<script src="https://code.jquery.com/jquery-1.9.1.js"></script>
<script src="path-para-seu-script"></script>
<script>
    $(document).ready(function(){    
    
       // validar frete
         $('#buscar_frete').click(function(){  
            
          var CEP_CLIENTE = $('#cep_frete').val();
          var PESO_FRETE = $('#peso_frete').val();
           
            if (CEP_CLIENTE.length !== 8 ) {
            alert('Digite seu CEP corretamente, 8 dígitos e sem traço ou ponto');  
             $('#frete').addClass(' text-center text-danger');
             $('#frete').html('<b>Digite seu CEP corretamente, 8 dígitos e sem traço ou ponto</b>');
            $('#cep_frete').focus();
            } else {
         
           
            $('#frete').html('<img class="loa " src="view/images/loader.gif"> <b></b>');
            $('#frete').addClass(' text-center text-danger');
          
            // carrego o combo com os bairros
           
            $('#frete').load('controller/frete.php?cepcliente='+CEP_CLIENTE+'&pesofrete='+PESO_FRETE);
     
     } // fim do IF digitei o CEP
          
     
        }); // fim do change
        
       
    } ); // fim do ready
    
    </script>
    

    
    <style>

      .x{
        display: none;
      }

@media (max-width:990px){
  .frete{
   margin-top: -100px;
  }

  
  .c {

 
display: flex;
  justify-content: center;
  align-items: center;

}

.loa{
  width: 35%;
  display: block;
  margin: 0 auto;
}
}

@media (max-width:769px){
  .table{
    font-size: 13px;
  }

  .nome{
    display: none;
  }

  .td{
    display: none;

  }

  .b {
  width: 30px;
  height: 25px;
  padding: 0;
}

.tex{
    font-size: 15px;

  }

  .im{
    width: 70px;
   height: 65px;
  }

  .c {

 
display: flex;
  justify-content: center;
  align-items: center;

}

.loa{
  width: 50%;
  display: block;
        margin: 0 auto;
}



}

@media (max-width:550px){

  .x{
    display: block;
  }
  .q{
    display: none;
  }

  .b {
  width: 32px;
  height: 20px;
  padding: 0;
}

.tex{
    font-size: 14px;

  }

  .im{
    width: 70px;
   height: 65px;
  }


  

  

}
@media (max-width:400px){

  .x{
    display: block;
  }
  .q{
    display: none;
  }

  .b {
  width: 20px;
  height: 22px;
  padding-right: 25px;
}

.table{
    font-size: 12px;
  }

  .tex{
    font-size: 12px;

  }

  .im{
    width: 60px;
   height: 55px;
  }

  section h7{
    font-size: 55px;
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
    </style>
    
  

        <section class="h-100 h-custom" style="background-color: #d2c9ff;">
          
          <div class="container py-5 h-100">
              <h4 class="tex nav1 text-center card-title"> Carrinho > Confirmar Pedido > Finalizar Pedido > Realizar Pagamento </h4>
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12">
                  <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                    <div class="card-body p-0">
                      <div class="row g-0">
                        <div class="col-lg-8">
                          <div class="p-5">
                            <div class="d-flex justify-content-between align-items-center mb-5">

                              <h6 class="mb-0 text-muted">{$TOTAL_ITENS} items </h6>
                              <div class="">
                                <form name="limpar" method="post" action="{$PAG_CARRINHO_ALTERAR}">
                                    <input type="hidden" name="acao" value="limpar">
                                    <input type="hidden" name="pro_id" value="1">
                
                                    <button class="btn btn-danger btn-block"> <i class="glyphicon glyphicon-trash"></i> Limpar Tudo</button>
                                </div>
                              
                              
                            </div>
                            <h7  class="obs" style="font-size: 13px;" >OBS: Você pode aumentar a quantidade do produto desejado adicionando novamente ele ao carrinho!</h7>
                            <hr class="my-4">
                            <center>
                              <table class="table " style="width: 100%">
                                  
                                  <tr class="">
                                      <td class="td"></td>
                                      <td><b>Item</b></td>
                                          <td><b>Valor</b></td>
                                          <td class="q"><b>Quantidade</b></td>
                                          <td class="x"><b>X</b></td>
                                          <td><b>Total</b></td>
                                      </tr>
                                     
                                  </tr>
                                  
                                  {foreach from=$PRO item=P}
                                  <tr>
                                      
                                      <td>  <a class="card-title" href="{$PRO_INFO}/{$P.pro_id}">
                                        <!-- Product image-->
                                        <img class="im card-img-top" src="{$P.pro_img}" alt="..." /></td>
                                      <td class="nome">  {$P.pro_nome} </td>
                                      <td>  {$P.pro_valor} </td>
                                      <td> {$P.pro_qtd}  </td>
                                      <td>  {$P.pro_subTotal} </td>
                                      <td> 
                                        <form name="carrinho_dell" method="post" action="{$PAG_CARRINHO_ALTERAR}">
                                          
                                            <input type="hidden" name="pro_id" value="{$P.pro_id}">    
                                            <input type="hidden" name="acao" value="del">    
                                            
                                            <button  class="b btn btn-danger btn-sm"> <span class="material-symbols-outlined">
                                              close
                                              </span> </button>
                                            
                                        </form>
                                    </td>
                                    
                                  </tr>
                                  
                                  {/foreach}
                                  
                                  
                              </table>
                              </center>
                              

                             <br>
                             <br>

                         

                            <div class="total">
                                <h4>
                                    
                                   TOTAL : R$ {$TOTAL}
                                </h4>
                                <br>
                            </div>
                            
                                <br>
                            
            
                            </form>
                          </div>
                        </div>
                        <div class="frete col-lg-4 bg-grey">
                          <div class="p-5">
                            <h3 class="">Selecionar Frete</h3>
                            <hr class="my-4">
          
                          
          
                            
          
                            <h5 class="text-uppercase mb-3">Cep</h5>
          
                            <div class="mb-5">
                              <div class="form-outline">
                                 <input type="hidden" name="peso_frete" id="peso_frete" value="{$PESO}" class="form-control " readonly>
                                 <input type="text" name="cep_frete" class="form-control" id="cep_frete" value="" placeholder="Digite seu cep" >
                                 <input type="hidden" name="frete_valor" id="frete_valor" value="0">
                                 <input type="hidden" name="frete_tipo" id="frete_tipo" value="0">
                              </div>
                              <br>
                              <div class="col-md-4">
                                <!-- botão frete -->
         
                                <button class="btn btn-dark btn-block" id="buscar_frete"> <i class="glyphicon glyphicon-send"></i> Calcular </button>
                            
                                
                                
                            </div>          
                                    
                            </div>
          
                            <hr class="my-4">
          
                            <div class="col-md-4 text-right">
               
                            </div>
                            
                        
          
                            </form>
                          
                            <form name="pedido_confirmar" id="pedido_confirmar" method="post" action="{$PAG_CONFIRMAR}">
        
                            <span id="frete"></span>
                            <div class="c">
                              
                            
                            <button class="button-85" type="submit">  <i class="glyphicon glyphicon-ok"></i> Confirmar Pedido </button>
                          </div>
        
        
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
    
   
    
          
    
           