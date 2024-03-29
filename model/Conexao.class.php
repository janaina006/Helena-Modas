<?php

class Conexao extends Config{
    private $host, $user, $senha, $banco;

    protected $obj, $itens=array(), $prefix;

    public $paginacao_links, $totalpags, $limite, $inicio ;



    function __construct(){
        $this-> host = self::BD_HOST;
        $this-> user = self::BD_USER;
        $this-> senha = self::BD_SENHA;
        $this-> banco = self::BD_BANCO;
        $this-> prefix = self::BD_PREFIX;

        try {

            if($this->Conectar() == null){ 
                $this->Conectar();
            }
            
        } catch (\Throwable $th) {
            exit($th->getMessage(). '<h2> Erro ao tentar se conectar com o 
                Banco de Dados </h2>');
        }
    }

    private function Conectar(){
        $options= array(
            PDO::MYSQL_ATTR_INIT_COMMAND =>"SET NAMES utf8",
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
         );
        $link = new PDO ("mysql:host={$this->host};dbname={$this->banco}",
            $this->user,$this->senha,$options);
            return $link;
     }

     function ExecuteSQL($query, array $params = null){
        $this->obj = $this->Conectar()->prepare($query);

        // contagem dos elementos do array params
        if ($params != null):

            if(count($params) > 0):
                // varrendo o array e pegando os dados
                foreach($params as $key =>$value):

                $this->obj->bindvalue($key, $value);

                endforeach;

             endif;
         endif;

         return $this->obj->execute();
                
     }
    
     function ListarDados(){
        return $this ->obj ->fetch(PDO::FETCH_ASSOC);

     }

     function TotalDados(){
        return $this->obj ->rowCount();
     }


     function GetItens(){
        return $this->itens;
     }
    
     function PaginacaoLinks($campo, $tabela){
        $pag = new Paginacao();
        $pag->GetPaginacao($campo, $tabela);
        $this->paginacao_links = $pag->link;

        $this->totalpags = $pag->totalpags;
        $this->limite = $pag->limite;
        $this->inicio = $pag->inicio;

        $inicio = $pag->inicio;
        $limite = $pag->limite;

        if($this->totalpags>0){
            return " limit {$inicio}, {$limite}";
        }else{
            return " ";
        }
     }

     protected function Paginacao($paginas=array()){
        
		$pag = '<ul class="pagina">';
        
		$pag .= '<li class="page-item"><a class="text-color page-link" href="?p=1">Anterior</a></li>';

		foreach($paginas as $p):
			$pag .= '<li class="page-item"><a class="text-color page-link" href="?p='.$p.'">'.$p.'</a></li>';
			endforeach;

		$pag .= '<li class="page-item"><a class="text-color page-link" href="?p='. $this->totalpags .'">Próximo'.'</a></li>';

		$pag .= '</ul>';

		if($this->totalpags > 1){
		return $pag;
		}
	}

     function ShowPaginacao(){
        return $this->Paginacao($this->paginacao_links);
     }

     

}

    


?>