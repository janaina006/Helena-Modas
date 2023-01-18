<?php
/* Smarty version 4.1.1, created on 2023-01-11 22:58:02
  from 'C:\wamp\www\loja\view\clientes_itens.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_63bf692a1d5bd6_74730522',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '790c60dd875731272a22f37bd592e0e2d9e0af00' => 
    array (
      0 => 'C:\\wamp\\www\\loja\\view\\clientes_itens.tpl',
      1 => 1673488677,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bf692a1d5bd6_74730522 (Smarty_Internal_Template $_smarty_tpl) {
?><style>

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
             <?php if ($_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_pag_status'] == 'Aguardando Pagamento') {?> 
            </div>
            <div class="card mb-4">
                  <h6 class="text-danger">(Seu pagamento ainda não foi realizado!)</h6>
                <div class="card-body p-4">
                    <!-- botao de pagamento  -->
                <div class="col-md-4">
    
                <button class="'btn btn-danger btn-lg
                btn-block" onclick="PagSeguroLightbox({
                code: '<?php echo $_smarty_tpl->tpl_vars['PS_COD']->value;?>
'
                }, {
                success : function(transactionCode) {
                alert('Transação efetuada - ' + transactionCode);
                window.location ='<?php echo $_smarty_tpl->tpl_vars['PAG_RETORNO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['REF']->value;?>
';
                },
                abort : function() {
                alert('Erro no processo de pagamento');
                window.location ='<?php echo $_smarty_tpl->tpl_vars['PAG_ERRO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['REF']->value;?>
';
                }
                });     
    
                "> Pague com Pagseguro</button>
    
    
                
                </div>
                
    
            
            
                </div>
            </div>
      
            <?php }?>
    
            <img src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/images/logo-pagseguro.png"  alt=""> 
                <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PS_SCRIPT']->value;?>
"><?php echo '</script'; ?>
>
    
      
      
      
            </div>
          </div>
        </div>
       
      </section>
    
      
    
    
    
     
    
    
    
    
    <?php }
}
