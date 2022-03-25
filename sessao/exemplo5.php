<?php

require_once("config.php");

//onde fica o arquivo que grava minha sessao
echo session_save_path();

echo "<br>";

session_abort();

switch(session_status()){
	case PHP_SESSION_DISABLED:
		echo "Sessões estão desabilitadas";
		break;
	case PHP_SESSION_NONE:
		echo "sessões estão habilitadas mas nenhuma existe";
		break;
	case PHP_SESSION_ACTIVE:
		echo "sessões estão habilitadas e uma existe";
		break;
	}

?>