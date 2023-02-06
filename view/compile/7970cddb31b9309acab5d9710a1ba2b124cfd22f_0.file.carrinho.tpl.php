<?php
/* Smarty version 4.1.1, created on 2023-01-26 23:02:57
  from 'C:\wamp\www\loja\view\carrinho.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_63d330d120d2e3_42401266',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7970cddb31b9309acab5d9710a1ba2b124cfd22f' => 
    array (
      0 => 'C:\\wamp\\www\\loja\\view\\carrinho.tpl',
      1 => 1674784327,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d330d120d2e3_42401266 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="https://code.jquery.com/jquery-1.9.1.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="path-para-seu-script"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
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
         
           
            $('#frete').html('<img src="view/images/loader.gif"> <b>Carregando...</b>');
            $('#frete').addClass(' text-center text-danger');
          
            // carrego o combo com os bairros
           
            $('#frete').load('controller/frete.php?cepcliente='+CEP_CLIENTE+'&pesofrete='+PESO_FRETE);
     
     } // fim do IF digitei o CEP
          
     
        }); // fim do change
        
       
    } ); // fim do ready
    
    <?php echo '</script'; ?>
>
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
    
  

        <section class="h-100 h-custom" style="background-color: #d2c9ff;">
          
          <div class="container py-5 h-100">
              <h4 class="nav1 text-center card-title"> Carrinho > Confirmar Pedido > Finalizar Pedido > Realizar Pagamento </h4>
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12">
                  <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                    <div class="card-body p-0">
                      <div class="row g-0">
                        <div class="col-lg-8">
                          <div class="p-5">
                            <div class="d-flex justify-content-between align-items-center mb-5">

                              <h6 class="mb-0 text-muted"><?php echo $_smarty_tpl->tpl_vars['TOTAL_ITENS']->value;?>
 items </h6>
                              <div class="">
                                <form name="limpar" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO_ALTERAR']->value;?>
">
                                    <input type="hidden" name="acao" value="limpar">
                                    <input type="hidden" name="pro_id" value="1">
                
                                    <button class="btn btn-danger btn-block"> <i class="glyphicon glyphicon-trash"></i> Limpar Tudo</button>
                                </div>
                              
                              
                            </div>
                            <h7  style="font-size: 13px;" >OBS: Você pode aumentar a quantidade do produto desejado adicionando novamente ele ao carrinho!</h7>
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
                                      <td> 
                                        <form name="carrinho_dell" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO_ALTERAR']->value;?>
">
                                          
                                            <input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">    
                                            <input type="hidden" name="acao" value="del">    
                                            
                                            <button class="btn btn-danger btn-sm"> <span class="material-symbols-outlined">
                                              close
                                              </span> </button>
                                            
                                        </form>
                                    </td>
                                    
                                  </tr>
                                  
                                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                  
                                  
                              </table>
                              </center>
                              

                             <br>
                             <br>

                         

                            <div class="total">
                                <h4>
                                    
                                   TOTAL : R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>

                                </h4>
                                <br>
                            </div>
                            
                                <br>
                            
            
                            </form>
                          </div>
                        </div>
                        <div class="col-lg-4 bg-grey">
                          <div class="p-5">
                            <h3 class="">Selecionar Frete</h3>
                            <hr class="my-4">
          
                          
          
                            
          
                            <h5 class="text-uppercase mb-3">Cep</h5>
          
                            <div class="mb-5">
                              <div class="form-outline">
                                 <input type="hidden" name="peso_frete" id="peso_frete" value="<?php echo $_smarty_tpl->tpl_vars['PESO']->value;?>
" class="form-control " readonly>
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
                            <form name="pedido_confirmar" id="pedido_confirmar" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_CONFIRMAR']->value;?>
">
        
                            <span id="frete"></span>
                            
                            <button class="button-85" type="submit">  <i class="glyphicon glyphicon-ok"></i> Confirmar Pedido </button>
        
        
        
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
