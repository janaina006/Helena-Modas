<style>
     .table{
    
    background-color:#DFD5FB;
    }

    .table- {
  letter-spacing: 1px;
  margin-left: 0.2rem;
  padding-top: 18px;
  padding-left: 0.2rem;


}

.background{
    background-color:#DFD5FB;
}

</style>
<br>
<h4 class="text-center">Dados do pedido</h4>
<hr>

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
                <center>
                <table class="table " style="width: 80%">
                    <tr class="">
                        
                        <td><b>Cep:</b> {$ITENS.1.ped_destino}</td>
                        <td><form method="post" action="">
                            <label for="cod_rastreo">Código de Rastreio:</label>
                            <input type="text" id="cod_rastreo" name="cod_rastreo">
                            <button type="submit">Enviar</button>
                          </form></td>
                        <td><b>Rastreo:</b>  {$ITENS.1.ped_frete_rastreo}</td>

                        
                        
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

                                            

                
                                        <td class=""> <b>Total:</b> {Sistema::MoedaBR($TOTAL)}</td>
                
                                        <td class=""> <b>Valor Final:</b> {Sistema::MoedaBR($ITENS.1.ped_frete_valor+$TOTAL)}</td>
                
                                    </tr>  
                
                                </table>
                                <br>
                                
                            <center>
 
            </div>

            <!-- /////////////////////////////////////// -->


          

                        <!-- /////////////////////////////// -->

                        <section class="" >
        
                            <div class="container h-100">
                              <div class="row d-flex justify-content-center align-items-center h-100">
                                <div class="col">

                          <br>
                            <h4 class="text-center">Dados do Cliente</h4>
                            <hr>
                                    

                        
                     <form class="background" name="cadcliente" id="cadcliente" method="post" action="">

                        <section class="row " id="cadastro">
    
  
        
                            <div class="col-md-4">
                                <label>Nome:</label>
                                <input type="text" value="{$CLI_NOME}" name="cli_nome" class="form-control" minlength="3" required readonly>
                                
                                
                            </div>
                            
                            <div class="col-md-4">
                                <label>Sobrenome:</label>
                                <input type="text" value="{$CLI_SOBRENOME}" name="cli_sobrenome" class="form-control"  minlength="3" required readonly>
                                
                                
                            </div>
                            
                          
                            <div class="col-md-3">
                                <label>Data Nasc:</label>
                                <input type="date" value="{$CLI_DATA_NASC}" name="cli_data_nasc" class="form-control" required readonly>
                                
                                
                            </div>
                            
                          
                            <div class="col-md-2">
                                <label>RG:</label>
                                <input type="text" value="{$CLI_RG}" name="cli_rg" class="form-control" required readonly>
                                
                                
                            </div>
                            
                          
                            
                            <div class="col-md-2">
                                <label>CPF:</label>
                                <input type="text" value="{$CLI_CPF}" name="cli_cpf" class="form-control" minlength="11" maxlength="11" required readonly readonly>
                                
                                
                            </div>
                            
                          
                            
                            <div class="col-md-2">
                                <label>DDD:</label>
                                <input type="number" value="{$CLI_DDD}" name="cli_ddd" class="form-control"  min="10" max="99" required readonly>
                                
                                
                            </div>
                            
                          
                            
                         
                            
                          
                            
                            <div class="col-md-3">
                                <label>Celular:</label>
                                <input type="number" value="{$CLI_CELULAR}" name="cli_celular" class="form-control" required readonly>
                                
                                
                            </div>
                                    
                            
                            
                            <div class="col-md-6">
                                <label>Endereço:</label>
                                <input type="text" value="{$CLI_ENDERECO}" name="cli_endereco" class="form-control"  minlength="3" required readonly>
                                
                                
                            </div>
                            
                            
                            
                            <div class="col-md-2">
                                <label>Numero:</label>
                                <input type="text" value="{$CLI_NUMERO}" name="cli_numero" class="form-control" required readonly>
                                
                                
                            </div>
                            
                            
                            <div class="col-md-4">
                                <label>Bairro:</label>
                                <input type="text" value="{$CLI_BAIRRO}" name="cli_bairro" class="form-control" minlength="3" required readonly>
                                
                                
                            </div>
                            
                            
                            <div class="col-md-4">
                                <label>Cidade:</label>
                                <input type="text" value="{$CLI_CIDADE}" name="cli_cidade" class="form-control" minlength="3" required readonly>
                                
                                
                            </div>
                            
                            
                            <div class="col-md-2">
                                <label>UF:</label>
                               
                                <input type="text" value="{$CLI_UF}"name="cli_uf" class="form-control" maxlength="2" minlength="2" required readonly>
                                
                                
                            </div>
                            
                            
                            <div class="col-md-2">
                                <label>Cep:</label>
                               
                                <input type="text" value="{$CLI_CEP}" name="cli_cep" class="form-control" minlength="8" maxlength="8" required readonly>
                                
                                
                            </div>
                            
                            
                            <div class="col-md-4">
                                <label>Email:</label>
                               
                                <input type="email" value="{$CLI_EMAIL}" name="cli_email" class="form-control" required readonly>
                                
                                
                            </div>
                            
                         
                           
                        
                    </section>
                    </section>

                </form>

                <br>
                <br>
                <br>







        