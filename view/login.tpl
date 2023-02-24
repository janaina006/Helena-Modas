<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Login Form with floating placeholder and light button</title>
  <style>


body {

  font-family: sans-serif;
  background: linear-gradient(#DFD5FB, #DFD5FB);
}

.login-box {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 400px;
  padding: 40px;
  transform: translate(-50%, -50%);
  background: transparent;
  box-sizing: border-box;
  box-shadow: 0 15px 25px #987FDB;
  border-radius: 10px;
}

.formlo {
  flex-direction: column;


}

section{
  margin-bottom: 40%;
}

@media screen and (min-width:2000px){

  section{
  margin-bottom: 50%;
}

.login-box {
  top: 55%;
  
}



}



@media screen and (min-width:767px) and (max-width:1023px){

  section{
  margin-bottom: 90%;
}

.login-box {
  top: 40%;
  
}

}
@media screen and (max-width:767px){

section{
margin-bottom: 100%;
}

.login-box {
  top: 40%;
  
}

}
@media screen and (max-width:700px){

section{
margin-bottom: 110%;
}



}



.login-box h2 {
  margin: 0 0 30px;
  padding: 0;
  color: #666666;
  text-align: center;
}

.login-box .user-box {
  position: relative;

}

.login-box .user-box input {
  width: 100%;
  padding: 10px 0;
  font-size: 16px;
  color: #222;
  margin-bottom: 30px;
  border: none;
  border-bottom: 1px solid #fff;
  outline: none;
  background: transparent;
}
.login-box .user-box label {
  position: absolute;
  flex-direction: column;
  top:0;
  left: 0;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  pointer-events: none;
  transition: .5s;
}

.login-box .user-box input:focus ~ label,
.login-box .user-box input:valid ~ label {
  top: -20px;
  left: 0;
  color: #03e9f4;
  font-size: 12px;
}

.login-box form a {
  position: relative;
  display: center;
  color: #C1B3FB;
  font-size: 16px;
  text-decoration: none;
  text-transform: uppercase;
  transition: .5s;
  margin-top: 4px;
  letter-spacing: 4px;
  padding-left: 32%;


  
}

.login-btn{
    margin-left: 20px;
    padding-top: 50px;
    padding-left: 15px;
    color: #666666;
    text-decoration: none;

}
.login-btn:hover{
  color:#AB4DB5;

}

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


</head>
<body>
  <hr>
{if $LOGADO == true}
  
  
  
{else}

<!-- partial:index.partial.html -->
<section class="row" id="fazerlogin">

<div class="login-box">
  <h2>Login</h2>
  <form class="formlo" name="cliente_login" method="post" action="">
    
    <div class="form-group user-box"> 
      <label></i> </label>
      <input type="email"  class=" " name="txt_email" value="" placeholder="Digite seu email" required autocomplete="off">        

  </div>
  <div class="form-group user-box"> 
    <label>  </label>
    <input type="password"  class="" name="txt_senha" value="" placeholder="Digite sua senha" required>        

</div>

    <a  class="form-group" href="#">
   
      <button class="button-85"><i class="glyphicon glyphicon-log-in"></i> Entrar </button>

    </a>
    
  </form>
  <br>
  <a href="{$PAG_CADASTRO}" class="login-btn"><i class=""></i> Me Cadastrar</a>
               
                  
  <a href="{$PAG_RECOVERY}" class="login-btn"><i class=""></i> Esqueci a Senha</a>
</div>
  
{/if}
</section>
  

  <hr>
</body>
</html>
