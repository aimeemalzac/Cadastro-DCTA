<?php

include 'conexao/conexao.php';

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Relatórios</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
	<div class = "container" style="margin-bottom: 100px; margin-top: 50px">
		<div class = "wrapper" style="margin-bottom: 30px; margin-top: 10px">
		<h1> Relatórios </h1>
		</div>
		<div class ="data">
			<form action="report.php" method="POST">
			
				<select name= "niveis">
					<option>Nível</option>
					<?php

						$query1 = "SELECT * FROM niveis";

						$result1 = mysqli_query($conexao, $query1);

						while($rows1 = mysqli_fetch_array($result1)){
							$id_niveis = $rows1['id_niveis'];
							$rowsData1 = $rows1 ['niveis'];
					?>
					<option value="<?php echo $id_niveis; ?>"><?php echo $rowsData1; ?></option>

					<?php

				    }
				
					?>
				</select>

				<select name= "oms">
					<option>Organização Militar</option>

					<?php

						$query2 = "SELECT * FROM oms";

						$result2 = mysqli_query($conexao, $query2);

						while($rows2 = mysqli_fetch_array($result2)){
							$id_oms = $rows2['id_oms'];
							$rowsData2 = $rows2 ['oms'];
					?>
					<option value="<?php echo $id_oms; ?>"><?php echo $rowsData2; ?></option>

					<?php

				    }
				
					?>
				</select>


				<input type ="submit" name="submit" class = "submit"></input>
				<br>
				<br>

				<table border ="1" class= "table">
					
					<tr>
						<th> Nome </th>
						<th> Cargo </th>
					</tr>
						
						<?php

						if (isset($_POST['submit'])){

							$niveis = $_POST['niveis'];
							$oms = $_POST['oms'];

							$query3 = "SELECT nome, cargo FROM dados WHERE nivel = '$niveis' AND om = '$oms'";

							$result3 = mysqli_query($conexao, $query3);

							while ($rows3 = mysqli_fetch_array($result3)){
								  
								  $nome = $rows3['nome'];	
								  $cargo = $row3['cargo'];
							
							?>

							<tr>

								<td><?php echo $nome; ?></td>
								<td><?php echo $cargo; ?></td>
								

							</tr>

							<?php

					   		 }
						   	}

						?>
				</table>
			</form>
	</div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>