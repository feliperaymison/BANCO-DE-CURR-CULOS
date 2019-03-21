<?php

	$idvaga = $_POST['idvaga'];
	
	include('connection.php');

    if(isset($_POST['deletar'])){
	
	$sql = "DELETE FROM `vagas` WHERE ID_vaga ='$idvaga'";
	$aviso='Vagas deletadas com sucesso. Retornando à página de login.';
	}
	else{
	$cargo = $_POST['cargo'];
	$especialidade = $_POST['especialidade'];
	$periodo = $_POST['periodo'];
	$numerovagas = $_POST['numerovagas'];
	$cargahoraria = $_POST['cargahoraria'];
	$remuneracao = $_POST['remuneracao'];
	$area = $_POST['area'];
	$sql = "UPDATE  `vagas` set cargo='$cargo', especialidade= '$especialidade', periodo='$periodo', numerovagas= '$numerovagas', cargahoraria= '$cargahoraria',remuneracao ='$remuneracao', area='$area'  WHERE ID_vaga ='$idvaga'";
	$aviso= "Vagas atualizadas com sucesso. Retornando à página de login.";
	

	}
	if ($conn->query($sql) == TRUE) {
echo "<script type='text/javascript'>alert('$aviso');</script>";
	echo "<script>location.href='empresas.php';</script>";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	
}
	$conn->close();

	// Create connection


?>