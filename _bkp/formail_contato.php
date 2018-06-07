<?php 

/* Medida preventiva para evitar que outros domínios sejam remetente da sua mensagem. */
if (eregi('tempsite.ws$|locaweb.com.br$|hospedagemdesites.ws$|websiteseguro.com$', $_SERVER[HTTP_HOST])) {
        $emailsender='contato@allegrobuffet.com.br'; // Substitua essa linha pelo seu e-mail@seudominio
} else {
        $emailsender = "contato@allegrobuffet.com.br";
        //    Na linha acima estamos forçando que o remetente seja 'webmaster@seudominio',
        // Você pode alterar para que o remetente seja, por exemplo, 'contato@seudominio'.
}
 
/* Verifica qual éo sistema operacional do servidor para ajustar o cabeçalho de forma correta.  */
if(PATH_SEPARATOR == ";") $quebra_linha = "\r\n"; //Se for Windows
else $quebra_linha = "\n"; //Se "nÃ£o for Windows"

   // Verifica se O Campo titulo da obra tá preenchido
   $nome    = $_POST['nome'];
   $email    = $_POST['email'];
   $telefone    = $_POST['telefone'];
   $assunto   = $_POST['assunto'];
   $mensagem     = $_POST['mensagem'];
   
$to = "contato@allegrobuffet.com.br";
$from = "contato@allegrobuffet.com.br";
$subject = "Contato via site - $email";
$html = "
<B>Nome:</B> $nome<BR>
<B>Telefone:</B> $telefone<BR>
<B>E-mail:</B> $email<BR>
<B>Assunto:</B> $assunto<BR>
<B>Mensagem:</B> $mensagem<BR>
";

/* Montando o cabeÃ§alho da mensagem */
$headers = "MIME-Version: 1.1" .$quebra_linha;
$headers .= "Content-type: text/html; charset=utf-8" .$quebra_linha;
// Perceba que a linha acima contém "text/html", sem essa linha, a mensagem não chegará formatada.
$headers .= "From: " . $emailsender.$quebra_linha;
$headers .= "Cc: " . $comcopia . $quebra_linha;
$headers .= "Bcc: " . $comcopiaoculta . $quebra_linha;
$headers .= "Reply-To: " . $emailremetente . $quebra_linha;
// Note que o e-mail do remetente será usado no campo Reply-To (Responder Para)
 
/* Enviando a mensagem */

//É obrigatório o uso do parâmetro -r aqui na Locaweb:

if(!mail($to, $subject, $html, $headers ,"-r".$emailsender)){ // Se for Postfix
    $headers .= "Return-Path: " . $emailsender . $quebra_linha; // Se "não for Postfix"
    mail($to, $subject, $html, $headers );
}


//$headers = "MIME-Version: 1.0\n";
//$headers .= "Content-type: text/html; charset=iso-8859-1\n";
//$headers .= "To: ". $to . "\n";
//$headers .= "From:". $from . "\n";

//mail($to, $subject, $html, $headers);<?php */

//echo "<script>alert('Formulario enviado com sucesso.');

?>

<script language="JavaScript">
// para onde sera redirecionada quando for enviado o contato
alert("Contato enviado com sucesso");
document.location = 'contato.html';
</script>