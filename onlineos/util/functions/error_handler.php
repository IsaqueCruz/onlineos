<?php
/*Fun��o para manipula��o de erros
@TODO Definir mensagens e melhorar a fun��o 
*/

function error_handler($e_number,$e_message, $e_file, $e_line, $e_vars){
	
	if(!PROD){//development mode		
		print "Numero: $e_number,\n$e_message,\n arquivo:$e_file,\n linha:$e_line,\n $e_vars";
	}
	else {
		print "Um erro ocorreu";
	}

	if ($e_number != E_NOTICE)
		mail(EMAIL, 'Erros no site');
}