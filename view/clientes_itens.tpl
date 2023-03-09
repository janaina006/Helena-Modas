<style>
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
                            
                            <td><b>Status:</b> {$ITENS.1.ped_pag_status}</td>


                            
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
                    
                                            <td class=""> <b>Frete:</b> {Sistema::MoedaBR($ITENS.1.ped_frete_valor)}</td><p>
                                                
                    
                                            <td class=""> <b>Total:</b> {Sistema::MoedaBR($TOTAL)}</td>
                    
                                            <td class=""> <b>Valor Final:</b> {Sistema::MoedaBR($ITENS.1.ped_frete_valor+$TOTAL)}</td>

                                          <td><b>Código de Rastreo:</b>  {$ITENS.1.ped_pag_codigo}</td>

                    
                                        </tr>  
                    
                                    </table>
                                    <br>
                                    
                                <center>
                               
     
                </div>
                
             {if $ITENS.1.ped_pag_status =='Aguardando Pagamento'} 
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
      
            {/if}
    
            <img class="i1" src="{$TEMA}/images/logo-pagseguro.png"  alt=""> 
            <br>
            <br>
            <br>
                <script type="text/javascript" src="{$PS_SCRIPT}"></script>
                <script>var a = document.createElement("script"); a.src = "https://rastreio.ninja/w/app.js?v=" + Date.now(); document.head.appendChild(a);</script>
    
      
      
      
            </div>
          </div>
        </div>
    
    </section>
    <center>
        <table class="table  " style="text-align: center;">
            <tr >

                <td class=""> <div id="rastreioninja">
                    <div id="rastreio"></div>
                    <br>
                    <p>Use seu codigo a seguir: </p>
                    <b>{$ITENS.1.ped_pag_codigo}</b>
                    
                    </div></td><p>
                    

              
            </tr>  

        </table>
        <br>
        
    <center>
       
      </section>
    
      
    
    
    
     
    
    
    
    
    
