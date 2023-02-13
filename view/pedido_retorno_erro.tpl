<style>

@media (max-width:900px){

  .erro{
    font-size: 15px;
  }

  .t{
    font-size: 19px;

  }

  .bo{
    display: flex;
    justify-content: center;
    align-items: center;
    height: 50px;
  }

}

@media (max-width:768px){
  p{
    text-align: center;
  }
  .erro{
    margin: 6%;
  }

}
@media (max-width:600px){
  p{
    font-size: 13px;

  }

}
@media (max-width:530px){
   .erro{
    font-size: 13px;
    margin: 5%;

  }

  .t{
    font-size: 16px;

  }

  .bo{
    display: flex;
    justify-content: center;
    align-items: center;
    height: 50px;
  }

}
@media (max-width:420px){
   .erro{
    font-size: 11px;
    margin: 5%;
  }

  .t{
    font-size: 15px;

  }

  .bo{
    display: flex;
    justify-content: center;
    align-items: center;
    height: 50px;
  }
  

}


</style>

<div class="erro">
  <br>  
<h3 class="text-center text-danger t"> Ocorreu um problema no pagamento, ou foi cancelado</h3>
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
          <div class="bo">

            <button class="btn btn-success "> Fazer Pagamento Agora</button>
          </div> 
                
            
            
        </form>        
              
         </p>
        
        
    <br> 
    </div>
    <div class="col-md-3">
        
    </div>
    
    
    
    
    
</section>

</div>
