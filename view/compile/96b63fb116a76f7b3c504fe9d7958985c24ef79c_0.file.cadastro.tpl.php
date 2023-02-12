<?php
/* Smarty version 4.1.1, created on 2023-02-12 11:45:48
  from 'C:\wamp\www\loja\view\cadastro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_63e8fb9cd05853_64923231',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96b63fb116a76f7b3c504fe9d7958985c24ef79c' => 
    array (
      0 => 'C:\\wamp\\www\\loja\\view\\cadastro.tpl',
      1 => 1676213147,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e8fb9cd05853_64923231 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
  body {
    margin: 10px;
    padding:0;
    font-family: sans-serif;
    background: linear-gradient(#DFD5FB, #DFD5FB);
  }
  
    @media (max-width:900px){
  
      .t{
        font-size: 15px;
      }
  
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
  <hr>
  <h3 class="text-center text">Cadastro de Cliente</h3>
  <br>
  <!--- dados do cadastro -->
  
    <form name="cadcliente" id="cadcliente" method="post" action="">
  
  <section class="row" id="cadastro">
      
    
          
          <div class="col-md-4">
              <label>Nome:</label>
              <input type="text" name="cli_nome" class="form-control" minlength="3" required>
              
              
          </div>
          
          <div class="col-md-4">
              <label>Sobrenome:</label>
              <input type="text" name="cli_sobrenome" class="form-control"  minlength="3" required>
              
              
          </div>
          
        
          <div class="col-md-3">
              <label>Data Nasc:</label>
              <input type="date" name="cli_data_nasc" class="form-control" required>
              
              
          </div>
          
        
          <div class="col-md-2">
              <label>RG:</label>
              <input placeholder="8 dígitos" type="text" name="cli_rg" class="form-control" required>
              
              
          </div>
          
        
          
          <div class="col-md-2">
              <label>CPF:</label>
              <input placeholder="11 dígitos" type="text" name="cli_cpf" class="form-control" minlength="11" maxlength="11" required>
              
              
          </div>
          
        
          
          <div class="col-md-2">
              <label>DDD:</label>
              <input type="number" name="cli_ddd" class="form-control"  min="10" max="99" required>
              
              
          </div>
          
        
          
          
          <div class="col-md-3">
              <label>Celular:</label>
              <input placeholder="9 dígitos" type="text" name="cli_celular" class="form-control" required>
              
              
          </div>
                  
          
          
          <div class="col-md-6">
              <label>Endereço:</label>
              <input type="text" name="cli_endereco" class="form-control"  minlength="3" required>
              
              
          </div>
          
          
          
          <div class="col-md-2">
              <label>Numero:</label>
              <input type="text" name="cli_numero" class="form-control" required>
              
              
          </div>
          
          
          <div class="col-md-4">
              <label>Bairro:</label>
              <input type="text" name="cli_bairro" class="form-control" minlength="3" required>
              
              
          </div>
          
          
          <div class="col-md-4">
              <label>Cidade:</label>
              <input type="text" name="cli_cidade" class="form-control" minlength="3" required>
              
              
          </div>
          
          
          <div class="col-md-2">
              <label>UF:</label>
             
              <input type="text" name="cli_uf" class="form-control" maxlength="2" minlength="2" required>
              
              
          </div>
          
          
          <div class="col-md-2">
              <label>Cep:</label>
             
              <input type="text" name="cli_cep" class="form-control" minlength="8" maxlength="8" required>
              
              
          </div>
          
          
          <div class="col-md-4">
              <label>Email:</label>
             
              <input type="email" name="cli_email" class="form-control" required>
              
              
          </div>
          
          
          
          
          
   
      
         
      
  </section>
  
        <br>
        <br>
        
        <section class=" text-center row" id="btngravar">
            
         <div class=""></div>
         
         <div class="">
            <h3 class="text-danger">ATENÇÃO</h3>
             <h6 class="alert alert-light t">(Por favor confirmar todos os dados inseridos. Eles serão muito importantes na efetuação das suas compras!!)</h6>
             <h6 class="alert alert-light t">CPF de pessoas menores de idade não serão válidas na tentativa de compras.</h6>
             <button type="submit" class="button-85"></i> Cadastrar </button>
                 
             
         </div>
         
        
         
      </section>
      
      
  </form>
  <br>
  <hr>
  
  
  
  
  
  <?php }
}
