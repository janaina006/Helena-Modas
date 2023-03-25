<?php
/* Smarty version 4.1.1, created on 2023-03-14 13:50:08
  from 'C:\wamp\www\lojaeditando\view\clientes_itens.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6410a5c019e5b4_37792674',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aec727a9492e4229e80f3a7288c7131ae9f37b25' => 
    array (
      0 => 'C:\\wamp\\www\\lojaeditando\\view\\clientes_itens.tpl',
      1 => 1678812605,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6410a5c019e5b4_37792674 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
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
                            
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ITENS']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
                            <tr>
                                
                                <td>  <a class="card-title" href="<?php echo $_smarty_tpl->tpl_vars['PRO_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
                                    <!-- Product image-->
                                    <img class="im card-img-top" src="<?php echo $_smarty_tpl->tpl_vars['P']->value['item_img'];?>
" alt="..." /></td>
                                
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
                    </section>
                            
                            
                            <section class="" id="resumo">
                                
                    
                                <center>
                                    <table class="table  " style="text-align: center;">
                                        <tr >
                    
                                            <td class=""> <b>Frete:</b> <?php echo Sistema::MoedaBR($_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_frete_valor']);?>
</td><p>
                                                
                    
                                            <td class=""> <b>Total:</b> <?php echo Sistema::MoedaBR($_smarty_tpl->tpl_vars['TOTAL']->value);?>
</td>
                    
                                            <td class=""> <b>Valor Final:</b> <?php echo Sistema::MoedaBR($_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_frete_valor']+$_smarty_tpl->tpl_vars['TOTAL']->value);?>
</td>

                                          <td><b>ID Rastreo:</b>  <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_frete_rastreo'];?>
</td>

                    
                                        </tr>  
                    
                                    </table>
                                    <br>
                                    
                                <center>
                               
     
                </div>
                
             <?php if ($_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_pag_status'] == 'Aguardando') {?> 
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
    
                "> <h6 class="h">Pague com Pagseguro</h6></button>
    
    
                
                </div>
                
    
            
            
                </div>
            </div>
      
            <img class="i1" src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/images/logo-pagseguro.png"  alt=""> 
            <?php }?>
    
            <br>
            <br>
            <br>
                <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PS_SCRIPT']->value;?>
"><?php echo '</script'; ?>
>
                <?php echo '<script'; ?>
>var a = document.createElement("script"); a.src = "https://rastreio.ninja/w/app.js?v=" + Date.now(); document.head.appendChild(a);<?php echo '</script'; ?>
>
    
      
      
      
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
                    <b><?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_frete_rastreo'];?>
</b>
                    
                    </div></td><p>
                    

              
            </tr>  

        </table>
        <br>
        
    <center>
       
      </section>
    
      
    
    
    
     
    
    
    
    
    
<?php }
}
