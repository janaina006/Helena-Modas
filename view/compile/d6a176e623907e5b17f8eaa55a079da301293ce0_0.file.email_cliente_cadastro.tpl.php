<?php
/* Smarty version 4.1.1, created on 2023-01-11 21:42:08
  from 'C:\wamp\www\loja\view\email_cliente_cadastro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_63bf5760c73bb3_80924995',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd6a176e623907e5b17f8eaa55a079da301293ce0' => 
    array (
      0 => 'C:\\wamp\\www\\loja\\view\\email_cliente_cadastro.tpl',
      1 => 1673484087,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bf5760c73bb3_80924995 (Smarty_Internal_Template $_smarty_tpl) {
?><h3>Olá <?php echo $_smarty_tpl->tpl_vars['NOME']->value;?>
 , obrigado por se cadastrar em <?php echo $_smarty_tpl->tpl_vars['SITE']->value;?>
</h3>

<p> Cadastro efetuado com sucesso,  para fazer  o login use seu email cadastrado ( <?php echo $_smarty_tpl->tpl_vars['EMAIL']->value;?>
 )
<br>
com a sua senha, sua senha neste momento é ( <?php echo $_smarty_tpl->tpl_vars['SENHA']->value;?>
 )

</h3>
<p>
    Sua senha pode ser alterada a qualquer momento pelo menu MINHA CONTA</a>
    
</p>
<p>
    Para acessar o site e sua conta basta usar este endereço <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_MINHA_CONTA']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['PAG_MINHA_CONTA']->value;?>
</a>
    
</p>



<?php }
}
