<?php

//check_login.php

include('../../../../databases/conexao_chat.php');

$object = new Db;

$data = array();

if($object->is_login())
{
	//---------------
	//$object = new PDO('sqlite:../../../../databases/chat.db');

	$object->query = "
	SELECT * FROM user_cpmvj 
	WHERE user_id = '".$_SESSION['user_id']."'
	";

	$result = $object->get_result();

	foreach($result as $row)
	{
		$data['user_name'] = $row['user_first_name'] . ' ' . $row['user_last_name'];
		$data['image'] = $object->base_url . '../../../../assets/images/usuarios/' . $row['user_image'];
	}
}

echo json_encode($data);


?>