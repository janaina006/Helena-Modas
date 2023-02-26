
<?php

class Config{

    	// INFORMÃÇÕES BÁSICAS DO SITE
	const SITE_URL = "http://localhost";
	const SITE_PASTA = "lojaeditando";
	const SITE_NOME = "Helena Modas";
	const SITE_EMAIL_ADM = "lojavirtualfreitas@gmail.com";
	const BD_LIMIT_POR_PAG = 8;
	const SITE_CEP = '13733518';


	// INFORMAÇÕES DO BANCO DE DADOS
	const BD_HOST = "localhost",
		  BD_USER = "root",
		  BD_SENHA = "",
		  BD_BANCO = "lojajanaina",
		  BD_PREFIX = "lv_";

    // //INFORMAÇÕES BÁSICAS DO SITE HOSPEDADO
    // const SITE_URL = "http://helena0-com.umbler.net";
    // const SITE_PASTA = "";
    // const SITE_NOME = "Helena Modas";
    // const SITE_EMAIL_ADM = "janaaraujo2190@gmail.com";
    // const BD_LIMIT_POR_PAG = 8;
    // const SITE_CEP = '37958970';
    


    // //INFORMAÇÕES DO BANCO DE DADOS HOSPEDADO
    // const BD_HOST = 'mysql670.umbler.com',
    //       BD_USER = "janaina2023",
    //       BD_SENHA = "janaina9021",
    //       BD_BANCO = "lojajanaina2023",
    //       BD_PREFIX = "lv_";

    //INFORMAÇÕES PARA PHP MAILLER
    const EMAIL_HOST = "smtp.gmail.com";
    const EMAIL_USER = "lojavirtualdajanaina@gmail.com";
    const EMAIL_NOME = "Contato Helena Modas";
    const EMAIL_SENHA = "tugkyscilprpmplw
    ";
    const EMAIL_PORTA = 587;
    const EMAIL_SMTPAUTH = true;
    const EMAIL_SMTPSECURE = "tls";
    const EMAIL_COPIA = "lojavirtualdajanaina@gmail.com";


    //CONSTANTES PARA O PAGSEGURO
    const PS_EMAIL  = "janaaraujo2190@gmail.com"; // email pagseguro
    const PS_TOKEN  = "a0309f1a-f967-4295-b360-72eaffb86c2847829a6b4989a3e0203dc1db259df8022ae1-9512-49b9-aa99-c293e1794284"; // token produção
    const PS_TOKEN_SBX = "7872F5D177934DC39F20078C98F3087A";  // token do sandbox
    const PS_AMBIENTE = "production"; // production   /  sandbox






          



        

}
?>