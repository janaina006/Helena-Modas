<?php
/* Smarty version 4.1.1, created on 2023-02-25 18:33:32
  from 'C:\wamp\www\lojaeditando\view\email_compra.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_63fa7eacb0ee88_59909798',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab6e0e57054732e4a43de5a554109ea83a2043ea' => 
    array (
      0 => 'C:\\wamp\\www\\lojaeditando\\view\\email_compra.tpl',
      1 => 1675815368,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63fa7eacb0ee88_59909798 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
    .tabela {
        border-collapse: collapse;
        width: 100%;
    }
    
    .tabela th, td {
        text-align: left;
        padding: 8px;
    }
    
    .tabela tr:nth-child(odd){
      background-color: #b2b2b2;
    }
    
    .sessao{
      
      padding:20px;
    }
    
    
    .total{
      text-align:right;
    }
    
    .frete{
      text-align:right;
    }
    
    .totalfrete{
      text-align:right;
      font-size:18px;
      font-style: bold;
      color:#062a46;
    }
    
    
    
    
    
    .textoinicio{
      text-align:center;
    }
    
    .minhaconta{
      text-align:center;
    }
    
    
    </style>
    
    <p class="textoinicio"> Olá <?php echo $_smarty_tpl->tpl_vars['NOME_CLIENTE']->value;?>
 , obrigado pela sua compra em <?php echo $_smarty_tpl->tpl_vars['SITE_NOME']->value;?>
 <br>
    <a href="<?php echo $_smarty_tpl->tpl_vars['SITE_HOME']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['SITE_HOME']->value;?>
 </a>
    </p>
    
    
      <section class="row">
          <p class="minhaconta">
              Para acessar a sua conta e ter um histórico de seus pedidos acesse nosso site, e sua conta<br>
              <a  href="<?php echo $_smarty_tpl->tpl_vars['PAG_MINHA_CONTA']->value;?>
" > Minha conta: <?php echo $_smarty_tpl->tpl_vars['PAG_MINHA_CONTA']->value;?>
 </a>
          
          </p>                 
                       
      </section>
    
<?php }
}
