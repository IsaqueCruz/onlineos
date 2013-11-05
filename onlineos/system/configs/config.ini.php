<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-br">
<?php
if(!isset($_SESSION['user_id'])) { //Retirar isso depois

ob_start();//Manipula as saidas de dados
session_start();//Inicializa a sessão

}

// Resolve problemas de acentuação
header("Content-Type: text/html; charset=ISO-8859-1",true);

global $lang; //Array que armazenara as traduções do site

################## CONSTANTES ##################

define('DELICIOUS', FALSE); //Testar com o layout Delicious mude para TRUE e cole http://localhost:1234/onlineos/index.php?login=1

define('PROD', FALSE); //Verificar se o sistema está em PRODUÇÃO ou em Desenvolvimento
define('EMAIL','email_para_contato');//E-mail para envio de logs, problemas, performance, etc
define('BASE_URL','http://www.onlineos.com.br/');//Será utilizado em alguns arquivos do sistema
define('DEVELOPER_COMPANY_URL','http://www.icruz.com.br/');
define('DEVELOPER_COMPANY_NAME','ICRUZ Tecnologia &amp; Design');
define('DEVELOPER_COMPANY_SHORT_NAME','ICRUZ');
define('MYSQL','/sistema/configs/mysqli_connect.php');
define('PATH_IMG','util/images/');
define('PATH_JS','util/js/');
define('PATH_CSS','util/css/');
define('ACCESS_ADMIN', 1);
define('ACCESS_COMPANY', 2);
define('ACCESS_USER', 3);
define('ACCESS_RESPONSIBLE', 4);//Perfil Técnico

define('LANG_PT_BR', 1);

################## FIM CONSTANTES ##################

################## VARIAVEIS DE SESSAO ##################

//Nível de acesso
$_SESSION['access_level'] = ACCESS_COMPANY;//adm - Recuperar do banco mais tarde
$_SESSION['lang'] = LANG_PT_BR; //Portugues

################## FIM VARIAVEIS DE SESSAO ##################


################## DADOS DO BANCO ##################
DEFINE ('DB_USER', 'username');
DEFINE ('DB_PASSWORD', 'password');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'BLA');
################## FIM DADOS DO BANCO ##############

# Definir TIME ZONE do usuário
if($_SESSION['lang'] == LANG_PT_BR)
	date_default_timezone_set('America/Sao_Paulo');


require_once '/util/functions/error_handler.php';
set_error_handler('error_handler');

################## CRIAR FUNÇÕES QUE NÃO DEPENDAM DE CONEXÃO COM O BANCO ##################

if(empty($lang) == 1 && !PROD) {
	$lang = array(
			/*register.php*/
				   'company_user' => 'Empresa/Usuario:'				  
				  ,'corporate_name' => 'Raz&atilde;o social:'
				  ,'email' => 'E-mail:'
				  ,'confirm_email' => 'Confirmar E-mail:'
				  ,'state' => 'Estado'
				  ,'city' => 'Cidade'
				  ,'activity' => 'Ramo de Atividade'
				  ,'continue_registration' => 'Continuar o cadastro'
			/*Fim register.php*/
			/* index.php*/
				  ,'logo_alt' => 'OnlineOS'
				  ,'stay_connected' => 'manter conectado'
				  ,'password' => 'senha:'
				  ,'forgot_password' => 'esqueci a senha'
				  ,'how_it_works' => 'Como funciona'
				  ,'why_using' => 'Porque usar?'
				  ,'frequent_questions' => 'Dúvidas'				  
				  ,'contact' => 'Contato'
			/* Fim index.php*/
			/* auth.php*/
				  ,'desc_home_1' => 'Tudo que sua empresa precisa para monitorar suas ordens de serviço!'
				  ,'desc_home_2' => 'Sistema completo para empresas que buscam melhorar o relacionamento com seus clientes facilitando o atendimento e gerando melhores resultados'
				  ,'manual' => 'Tutorial'
				  ,'como_funciona_clique' => 'COMO FUNCIONA? CLIQUE AQUI!'
			/*Fim auth.php*/
			/* footer.php*/
				  ,'powered_by' => 'POWERED BY '.DEVELOPER_COMPANY_SHORT_NAME
				  ,'trademarks' => 'PHP, jQuey, HTML, HTML5, CSS, Javascript, Ajax'
			/*cabecalho.php*/
				  ,'logout' => 'Sair'
				  ,'title_edit_profile' => 'Clique para editar o seu perfil'
				  ,'edit_profile' => 'Editar perfil'
				  ,'responsible' => 'Responsável'
				  ,'company' => 'Empresa'
				  ,'user' => 'Usuário'
			      ,'legend' => 'Legenda'
			/*main.php*/
			      ,'resource' => 'recurso'
			      ,'new_order' => 'Nova Ordem'
			      ,'create' => 'Gerar'
			      ,'history' => 'Historico'
			      ,'requested' => 'solicitados'
			      ,'service' => 'Servico'
			      ,'type' => 'Tipo'
			      ,'status' => 'Status'
			      ,'shop' => 'loja'
			      ,'legend' => 'Legenda'
			      ,'legend' => 'Legenda'
			      ,'legend' => 'Legenda'
			      ,'legend' => 'Legenda'
			      ,'legend' => 'Legenda'
			      ,'legend' => 'Legenda'
			      ,'legend' => 'Legenda'
			      ,'legend' => 'Legenda'
			      ,'legend' => 'Legenda'
			      ,'legend' => 'Legenda'
			      ,'legend' => 'Legenda'
			      ,'legend' => 'Legenda'
			      ,'legend' => 'Legenda'
			      ,'legend' => 'Legenda'				  
				 );
}