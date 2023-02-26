<?php
/* Smarty version 4.1.1, created on 2023-02-25 18:30:37
  from 'C:\wamp\www\lojaeditando\adm\view\adm_pedidos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_63fa7dfd3a5a03_72445239',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7de85bae6cafcc02006cac259ac3ef4c083d2e8' => 
    array (
      0 => 'C:\\wamp\\www\\lojaeditando\\adm\\view\\adm_pedidos.tpl',
      1 => 1675815368,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63fa7dfd3a5a03_72445239 (Smarty_Internal_Template $_smarty_tpl) {
?><style>

    .searchh{
        display: flex;
        justify-content: space-around;
    }


    .table{
    
    background-color:#DFD5FB;
    }

    .table- {
  letter-spacing: 1px;
  margin-left: 0.2rem;
  padding-top: 18px;
  padding-left: 0.2rem;


}
</style>


<h4 class="text-center"> Gerenciar Pedidos </h4>


<hr>
<div class="searchh">


<section class="row " id="pesquisa">

    <!---  faz  uma busca entre datas --->
    <label> Buscar entre datas</label>
    <form name="buscardata" method="post" action="">
     
        <div class="col-md-6">            
            <input type="date" name="data_ini" class="form-control" required>

        </div> 

        <div class="col-md-6"> 

            <input type="date" name="data_fim" class="form-control" required>

        </div> 
        <br>


        <div class="col-md-6"> 

            <button class="btn btn-success"> Buscar </button>

        </div> 


        <div class="col-md-3">    

        </div> 


    </form>



</section>

<br>

<section class="row ">


    <!--- faz  uma busca  por texto ---> 
    <label> Buscar por Referencia</label>
    <form name="buscarrefcod" method="post" action="">  

        <div class="col-md-9">

            <input type="text" name="txt_ref" class="form-control" required>   
        </div>
        <br>
        <div class="col-md-3">

            <button class="btn btn-success"> Buscar </button>   
        </div>
        

    </form>


</section>

</div>

<hr>

<section class="table-" id="pedidos">
    
      
    <center>
    <table class="table" style="width: 90%">
        
        <tr class="">
            <td><b>Cliente</b></td>
            <td><b>Data</b></td>
            <td><b>Hora</b></td>
            <td><b>Ref</b></td>
           
            <td><b>Status</b></td>
            <td></td>
            <td></td>
        </tr>
        
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PEDIDOS']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
        <tr>
            
            <td ><?php echo $_smarty_tpl->tpl_vars['P']->value['cli_nome'];?>
 <?php echo $_smarty_tpl->tpl_vars['P']->value['cli_sobrenome'];?>
</td>
            <td style="width: 10%"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_data'];?>
</td>
            <td style="width: 10%"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_hora'];?>
</td>
            <td style="width: 10%"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_ref'];?>
</td>
          
            
            <?php if ($_smarty_tpl->tpl_vars['P']->value['ped_pag_status'] == 'NAO') {?> 
             <td style="width: 15%"><span class="label label-danger"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_pag_status'];?>
</span></td>
            <?php } else { ?>
              <td style="width: 15%"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_pag_status'];?>
</td>
            <?php }?>
             
    
            
            
             <td style="width: 10%">
               <!---- formulario que vai para itens do pedido ---->
                     <form name="itens" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_ITENS']->value;?>
">
                     <input type="hidden" name="cod_pedido" id="cod_pedido" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['ped_cod'];?>
">
                     <button class="btn btn-info"><i class="glyphicon glyphicon-menu-hamburger"></i> Detalhes</button>
                     </form> 
             </td>
       
        
        <td>
              
           <form name="deletar" method="post" action="">
                     <input type="hidden" name="cod_pedido" id="cod_pedido" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['ped_cod'];?>
">
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
    
    
</section>
      
<section id="pagincao" class="row">
    <center>
    <?php echo $_smarty_tpl->tpl_vars['PAGINAS']->value;?>

    </center>
    </section>




<?php }
}
