<?php
/* Smarty version 4.1.1, created on 2023-03-23 22:39:32
  from 'C:\wamp\www\loja\view\pedido_finalizar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_641cff548ffce9_11990124',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d6c53a2cd1fa031ff9b205c6b93f4c0ac4a8528' => 
    array (
      0 => 'C:\\wamp\\www\\loja\\view\\pedido_finalizar.tpl',
      1 => 1679621826,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641cff548ffce9_11990124 (Smarty_Internal_Template $_smarty_tpl) {
?><style>

body {
    overflow: hidden;
  }

  .colun{
    margin: 0;
  }

  .x{
    display: none;
  }

  @media (max-width:1200px){
    .pag{
      width: 80%;
      height: 80%;
    }
        .im{
    width: 40%;
  height: auto;
  }
    
  }

  @media (max-width:991px){

    .pag{
      width: 60%;
      height: 60%;
    }

    .im{
    width: 40%;
  height: auto;
  }

  .infopag{
    margin-top: -65px;
  }

  }
@media (max-width:900px){

  
  .im{
    width: 50%;
  height: auto;
  }

}

@media (max-width:700px){

  .table{
    font-size: 13px;
  }

  .t3{
    font-size: 13px;
    
  }

  .im{
    width: 30%;
  height: auto;
  }

  .x{
    display: block;
  }

  .q{
    display: none;
  }

}
.nome{
    display: none;
  }
  .td{
    display: none;

  }

@media (max-width:500px){

  .table{
    font-size: 10px;
  }



  .t3{
    font-size: 10px;
    
  }

  .im{
    width: 30%;
  height: auto;
  }

}

    .table{
    
    background-color:#DFD5FB;
    }

    .c {

 
display: flex;
  justify-content: center;
  align-items: center;

}
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
                             
                              <table class="table"  style="width: 100%">
                                  
                                  <tr class="colun">
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
                                  <td class="td"></td>
        
        
                                    <td><b>Item</b></td>
                                        <td><b>Valor</b></td>
                                        <td class="x"><b>X</b></td>
                                        <td class="q"><b>Quantidade</b></td>
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
                                      
                                      <td> <img class="im" src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
"> </td>
                                      <td class="nome">  <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
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
                              
                              <hr class="my-4">
                              <p style="color:red ;"> (Os dados inseridos na hora do pagamento devem ser os mesmos cadastrados no site!)</p>

                            
                        

                        


                      
                          
                              <br>
                    
                           
                          
          
                          </form>
                        </div>
                      </div>
                      
                      <div class="infopag col-lg-4 bg-grey">
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
                              <img class="pag" src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/images/logo-pagseguro.png"  alt=""> 
                            
                                  
                              </div>
                              <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PS_SCRIPT']->value;?>
"><?php echo '</script'; ?>
>

      
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
