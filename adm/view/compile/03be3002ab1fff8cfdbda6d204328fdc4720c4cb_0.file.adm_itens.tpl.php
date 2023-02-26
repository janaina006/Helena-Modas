<?php
/* Smarty version 4.1.1, created on 2023-02-25 21:00:36
  from 'C:\wamp\www\lojaeditando\adm\view\adm_itens.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_63faa124d58c10_95240986',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03be3002ab1fff8cfdbda6d204328fdc4720c4cb' => 
    array (
      0 => 'C:\\wamp\\www\\lojaeditando\\adm\\view\\adm_itens.tpl',
      1 => 1677369618,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63faa124d58c10_95240986 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
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
                        
                        <td><b>Data:</b> <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_data'];?>
</td>
                        
                        <td><b>Hora:</b> <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_hora'];?>
</td>
                        
                        <td><b>Ref:</b> <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_ref'];?>
</td>
                        
                        <td><b>Status:</b> <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_pag_status'];?>
</td>
                        
                    </tr>  
                    
                    
                </table>
                </center>
                <center>
                <table class="table " style="width: 80%">
                    <tr class="">
                        
                        <td><b>Cep:</b> <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_destino'];?>
</td>
                        
                        
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
                        
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ITENS']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
                        <tr>
                            
                            <td><img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['item_img'];?>
" alt=""> </td>
                            <td> <?php echo $_smarty_tpl->tpl_vars['P']->value['item_nome'];?>
</td>
                            <td class="text-right">R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['item_valor'];?>
</td>
                            <td class="text-right"> <?php echo $_smarty_tpl->tpl_vars['P']->value['item_qtd'];?>
</td>
                            <td class="text-right">R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['item_sub'];?>
</td>
                            
                        </tr>
                        
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        
                        
                    </table>
                    </center>
                    
                    
                    
                </section>
                        
                        
                        <section class="" id="resumo">

                            
                
                            <center>
                                <table class="table " style="width: 85%">
                                    <tr>
                
                                        <td class=""> <b>Frete:</b> <?php echo Sistema::MoedaBR($_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_frete_valor']);?>
</td><p>

                                            

                
                                        <td class=""> <b>Total:</b> <?php echo Sistema::MoedaBR($_smarty_tpl->tpl_vars['TOTAL']->value);?>
</td>
                
                                        <td class=""> <b>Valor Final:</b> <?php echo Sistema::MoedaBR($_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_frete_valor']+$_smarty_tpl->tpl_vars['TOTAL']->value);?>
</td>
                
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
                                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_NOME']->value;?>
" name="cli_nome" class="form-control" minlength="3" required readonly>
                                
                                
                            </div>
                            
                            <div class="col-md-4">
                                <label>Sobrenome:</label>
                                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_SOBRENOME']->value;?>
" name="cli_sobrenome" class="form-control"  minlength="3" required readonly>
                                
                                
                            </div>
                            
                          
                            <div class="col-md-3">
                                <label>Data Nasc:</label>
                                <input type="date" value="<?php echo $_smarty_tpl->tpl_vars['CLI_DATA_NASC']->value;?>
" name="cli_data_nasc" class="form-control" required readonly>
                                
                                
                            </div>
                            
                          
                            <div class="col-md-2">
                                <label>RG:</label>
                                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_RG']->value;?>
" name="cli_rg" class="form-control" required readonly>
                                
                                
                            </div>
                            
                          
                            
                            <div class="col-md-2">
                                <label>CPF:</label>
                                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_CPF']->value;?>
" name="cli_cpf" class="form-control" minlength="11" maxlength="11" required readonly readonly>
                                
                                
                            </div>
                            
                          
                            
                            <div class="col-md-2">
                                <label>DDD:</label>
                                <input type="number" value="<?php echo $_smarty_tpl->tpl_vars['CLI_DDD']->value;?>
" name="cli_ddd" class="form-control"  min="10" max="99" required readonly>
                                
                                
                            </div>
                            
                          
                            
                         
                            
                          
                            
                            <div class="col-md-3">
                                <label>Celular:</label>
                                <input type="number" value="<?php echo $_smarty_tpl->tpl_vars['CLI_CELULAR']->value;?>
" name="cli_celular" class="form-control" required readonly>
                                
                                
                            </div>
                                    
                            
                            
                            <div class="col-md-6">
                                <label>Endereço:</label>
                                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_ENDERECO']->value;?>
" name="cli_endereco" class="form-control"  minlength="3" required readonly>
                                
                                
                            </div>
                            
                            
                            
                            <div class="col-md-2">
                                <label>Numero:</label>
                                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_NUMERO']->value;?>
" name="cli_numero" class="form-control" required readonly>
                                
                                
                            </div>
                            
                            
                            <div class="col-md-4">
                                <label>Bairro:</label>
                                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_BAIRRO']->value;?>
" name="cli_bairro" class="form-control" minlength="3" required readonly>
                                
                                
                            </div>
                            
                            
                            <div class="col-md-4">
                                <label>Cidade:</label>
                                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_CIDADE']->value;?>
" name="cli_cidade" class="form-control" minlength="3" required readonly>
                                
                                
                            </div>
                            
                            
                            <div class="col-md-2">
                                <label>UF:</label>
                               
                                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_UF']->value;?>
"name="cli_uf" class="form-control" maxlength="2" minlength="2" required readonly>
                                
                                
                            </div>
                            
                            
                            <div class="col-md-2">
                                <label>Cep:</label>
                               
                                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_CEP']->value;?>
" name="cli_cep" class="form-control" minlength="8" maxlength="8" required readonly>
                                
                                
                            </div>
                            
                            
                            <div class="col-md-4">
                                <label>Email:</label>
                               
                                <input type="email" value="<?php echo $_smarty_tpl->tpl_vars['CLI_EMAIL']->value;?>
" name="cli_email" class="form-control" required readonly>
                                
                                
                            </div>
                            
                         
                           
                        
                    </section>
                    </section>

                </form>

                <br>
                <br>
                <br>







        <?php }
}
