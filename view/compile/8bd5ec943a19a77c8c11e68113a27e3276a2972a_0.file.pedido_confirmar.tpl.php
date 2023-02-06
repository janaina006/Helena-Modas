<?php
/* Smarty version 4.1.1, created on 2023-01-26 23:39:56
  from 'C:\wamp\www\loja\view\pedido_confirmar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_63d3397c3d0de9_87725185',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8bd5ec943a19a77c8c11e68113a27e3276a2972a' => 
    array (
      0 => 'C:\\wamp\\www\\loja\\view\\pedido_confirmar.tpl',
      1 => 1674787190,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d3397c3d0de9_87725185 (Smarty_Internal_Template $_smarty_tpl) {
?><style>

    .table{
    
    background-color:#DFD5FB;
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
<br>
 <h4 class="container nav1 text-center card-title">Confirmar Pedido</h4>

<!-- botoes e opções de cima -->

    <br>

<!--  table listagem de itens -->
<section class="" >
        
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col">
         
            
           
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
                    
                    
                    
                </section>
                        
                       
        <!-- botoes de baixo e valor total -->
        <section class="" id="resumo">

                                
                    
            <center>
                <table class="table " style="width: 85%">
                    <tr>

                        <td class=""> <b> Total :</b> R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>
</td><p>
                          
                    
                            <!-- <td class=""> <b>Frete :</b> R$ <?php echo $_smarty_tpl->tpl_vars['FRETE']->value;?>
</td> -->
                            
                            <td class=""> <b>Tipo Frete :</b> <?php echo $_smarty_tpl->tpl_vars['TIPOFRETE']->value;?>
</td>

                            
                            <!-- <td class=""> <b>Total com Frete :</b> R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL_FRETE']->value;?>
</td> -->

                         
                        

                    </tr>  

                </table>
                <br>
                
            <center>
                    <br>
                    
                    <div class="col-md-4 ">

                        <form name="pedido_finalizar" id="pedido_finalizar" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_FINALIZAR']->value;?>
">
                         <button class="button-85" type="submit">  <i class="glyphicon glyphicon-ok"></i> Finalizar Pedido </button>
                     </form>
    
                </div>
    
                   
           
           <hr>
           
       </form>  
       
       </div>
       
                   
                        
  </section>
       <br>
       <br>
       <br>
       <br><?php }
}
