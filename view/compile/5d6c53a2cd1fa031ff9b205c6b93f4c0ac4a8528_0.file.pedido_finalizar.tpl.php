<?php
/* Smarty version 4.1.1, created on 2023-01-12 00:21:29
  from 'C:\wamp\www\loja\view\pedido_finalizar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_63bf7cb901ebf8_83310327',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d6c53a2cd1fa031ff9b205c6b93f4c0ac4a8528' => 
    array (
      0 => 'C:\\wamp\\www\\loja\\view\\pedido_finalizar.tpl',
      1 => 1673493666,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bf7cb901ebf8_83310327 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <style>
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
                               
                                <table class=" " style="width: 100%">
                                    
                                    <tr class="">
                                        <td></td>
                                        <td class=""> <b> Total :</b> R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>
</td><p>
                    
                                            <td class=""> <b>Frete :</b> R$ <?php echo $_smarty_tpl->tpl_vars['FRETE']->value;?>
</td>
                    
                                            <td class=""> <b>Total com Frete :</b> R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL_FRETE']->value;?>
</td>
                                    </tr>
                                </table>
                               
                                <br>
                                
                            <center>
                            <hr class="my-4">

                            
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
                                    <tr>
                                        
                                        <td> <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
"> </td>
                                        <td>  <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
 </td>
                                        <td>  <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
 </td>
                                        <td> <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_qtd'];?>
  </td>
                                        <td>  <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_subTotal'];?>
 </td>
                                    </tr>
                                    
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    
                                    
                                </table>
                                </center>
                              
                          

                             <br>
                             <br>


                        
                            
                                <br>
                      
                             
                            
            
                            </form>
                          </div>
                        </div>
                        
                        <div class="col-lg-4 bg-grey">
                          <div class="p-5">
                            <h3 class="">Formas de pagamento</h3>
                            <hr class="my-4">
          
                          
          
                            
          
                            <div class="">


                                <!-- FORMA DE PGTO AQUI -->
                                <button class="button-85" onclick="PagSeguroLightbox({
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
                                
                                ">Pague com Pagseguro</button>
                                <hr>
                                <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PS_SCRIPT']->value;?>
"><?php echo '</script'; ?>
>
                                <img src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/images/logo-pagseguro.png"  alt=""> 
                              
                                    
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

          
    
   
    
          
    
           <?php }
}
