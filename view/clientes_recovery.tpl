<style>

body {
  margin:0;
  padding:0;
  font-family: sans-serif;
  background: linear-gradient(#DFD5FB, #DFD5FB);
}

.login-box {
  position: absolute;
  top: 40%;
  left: 50%;
  width: 400px;
  padding: 40px;
  transform: translate(-50%, -50%);
  background: transparent;
  box-sizing: border-box;
  box-shadow: 0 15px 25px #987FDB;
  border-radius: 10px;
}

.login-box h2 {
  margin: 0 0 30px;
  padding: 0;
  color: #fff;
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
  top:0;
  left: 0;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  pointer-events: none;
  transition: .5s;
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
    color: #fff;
    text-decoration: none;

}

.button-85 {
  text-decoration:none;
  padding: 0.3em 2em;
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

@media (max-width:420px){

  .login-box {
  position: absolute;
  top: 40%;
  left: 50%;
  width: 350px;
  padding: 30px;
  transform: translate(-50%, -50%);
  background: transparent;
  box-sizing: border-box;
  box-shadow: 0 15px 25px #987FDB;
  border-radius: 10px;
}
.c {

 
  display: flex;
    justify-content: center;
    align-items: center;

}
}
</style>


<hr>
<form  name="recuperarsenha" method="post" action="">
    
    <section class="row" id="fazerlogin">

        <div class="login-box">
          <form class="form" name="cliente_login" method="post" action="">
            <div class="form-group user-box"> 
              <label></i> </label>
              <input type="email"  class=" " name="cli_email" value="" placeholder="Digite seu email cadastrado" required autocomplete="off">        
        
          </div>
          <div class="c">

            <button type="submit" class="button-85"> Recuperar </button>
          </div>

         
        </section>

  
    
</form>

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


 
<hr>



