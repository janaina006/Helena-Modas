<style>

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
        
        {foreach from=$PEDIDOS item=P}
        <tr>
            
            <td >{$P.cli_nome} {$P.cli_sobrenome}</td>
            <td style="width: 10%">{$P.ped_data}</td>
            <td style="width: 10%">{$P.ped_hora}</td>
            <td style="width: 10%">{$P.ped_ref}</td>
          
            
            {if $P.ped_pag_status == 'NAO'} 
             <td style="width: 15%"><span class="label label-danger">{$P.ped_pag_status}</span></td>
            {else}
              <td style="width: 15%">{$P.ped_pag_status}</td>
            {/if}
             
    
            
            
             <td style="width: 10%">
               <!---- formulario que vai para itens do pedido ---->
                     <form name="itens" method="post" action="{$PAG_ITENS}">
                     <input type="hidden" name="cod_pedido" id="cod_pedido" value="{$P.ped_cod}">
                     <button class="btn btn-info"><i class="glyphicon glyphicon-menu-hamburger"></i> Detalhes</button>
                     </form> 
             </td>
       
        
        <td>
              
           <form name="deletar" method="post" action="">
                     <input type="hidden" name="cod_pedido" id="cod_pedido" value="{$P.ped_cod}">
                     <button class="btn btn-danger btn-sm"> <span class="material-symbols-outlined">
                        close
                        </span> </button>
           </form> 
        
        </td>
            
        </tr>
        {/foreach}
        
    </table>
      </center>
    
    
</section>
      
<section id="pagincao" class="row">
    <center>
    {$PAGINAS}
    </center>
    </section>




