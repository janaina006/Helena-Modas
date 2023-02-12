<?php
/* Smarty version 4.1.1, created on 2023-02-12 11:47:27
  from 'C:\wamp\www\loja\view\cliente_senha.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_63e8fbff9dde38_03441380',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a951a20dc8cdadfff0690811e964430c205d8689' => 
    array (
      0 => 'C:\\wamp\\www\\loja\\view\\cliente_senha.tpl',
      1 => 1676213246,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e8fbff9dde38_03441380 (Smarty_Internal_Template $_smarty_tpl) {
?><style>


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

.background{
background-color:#DFD5FB;

}




</style>




<br>
<h3 class="text-center">Alteração de senha de acesso</h3>
<br>


<form class="background text-center" name="alterarsenha" method="post" action="">

<section class="text-center row">
    <div class="col-md-4 "></div>
    
    <div class="col-md-4 ">
        <label >Digite sua senha atual</label>
      
        <input  type="password" name="cli_senha_atual" id="cli_senha_atual" class="form-control" required>
      
       
        
        <label>Digite sua nova senha</label>
      
        <input type="password" name="cli_senha" id="cli_senha" class="form-control" required>
        <br>
       
        
        
        <button type="submit" class="button-85" role="button"> Alterar </button>
    </div>
   
    <div class="col-md-4">
   
        
        
    </div>
    
    
  </section>
  <hr>
  






</form>
<br>
  <br><?php }
}
