<style>

.background{
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





<h3 class="text text-center">Meus Dados</h3>





  <form class="background" name="cadcliente" id="cadcliente" method="post" action="">

<section class="row " id="cadastro">
    
  
        
        <div class="col-md-4">
            <label>Nome:</label>
            <input type="text" value="{$CLI_NOME}" name="cli_nome" class="form-control" minlength="3" required>
            
            
        </div>
        
        <div class="col-md-4">
            <label>Sobrenome:</label>
            <input type="text" value="{$CLI_SOBRENOME}" name="cli_sobrenome" class="form-control"  minlength="3" required>
            
            
        </div>
        
      
        <div class="col-md-3">
            <label>Data Nasc:</label>
            <input type="date" value="{$CLI_DATA_NASC}" name="cli_data_nasc" class="form-control" required>
            
            
        </div>
        
      
        <div class="col-md-2">
            <label>RG:</label>
            <input type="text" value="{$CLI_RG}" name="cli_rg" class="form-control" required>
            
            
        </div>
        
      
        
        <div class="col-md-2">
            <label>CPF:</label>
            <input type="text" value="{$CLI_CPF}" name="cli_cpf" class="form-control" minlength="11" maxlength="11" required readonly>
            
            
        </div>
        
      
        
        <div class="col-md-2">
            <label>DDD:</label>
            <input type="number" value="{$CLI_DDD}" name="cli_ddd" class="form-control"  min="10" max="99" required>
            
            
        </div>
        
      
        
     
        
      
        
        <div class="col-md-3">
            <label>Celular:</label>
            <input type="number" value="{$CLI_CELULAR}" name="cli_celular" class="form-control" required>
            
            
        </div>
                
        
        
        <div class="col-md-6">
            <label>Endereço:</label>
            <input type="text" value="{$CLI_ENDERECO}" name="cli_endereco" class="form-control"  minlength="3" required>
            
            
        </div>
        
        
        
        <div class="col-md-2">
            <label>Numero:</label>
            <input type="text" value="{$CLI_NUMERO}" name="cli_numero" class="form-control" required>
            
            
        </div>
        
        
        <div class="col-md-4">
            <label>Bairro:</label>
            <input type="text" value="{$CLI_BAIRRO}" name="cli_bairro" class="form-control" minlength="3" required>
            
            
        </div>
        
        
        <div class="col-md-4">
            <label>Cidade:</label>
            <input type="text" value="{$CLI_CIDADE}" name="cli_cidade" class="form-control" minlength="3" required>
            
            
        </div>
        
        
        <div class="col-md-2">
            <label>UF:</label>
           
            <input type="text" value="{$CLI_UF}"name="cli_uf" class="form-control" maxlength="2" minlength="2" required>
            
            
        </div>
        
        
        <div class="col-md-2">
            <label>Cep:</label>
           
            <input type="text" value="{$CLI_CEP}" name="cli_cep" class="form-control" minlength="8" maxlength="8" required>
            
            
        </div>
        
        
        <div class="col-md-4">
            <label>Email:</label>
           
            <input type="email" value="{$CLI_EMAIL}" name="cli_email" class="form-control" required>
            
            
        </div>
        
     
       
    
</section>

      <br>
      <br>
      
      <section class="row" id="btngravar">
        
          
       <div class="col-md-4"></div>
       
       <div class="col-md-4 text-center">
           <label>Digite sua senha atual por segurança<br>(<small>sua senha não será alterada</small>)</label>
           <input type="password" name="cli_senha" id="cli_senha" class="form-control" required>
           <br>
           <button class="button-85" role="button">Salvar</button>

               
           
       </div>
       
    
    
</section>
      
      
<br>
         </form>
    


<br>
<br>
<br>
<br>


