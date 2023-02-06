<style>

    .table{
    
    background-color:#DFD5FB;
    }
    </style>
    
    
    <!-- informações sobre o pedido -->
    
    <section class="" >
        
        <div class="container h-100">
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
                    
                </section>
              <div class="card mb-4">
                <div class=" p-4">
                   
      
                    <center>
                        <table class=" " style="width: 100%">
                            
                            <tr class="">
                                <td></td>
                                <td><b>Item</b></td>
                                <td><b>Valor Uni</b></td>
                                <td><b>Quantidade</b></td>
                                <td><b>Total</b></td>
                            </tr>
                            </tr>
                            
                            {foreach from=$ITENS item=P}
                            <tr>
                                
                                <td><img src="{$P.item_img}" alt=""> </td>
                                <td> {$P.item_nome}</td>
                                <td class="text-right">R$ {$P.item_valor}</td>
                                <td class="text-right"> {$P.item_qtd}</td>
                                <td class="text-right">R$ {$P.item_sub}</td>
                                
                            </tr>
                            
                            {/foreach}
                            
                            
                        </table>
                        </center>
                        
                        
                        
                    </section>
                            
                            
                            <section class="" id="resumo">

                                
                    
                                <center>
                                    <table class="table " style="width: 85%">
                                        <tr>
                    
                                            <td class=""> <b>Frete:</b> {Sistema::MoedaBR($ITENS.1.ped_frete_valor)}</td><p>
                                                
                                            <td class=""> <b>Tipo Frete:</b> {($ITENS.1.ped_frete_tipo)}</td><p>
                    
                                            <td class=""> <b>Total:</b> {Sistema::MoedaBR($TOTAL)}</td>
                    
                                            <td class=""> <b>Valor Final:</b> {Sistema::MoedaBR($ITENS.1.ped_frete_valor+$TOTAL)}</td>
                    
                                        </tr>  
                    
                                    </table>
                                    <br>
                                    
                                <center>
     
                </div>
             {if $ITENS.1.ped_pag_status =='Aguardando Pagamento'} 
            </div>
            <div class="card mb-4">
                  <h6 class="text-danger">(Seu pagamento ainda não foi realizado!)</h6>
                <div class="card-body p-4">
                    <!-- botao de pagamento  -->
                <div class="col-md-4">
    
                <button class="'btn btn-danger btn-lg
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
    
                "> Pague com Pagseguro</button>
    
    
                
                </div>
                
    
            
            
                </div>
            </div>
      
            {/if}
    
            <img src="{$TEMA}/images/logo-pagseguro.png"  alt=""> 
                <script type="text/javascript" src="{$PS_SCRIPT}"></script>
    
      
      
      
            </div>
          </div>
        </div>
       
      </section>
    
      
    
    
    
     
    
    
    
    
    