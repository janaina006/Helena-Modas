<style>
    .button-17 {

align-items: center;
text-decoration:none;
appearance: none;
background-color: #C1B3FB;
border-radius: 50px;
border-style: none;
box-shadow: rgba(0, 0, 0, .2) 0 3px 5px -1px,rgba(0, 0, 0, .14) 0 6px 10px 0,rgba(0, 0, 0, .12) 0 1px 18px 0;
box-sizing: border-box;
color: #3c4043;
cursor: pointer;
display: inline-flex;
fill: currentcolor;
font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
color: #fff;
font-size: 14px;
font-weight: 500;
height: 48px;
justify-content: center;
letter-spacing: .15px;
line-height: normal;
max-width: 100%;
overflow: visible;
padding: 2px 24px;
position: relative;
text-align: center;
text-transform: none;
transition: box-shadow 280ms cubic-bezier(.4, 0, .2, 1),opacity 15ms linear 30ms,transform 270ms cubic-bezier(0, 0, .2, 1) 0ms;
user-select: none;
-webkit-user-select: none;
touch-action: manipulation;
width: auto;
will-change: transform,opacity;
z-index: 0;

}

.button-17:hover {
background: #F6F9FE;
color: #222;

}

.button-17:active {
box-shadow: 0 4px 4px 0 rgb(60 64 67 / 30%), 0 8px 12px 6px rgb(60 64 67 / 15%);
outline: none;
}

.button-17:focus {
outline: none;
border: 2px solid #4285f4;
}

.button-17:not(:disabled) {
box-shadow: rgba(60, 64, 67, .3) 0 1px 3px 0, rgba(60, 64, 67, .15) 0 4px 8px 3px;
}

.button-17:not(:disabled):hover {
box-shadow: rgba(60, 64, 67, .3) 0 2px 3px 0, rgba(60, 64, 67, .15) 0 6px 10px 4px;
}

.button-17:not(:disabled):focus {
box-shadow: rgba(60, 64, 67, .3) 0 1px 3px 0, rgba(60, 64, 67, .15) 0 4px 8px 3px;
}

.button-17:not(:disabled):active {
box-shadow: rgba(60, 64, 67, .3) 0 4px 4px 0, rgba(60, 64, 67, .15) 0 8px 12px 6px;
}

.button-17:disabled {
box-shadow: rgba(60, 64, 67, .3) 0 1px 3px 0, rgba(60, 64, 67, .15) 0 4px 8px 3px;
}
    #rastreioninja {
	
    width: auto;
    margin: 60px auto;
	  
  }
    .table{
    
    background-color:#DFD5FB;
    align-items: center;
    }

    .im{
    width: 70px;
   height: 65px;
  }
    @media (max-width:840px){
        .table{
            font-size: 15px;
        }
        .h{
            font-size: 13px;
        }
        .i1{
            width: 30%;
             height: auto;
        }
    }
    @media (max-width:790px){
        .table{
            font-size: 13px;
        }
    }
    @media (max-width:710px){
        .table{
            font-size: 11px;
        }
    }
    @media (max-width:620px){
        .table{
            font-size: 10px;
        }
        .b1{
            width: 75px;
            height: 25px;
            font-size: 2px;
        }
      
        
    }
    @media (max-width:550px){
        .table{
            font-size: 9px;
        }
    }
    @media (max-width:522px){
        .table{
            font-size: 8px;
        }
    }
 
    </style>
    
    
    <!-- informações sobre o pedido -->
    
    <section class="" >
        
        <div class=" h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
                
             
                
                <section class="table ">
            
                    <center>
                    <table class="table " style="width: 80%">
                        <tr class="">
                            
                            <td><b>Data:</b> {$ITENS.1.ped_data}</td>
                            
                            <td><b>Hora:</b> {$ITENS.1.ped_hora}</td>
                            
                            <td><b>Ref:</b> {$ITENS.1.ped_ref}</td>
                            
                            <td><b>Status:</b> {$PAGO}</td>


                            
                        </tr>  
                        
                        
                    </table>
                    </center>
                    
              <div class="card mb-4">
                <div class=" p-4">
                   
      
                    <center>
                        <table class=" " style="width: 100%">
                            
                            <tr class="">
                                <td></td>
                                <td><b>Item</b></td>
                                <td><b>Valor </b></td>
                                <td><b>Quantidade</b></td>
                                <td><b>Total</b></td>
                            </tr>
                            </tr>
                            
                            {foreach from=$ITENS item=P}
                            <tr>
                                
                                <td>  <a class="card-title" href="{$PRO_INFO}/{$P.pro_id}">
                                    <!-- Product image-->
                                    <img class="im card-img-top" src="{$P.item_img}" alt="..." /></td>
                                
                                <td> {$P.item_nome}</td>
                                <td class="text-right">R$ {$P.item_valor}</td>
                                <td class="text-right"> {$P.item_qtd}</td>
                                <td class="text-right">R$ {$P.item_sub}</td>
                                
                            </tr>
                            
                            {/foreach}
                            
                            
                        </table>
                        </center>
                        
                        
                        
                    </section>
                    </section>
                            
                            
                            <section class="" id="resumo">
                                
                    
                                <center>
                                    <table class="table  " style="text-align: center;">
                                        <tr >
                    
                                            <td class=""> <b>Frete:</b> R${Sistema::MoedaBR($ITENS.1.ped_frete_valor)}</td><p>
                                                
                    
                                            <td class=""> <b>Total:</b> R${Sistema::MoedaBR($TOTAL)}</td>
                    
                                            <td class=""> <b>Valor Final:</b> R${Sistema::MoedaBR($ITENS.1.ped_frete_valor+$TOTAL)}</td>

                                          <!-- <td><b>ID Rastreo:</b>  {$ITENS.1.ped_frete_rastreo}</td> -->

                    
                                        </tr>  
                    
                                    </table>
                                    <br>
                                    
                                <center>
                                  
                                    {if $ITENS.1.ped_pag_status =='Pago'} 
                                    <form name="rastreo" method="post" action="{$PAG_RASTREO}">
                                        <input type="hidden" name="rastreo" id="rastreo" value="{$ITENS.1.ped_frete_rastreo}">
                                        <td style="width: 10%"><button class="button-17" role="button"><i class="glyphicon glyphicon-barcode"></i>  Rastrear Pedido</button></td>
                                    </form>
                                    {/if}
                                    {if $ITENS.1.ped_pag_status =='Aguardando Pagamento'} 
                                    <div style="background-color: rgb(186, 247, 170);">

                                        <p >(Seu pagamento pode levar alguns dias para mudar de status, aguarde!)</p>
                                    </div>
                                    {/if}
                                
                                   <br>
                                   <br>
                                   <br>

                               
     
                </div>
                
             {if $ITENS.1.ped_pag_status =='Realize o pagamento'} 
            </div>
            <section class="sec">
          
            <div class="card mb-4">
                  <h6 class="text-danger">(Seu pagamento ainda não foi realizado!)</h6>

                <div class="card-body p-4">
                    <!-- botao de pagamento  -->
                <div class="col-md-4">
                <div class="b1">
                    
                </div>
                <button class="'b1 btn btn-danger btn-lg
                btn-block" onclick="PagSeguroLightbox({
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
    
                "> <h6 class="h">Pague com Pagseguro</h6></button>
    
    
                
                </div>
                
                
    
            
            
                </div>
            </div>
            <script type="text/javascript" src="{$PS_SCRIPT}"></script>
      
            <img class="i1" src="{$TEMA}/images/logo-pagseguro.png"  alt=""> 
            {/if}
    
           
      
      
      
            </div>
          </div>
        </div>
    
    </section>


       
      </section>
    
      
    
    
    
     
    
    
    
    
    
