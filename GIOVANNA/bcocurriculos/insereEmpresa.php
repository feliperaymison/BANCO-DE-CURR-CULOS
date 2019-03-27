<?php

if(isset($_POST['NomeFicticio']) && isset($_POST['cnpj']) && isset($_POST['Endereco']) && isset($_POST['RazaoSocial']) && isset($_POST['Ramo']) && isset($_POST['Email']) && isset($_POST['Telefone']) && isset($_POST['Celular']) && isset($_POST['Senha'])) {
	
	$nomeficticio = $_POST['NomeFicticio'];
	$cnpj = $_POST['cnpj'];
	$endereco = $_POST['Endereco'];
	$razaosocial = $_POST['RazaoSocial'];
	$ramo = $_POST['Ramo'];
	$email = $_POST['Email'];
	$telefone = $_POST['Telefone'];
	$senha = $_POST['Senha'];
	$celular = $_POST['Celular'];

	include('connection.php');
	
$sql = "SELECT * FROM empresa where cnpj = '$cnpj'";
	$query = $conn->query($sql);
		 $result = $query->fetch_assoc(); 
if($conn->query($sql) == TRUE && $result['cnpj']=="" ){
	$sql = "INSERT INTO empresa VALUES (null,'$nomeficticio','$endereco','$ramo','$email','$telefone','$cnpj','$razaosocial','$senha', '$celular')";
 
	if ($conn->query($sql) === TRUE) {
	  echo "<script type='text/javascript'>alert('empresa cadastrada, sistema retornando à página inicial.');</script>";
	echo "<script>location.href='empresas.php';</script>";
	
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
else{
	   echo "<script type='text/javascript'>alert('Empresa com esse CNPJ já está cadastrada. Por favor, cadastre-se com outro CNPJ, ou entre em contato com a equipe técnico do Currículos Calama: curriculoscalama@gmail.com.');</script>";
	echo "<script>location.href='empresas.php';</script>";
	
}

}
	?>
