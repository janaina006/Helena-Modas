<?php
/* Smarty version 4.1.1, created on 2023-02-27 15:18:45
  from 'C:\wamp\www\lojaeditando\adm\view\adm_senha.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_63fcf405a51b12_13256609',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5abd8b62d518efe1eb0ed8f5c05962062bc4c46' => 
    array (
      0 => 'C:\\wamp\\www\\lojaeditando\\adm\\view\\adm_senha.tpl',
      1 => 1675815368,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63fcf405a51b12_13256609 (Smarty_Internal_Template $_smarty_tpl) {
?><h3 class="text-center">Alteração de senha de acesso</h3>


<form name="alterarsenha" method="post" action="">
    
    <section>
        <div class="col-md-4"></div>
        
        <div class="col-md-4">
            <label>Digite sua senha atual</label>
          
            <input type="password" name="adm_senha_atual" id="adm_senha_atual" class="form-control" required>
          
           
            
            <label>Digite sua nova senha</label>
          
            <input type="password" name="adm_senha" id="adm_senha" class="form-control" required>
            <br>
           
            
            
            <button type="submit" class="btn btn-success btn-block"> Alterar </button>
        </div>
       
        <div class="col-md-4">
       
            
            
        </div>
        
        
        
    </section>

  

    
    
    
</form>



<?php }
}
