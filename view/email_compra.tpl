<style>
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
    
    <p class="textoinicio"> Olá {$NOME_CLIENTE} , obrigado pela sua compra em {$SITE_NOME} <br>
    <a href="{$SITE_HOME}"> {$SITE_HOME} </a>
    </p>
    
    
      <section class="row">
          <p class="minhaconta">
              Para acessar a sua conta e ter um histórico de seus pedidos acesse nosso site, e sua conta<br>
              <a  href="{$PAG_MINHA_CONTA}" > Minha conta: {$PAG_MINHA_CONTA} </a>
          
          </p>                 
                       
      </section>
    
