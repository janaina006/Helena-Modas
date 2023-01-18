<style>


</style>

<div class="erro">
  <br>  
<h3 class="text-center text-danger"> Ocorreu um problema no pagamento, ou foi cancelado</h3>
<br>
<section  class="row">
    
    
    <div class="col-md-3"></div>
   
    
    <div class="col-md-6">
        
          <p> Caso teve algum problema entre em contato conosco, informando <br>
        o código de referência:<b> {$REF} </b>
        </p> 
        
         <p> Ou pode tentar novamente o pagamento na seção "Pedidos" clicando em "Detalhes"<br>
         
        </p>  
        
         <p> Para ir a tela do pedido e efetivar o pagamento, clique no botão.</p>  
         <p>
        <br>
        <hr>
         
        <form class="row" name="pagamento" method="post" action="{$PAG_ITENS}">
            <input type="hidden" name="cod_pedido" value="{$REF}">  
            <button class="btn btn-success "> Fazer Pagamento Agora</button>
                
            
            
        </form>        
              
         </p>
        
        
    <br> 
    </div>
    <div class="col-md-3">
        
    </div>
    
    
    
    
    
</section>

</div>
