<?php
    
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $email = $_POST["telefone"];
    //$para = $_POST["para"];
    $para = "jrot1973@hotmail.com";
    
    
    $msg = "Enviado por: ".$nome. " - ". $email ." ".$telefone. "\nMensagem: " .$_POST["msg"];
    
    $assunto = "Mensagem enviada através do site - ".$_POST["assunto"];
    
    
    //PADRÃO DE EMAIL ---- CTRL C + CTRL V
    $cabecalho = "Mime-Version: 1.0";
    $cabecalho = $cabecalho . "\n Content-Type: text/html;charset:utf-8";
    $cabecalho .=  "\nFrom: ".$nome."<".$email.">";
        
        
    if(mail($para,$assunto,$msg,$cabecalho)){
        echo "Mensagem enviada com sucesso!";
    }else{
        echo "Erro ao enviar";
    }
	
?>
<br />
<br />
 	
  <br />
 <span style="padding-left:150px">  <img src="images/img_obrigado_pelo_contato.jpg"  /> </span><br /><br /><br />
 
<span style="padding-left:600px"> <a href="http://www.grinvert.com.br"><font size="+2">Voltar</a></font> </span>
