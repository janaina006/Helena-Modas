<?php
/* Smarty version 4.1.1, created on 2023-01-16 03:41:14
  from 'C:\wamp\www\loja\view\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_63c4f18a9fdb55_41736739',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e0c12ffbe6218f4a7a39ce3176d92708863251a' => 
    array (
      0 => 'C:\\wamp\\www\\loja\\view\\home.tpl',
      1 => 1673850959,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63c4f18a9fdb55_41736739 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

   
    <style>


*{
    padding: 0px;
    margin: 0;
    box-sizing: border-box;
}

.container-{
    width: 50%;
    position: absolute;
    transform: translateX(-50%, -50%);
    top:20%;
    left: 25%;
    overflow: hidden;
    transition: 2s;
   

}

.wrapper{
    width: 100%;
    display:flex;
    animation: slide 15s infinite;
}
 
@keyframes slide{

    0%{
        transform: translateX(0);
    }
    25%{
        transform: translateX(0);
    }
    30%{
        transform: translateX(-100%);
    }
    50%{
        transform: translateX(-100%);

    }
    55%{
        transform: translateX(-200%);

    }
    75%{
        transform: translateX(-200%);

    }
    80%{
        transform: translateX(-300%);

    }
    100%{
        transform: translateX(-300%);

    }
}
img{
    width: 100%;
}

/* CSS */
.button-85 {
  text-decoration:none;
  padding: 0.6em 2em;
  border: none;
  outline: none;
  color: rgb(255, 255, 255);
  background:#C1B3FB,
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
   
    #9949E7
  
    
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

.button-85:hover{
    color:#fff;
}

    </style>

</head>
<body>

    <header class="banner py-5">
        <div class="slider">
    
            <div class="container-">

                <div class="wrapper">
                    <img src="media\images\banner1" alt="">
                    <img src="media\images\banner2" alt="">
                    <img src="media\images\banner3" alt="">
                    <img src="media\images\banner4" alt="">
                </div>
               </div>
    
    
    
    
    
    
        </div>
        
        
    </header>
    
        <?php echo '<script'; ?>
 src=".tema\js\script.js" ><?php echo '</script'; ?>
>
</body>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</html>

  
  


    <h3 class="text-center">Compre por Categoria</h3>

    <br>
    <div class="categorias">

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIAS']->value, 'C');
$_smarty_tpl->tpl_vars['C']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
$_smarty_tpl->tpl_vars['C']->do_else = false;
?>
        <a class="button-85" role="button" href="<?php echo $_smarty_tpl->tpl_vars['C']->value['cate_link'];?>
"><?php echo $_smarty_tpl->tpl_vars['C']->value['cate_nome'];?>
</a>

        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>





    

<?php }
}
