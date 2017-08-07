<?php
error_reporting(~E_NOTICE);
set_time_limit (0);

$address = "0.0.0.0";
$port = 5000;
$max_clients = 10;

if(!($sock = socket_create(AF_INET, SOCK_STREAM, 0)))
{
    $errorcode = socket_last_error();
    $errormsg = socket_strerror($errorcode);

    die("Couldn't create socket: [$errorcode] $errormsg \n");
}

echo "Socket created \n";

// Bind the source address
if( !socket_bind($sock, $address , 5000) )
{
    $errorcode = socket_last_error();
    $errormsg = socket_strerror($errorcode);

    die("Could not bind socket : [$errorcode] $errormsg \n");
}

echo "Socket bind OK \n";

if(!socket_listen ($sock , 10))
{
    $errorcode = socket_last_error();
    $errormsg = socket_strerror($errorcode);

    die("Could not listen on socket : [$errorcode] $errormsg \n");
}

echo "Socket listen OK \n";

echo "Waiting for incoming connections... \n";

//array of client sockets
///$client_socks = array();

//array of sockets to read
///$read = array();

//start loop to listen for incoming connections and process existing connections
while (true)
{
	//Accept incoming connection - This is a blocking call
	$client =  socket_accept($sock);

	//display information about the client who is connected
	if(socket_getpeername($client , $address , $port))
	{
		echo "Client $address : $port is now connected to us. \n";
	}

	//read data from the incoming socket
      do
      {
	      $input = socket_read($client, 1024000);

    	  $response = "OK .. $input";

	      // Display output  back to client
	      socket_write($client, $response);

      }while(true);
}
?>
