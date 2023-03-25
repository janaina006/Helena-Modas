<?php
/* Smarty version 4.1.1, created on 2023-03-24 17:05:17
  from 'C:\wamp\www\loja\view\clientes_itens.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_641e027d358b37_72484863',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '790c60dd875731272a22f37bd592e0e2d9e0af00' => 
    array (
      0 => 'C:\\wamp\\www\\loja\\view\\clientes_itens.tpl',
      1 => 1679688313,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641e027d358b37_72484863 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
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
                            
                            <td><b>Data:</b> <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_data'];?>
</td>
                            
                            <td><b>Hora:</b> <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_hora'];?>
</td>
                            
                            <td><b>Ref:</b> <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_ref'];?>
</td>
                            
                            <td><b>Status:</b> <?php echo $_smarty_tpl->tpl_vars['PAGO']->value;?>
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
                    
                                            <td class=""> <b>Frete:</b> R$<?php echo Sistema::MoedaBR($_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_frete_valor']);?>
</td><p>
                                                
                    
                                            <td class=""> <b>Total:</b> R$<?php echo Sistema::MoedaBR($_smarty_tpl->tpl_vars['TOTAL']->value);?>
</td>
                    
                                            <td class=""> <b>Valor Final:</b> R$<?php echo Sistema::MoedaBR($_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_frete_valor']+$_smarty_tpl->tpl_vars['TOTAL']->value);?>
</td>

                                          <!-- <td><b>ID Rastreo:</b>  <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_frete_rastreo'];?>
</td> -->

                    
                                        </tr>  
                    
                                    </table>
                                    <br>
                                    
                                <center>
                                  
                                    <?php if ($_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_pag_status'] == 'Pago') {?> 
                                    <form name="rastreo" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_RASTREO']->value;?>
">
                                        <input type="hidden" name="rastreo" id="rastreo" value="<?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_frete_rastreo'];?>
">
                                        <td style="width: 10%"><button class="button-17" role="button"><i class="glyphicon glyphicon-barcode"></i>  Rastrear Pedido</button></td>
                                    </form>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_pag_status'] == 'Aguardando Pagamento') {?> 
                                    <div style="background-color: rgb(186, 247, 170);">

                                        <p >(Seu pagamento pode levar alguns dias para mudar de status, aguarde!)</p>
                                    </div>
                                    <?php }?>
                                
                                   <br>
                                   <br>
                                   <br>

                               
     
                </div>
                
             <?php if ($_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_pag_status'] == 'Realize o pagamento') {?> 
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
            <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PS_SCRIPT']->value;?>
"><?php echo '</script'; ?>
>
      
            <img class="i1" src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/images/logo-pagseguro.png"  alt=""> 
            <?php }?>
    
           
      
      
      
            </div>
          </div>
        </div>
    
    </section>


       
      </section>
    
      
    
    
    
     
    
    
    
    
    
<?php }
}
