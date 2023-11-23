<?php 
	$server_info = php_uname();
	$parts = explode(" ", $server_info);
	$computer_name = $parts[1];
	$computer_name = gethostname();

	$expected_name = "DESKTOP-XAVI661";//xavi
	$expected_name = "DESKTOP-";//netis
	$expected_name = "DESKTOP-";//alex

	if ($computer_name == $expected_name) {

		define('BASE_URL', 'http://localhost/ecommercecompleto');
		
		define('DB_NAME', 'tiendafinal');
		define('DB_PASSWORD', 'javier20');
	}
	if ($computer_name == $expected_name) {

		define('BASE_URL', 'http://localhost/chamorro/ecommercecompleto');
		
		define('DB_NAME', 'tiendafinal');
		define('DB_PASSWORD', '');
	}
	// carpeta
	//Zona horaria
	date_default_timezone_set('America/Lima');
	const DB_HOST = "localhost";
	// nombre base de datos
	const DB_USER = "root";
	// contraseña
	const DB_CHARSET = "utf8";

	//Para envío de correo
	const ENVIRONMENT = 1; // Local: 0, Produccón: 1;

	//Deliminadores decimal y millar Ej. 24,1989.00
	const SPD = ".";
	const SPM = ",";

	//Simbolo de moneda
	const SMONEY = "S/";
	const CURRENCY = "PEN";

	//Api PayPal
	//SANDBOX PAYPAL
	const URLPAYPAL = "https://api-m.sandbox.paypal.com";
	const IDCLIENTE = "";
	const SECRET = "";
	//LIVE PAYPAL
	//const URLPAYPAL = "https://api-m.paypal.com";
	//const IDCLIENTE = "";
	//const SECRET = "";

	//Datos envio de correo
	const NOMBRE_REMITENTE = "Tienda Virtual";
	const EMAIL_REMITENTE = "no-reply@tecomsis.com";
	const NOMBRE_EMPESA = "Tienda Virtual";
	const WEB_EMPRESA = "www.tecomsis.com";

	const DESCRIPCION = "Una tienda especializada en moda de avanzada para hombre y mujeres.";
	const SHAREDHASH = "TiendaVirtual";

	//Datos Empresa
	const DIRECCION = "Cañete";
	const TELEMPRESA = "+(056)215487";
	const WHATSAPP = "962452145";
	const EMAIL_EMPRESA = "info@tecomsis.com";
	const EMAIL_PEDIDOS = "info@tecomsis.com"; 
	const EMAIL_SUSCRIPCION = "info@tecomsis.com";
	const EMAIL_CONTACTO = "info@tecomsis.com";

	const CAT_SLIDER = "1,2,3";
	const CAT_BANNER = "4,5,6";
	const CAT_FOOTER = "1,2,3,4,5";

	//Datos para Encriptar / Desencriptar
	const KEY = 'tecomsis';
	const METHODENCRIPT = "AES-128-ECB";

	//Envío
	const COSTOENVIO = 5;

	//Módulos
	const MDASHBOARD = 1;
	const MUSUARIOS = 2;
	const MCLIENTES = 3;
	const MPRODUCTOS = 4;
	const MPEDIDOS = 5;
	const MCATEGORIAS = 6;
	const MSUSCRIPTORES = 7;
	const MDCONTACTOS = 8;
	const MDPAGINAS = 9;

	//Páginas
	const PINICIO = 1;
	const PTIENDA = 2;
	const PCARRITO = 3;
	const PNOSOTROS = 4;
	const PCONTACTO = 5;
	const PPREGUNTAS = 6;
	const PTERMINOS = 7;
	const PSUCURSALES = 8;
	const PERROR = 9;

	//Roles
	const RADMINISTRADOR = 1;
	const RSUPERVISOR = 2;
	const RCLIENTES = 3;

	const STATUS = array('Completo','Aprobado','Cancelado','Reembolsado','Pendiente','Entregado');

	//Productos por página
	const CANTPORDHOME = 8;
	const PROPORPAGINA = 4;
	const PROCATEGORIA = 4;
	const PROBUSCAR = 4;

	//REDES SOCIALES
	const FACEBOOK = "https://www.facebook.com/tecomsis";
	const INSTAGRAM = "https://www.instagram.com/tecomsis/";
	

 ?>