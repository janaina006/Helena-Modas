<style>
.table{

  background-color:#DFD5FB;
}

.pagina {
    display: flex;
    justify-content: center;
    align-items: center;
    list-style: none;
    margin: 0;
    padding: 0;
  }

.table- {
  letter-spacing: 1px;
  margin-left: 0.2rem;
  padding-top: 18px;
  padding-left: 0.2rem;


}

@media (max-width:600px){

    .table-{
      font-size: 12px;


    }

    .pagina {
    display: flex;
    justify-content: center;
    align-items: center;
    list-style: none;
    margin: 0;
    padding: 0;
   
  }

}


</style>

<br>

<section class="table- " id="pedidos" >
    
    <h4 class="text-center">Meus Pedidos</h4>
<br>
    
    <center>
      {if $PEDIDOS_QUANTIDADES > 0}
      <table class="">

        <thead class="table ">
          <tr>
            <th>Data</th>
            <th>Hora</th>
            <th>Detalhes</th>
          </tr>
        </thead>
        <tbody>
        {foreach from=$PEDIDOS item=P}

          <tr>
            
         
            <td>
              <p class="fw-normal mb-1">{$P.ped_data}</p>
            </td>

            <td>
              <p class="fw-normal mb-1">{$P.ped_hora}</p>
            </td>
            
         
              
         
            
            <form name="itens" method="post" action="{$PAG_ITENS}">
            
              <input type="hidden" name="cod_pedido" id="cod_pedido" value="{$P.ped_cod}">
              <td style="width: 10%"><button class="btn btn-default"><span class="material-symbols-outlined">
                visibility
                </span> </button></td>
        
         </form>  
          </tr>
          <tr>
            
            
            {/foreach}
            
        </tbody>
        
      </table>
      {else}
      Você não tem nenhum pedido ainda!!
      {/if}
      </center>
    
  
</section>
<hr>


   <!-- paginaçao inferior -->
   <section id="pagincao" class="pagina">
    <center>
        {$PAGINAS}
    </center>
</section>
   <br>   
   <br>   