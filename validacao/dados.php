<html>


<?php

	if(isset($_POST['butao'])){
	
		$requerente = $_POST['nome'];
		$matricula= $_POST['matricula'];
		$nascimento= $_POST['nascimento'];
		$naturalidade = $_POST['naturalidade'];
		$filiacao = $_POST['filiacao'];
		$curso = $_POST['curso'];
		$periodo = $_POST['periodo'];
		$turno = $_POST['turno'];
		$telefone = $_POST['telefone'];
		$email = $_POST['email'];
		$opcao= $_POST['op'];
		$especificar= $_POST['especificar'];
		$justificar=$_POST['justificar'];
				
			if(empty($matricula)){
				echo "<b>PARA QUE O FORMULARIO SEJA ENVIADO, É NECESSÁRIO DIGITAR A MATRICULA</b></br>";
			} else{
			echo "Matricula: $matricula<br/>"; }
			
			if(empty($requerente)){
				echo "<b>PARA QUE O FORMULARIO SEJA ENVIADO, É NECESSÁRIO DIGITAR O NOME COMPLETO</b></br>";
			} else{
			echo "Nome: $requerente<br/>"; }
			
			if(empty($naturalidade)){
				echo "<b>PARA QUE O FORMULARIO SEJA ENVIADO, É NECESSÁRIO DIGITAR A CIDADE NATAL</b></br>";
			} else{
			echo "Naturalidade:$naturalidade<br/>"; }
			
			if(empty($filiacao)){
				echo "<b>PARA QUE O FORMULARIO SEJA ENVIADO, É NECESSÁRIO DIGITAR O NOME DO PAI E MÃE</b></br>";
			} else{
			echo "Filiação: $filiacao<br/>"; }
			
			if(empty($curso)){
				echo "<b>PARA QUE O FORMULARIO SEJA ENVIADO, É NECESSÁRIO DIGITAR O NOME DO CURSO</b></br>";
			} else{
			echo "Curso: $curso<br/>"; }
			
			if(empty($periodo)){
				echo "<b>PARA QUE O FORMULARIO SEJA ENVIADO, É NECESSÁRIO DIGITAR O PERÍODO</b></br>";
			} else{
			echo "Período: $periodo<br/>"; }
			
			if(empty($turno)){
				echo "<b>PARA QUE O FORMULARIO SEJA ENVIADO, É NECESSÁRIO DIGITAR O TURNO</b></br>";
			} else{
			echo "Turno: $turno<br/>"; }
			
			if(empty($telefone)){
				echo "<b>PARA QUE O FORMULARIO SEJA ENVIADO, É NECESSÁRIO DIGITAR O TELEFONE</b></br>";
			} else{
			echo "Telefone: $telefone<br/>"; }
			
			if(empty($email)){
				echo "<b>PARA QUE O FORMULARIO SEJA ENVIADO, É NECESSÁRIO DIGITAR O EMAIL</b></br>";
			} else{
			echo "Email: $email<br/>"; }
			
			if (empty($opcao)){
				echo "<b>PARA QUE O FORMULARIO SEJA ENVIADO, É NECESSÁRIO ESCOLHER UMA DAS OPÇÕES DE ASSINALAR</b></br>";
			} else{
			echo "ASSINALOU: Item $opcao<br/>"; }
			
				if(($opcao=1)||($opcao=6)||($opcao=7) ||($opcao=10) ||($opcao=12)||($opcao=15)||($opcao=22)) {
				if(empty($especificar)){
					echo"</br><b>Para este ITEM você deverá especificar<b></br>";
				}
			}
			
			if(($opcao=3)||($opcao=5)||($opcao=10)){
				if(empty($justificar)){
					echo"</br><b>Para este ITEM você deverá Justificar<b></br>";
				}
			}
				
			
			
			
			
			
	
	
	
	}
	
	
	



?>
</html>