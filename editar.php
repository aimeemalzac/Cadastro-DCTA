
<?php

session_start();

$usuario = $_SESSION['usuario'];

if (!isset($_SESSION['usuario'])) {
  header ('Location: index.php');
}


include 'conexao.php';

$sql = "SELECT nivel_usuario FROM usuarios WHERE mail_usuario ='$usuario' and status = 'Ativo'";

$buscar = mysqli_query($conexao, $sql);

$array = mysqli_fetch_array($buscar);

$nivel_usuario = $array['nivel_usuario'];

?> 


<?php

include 'conexao.php';

$id= $_GET['id'];


?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title></title>
 	<link rel="stylesheet" href ="css/bootstrap.css">
  


 	<style type="text/css">
 		
 		#tamanhoContainer{
 			width: 500px;
 		}

 		#botao {
 			background-color: #F72378; /*cor de fundo*/
 			color: #ffffff; /*cor da letra*/
 			/*font-weight: bold;*/
 		}

 	</style>
</head>
 <body> 
 <div class="container" style="margin-top: 40px;">
  <div class="row">
    <div class="col-sm">
	  <form action="atualizar.php" method="post" style="margin-top: 20px;">

		<?php

		$sql = "SELECT *, TIMESTAMPDIFF (YEAR, `datanascimento`, CURDATE()) AS idade FROM `dados` WHERE id = $id";
    
				$buscar = mysqli_query($conexao, $sql);
				while ($array = mysqli_fetch_array($buscar)) {

		      $id = $array ['id'];
					$nome = $array ['nome']; 
					$siape = $array ['siape'];
					$sexo = $array ['sexo'];
					$datanascimento = $array ['datanascimento'];
					$idade = $array ['idade'];
					$cpf = $array ['cpf'];
					$rg = $array ['rg'];
					$estadocivil = $array ['estadocivil'];
					$pne = $array ['pne'];
					$endereco = $array ['endereco'];
					$email = $array ['email'];
					$situacaofuncional = $array ['situacaofuncional'];
          $demissdata = $array['demissdata'];
          $demisspubli = $array['demisspubli'];
					$om = $array ['om'];
					$carreira = $array ['carreira'];
					$cargo = $array ['cargo'];
					$classe = $array ['classe'];
					$padrao = $array ['padrao'];
					$nivel = $array ['nivel'];
					$jornada = $array ['jornada'];
					$codigovaga = $array ['codigovaga'];
					$pispasep = $array ['pispasep'];
					$dataposse = $array ['dataposse'];
					$dataexercicio = $array ['dataexercicio'];
					//$tempodcta = $array ['tempodcta'];
					$tempoexterno = $array ['tempoexterno'];
					$tempoafastado = $array ['tempoafastado'];
					$prevaposentadoria = $array ['prevaposentadoria'];
					$progressao = $array ['progressao'];
					$titulacao = $array ['titulacao'];
					$portariatitulacao = $array ['portariatitulacao'];
					$datatitulacao = $array ['datatitulacao'];
          $abono = $array['abono'];
						

				?>


    <?php {

    $nsql = "SELECT *, (DATEDIFF(CURDATE(), `dataexercicio`) - `tempoafastado`)/365 AS tempodcta FROM `dados` WHERE id = $id";

    $b = mysqli_query($conexao, $nsql);

      while ($array = mysqli_fetch_array($b)) {

        $id = $array ['id'];
        $dataexercicio = $array ['dataexercicio'];
        $tempodcta = $array ['tempodcta'];
        $tempoafastado = $array ['tempoafastado'];
        ?>


    <div style="text-align: center;" style="margin-top: 0px";>
    <h4>Dados Pessoais</h4>
    </div>
     <label> Nome </label>
      <input type="text" class="form-control" name="nome" value="<?php echo $nome ?>">
      <input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display: none">
    <br>
    <label> Siape </label>
      <input type="number" class="form-control" name="siape" value="<?php echo $siape ?>">
      <br>
     <label for="exampleFormControlSelect1">Sexo</label>
       <select class="form-control" id="exampleFormControlSelect1" name="sexo" value="<?php echo $sexo ?>">
        <option <?php echo $sexo=='Feminino' ? 'selected="selected"' : ''?>>Feminino</option>
        <option <?php echo $sexo=='Masculino' ? 'selected="selected"' : ''?>>Masculino</option>
        </select>
      <br>
      <label> Data de Nascimento </label>
      <input type="date" class="form-control" name="datanascimento" value="<?php echo $datanascimento ?>">
      <br>
      <label> Idade </label>
      <input disabled="disabled" type="number" class="form-control" name="idade" value="<?php echo $idade ?>">
      <br>
      <label> CPF </label>
      <input type="number" class="form-control" name="cpf" value="<?php echo $cpf ?>">
      <br>
      <label> RG </label>
      <input type="text" class="form-control" name="rg" value="<?php echo $rg ?>">
      <br>
      <label for="exampleFormControlSelect1">Estado Civil</label>
      <select class="form-control" id="exampleFormControlSelect1" name="estadocivil" value="<?php echo $estadocivil ?>">
      <option <?php echo $estadocivil=='solteiro(a)' ? 'selected="selected"' : ''?>>solteiro(a)</option>
      <option <?php echo $estadocivil=='casado(a)' ? 'selected="selected"' : ''?>>casado(a)</option>
      <option <?php echo $estadocivil=='divorciado(a)' ? 'selected="selected"' : ''?>>divorciado(a)</option>
      <option <?php echo $estadocivil=='separado(a)' ? 'selected="selected"' : ''?>>separado(a)</option>
      <option <?php echo $estadocivil=='viúvo(a)' ? 'selected="selected"' : ''?>>viúvo(a)</option>
      <option <?php echo $estadocivil=='Outro' ? 'selected="selected"' : ''?>>Outro</option>
      </select>
      <br>
      <label for="exampleFormControlSelect1">Portador de Necessidades Especiais</label>
      <select class="form-control" id="exampleFormControlSelect1" name="pne" value="<?php echo $pne ?>">
      <option <?php echo $pne=='SIM' ? 'selected="selected"' : ''?>>SIM</option>
      <option <?php echo $pne=='NÃO' ? 'selected="selected"' : ''?>>NÃO</option>
      </select>
      <br>
      <label> Endereço </label>
      <input type="text" class="form-control" name="endereco" value="<?php echo $endereco ?>">
      <br>
      <label> Email </label>
      <input type="Email" class="form-control" name="email" value="<?php echo $email ?>">
      <br>
      <label> PIS/PASEP </label>
      <input type="number" class="form-control" name="pispasep" value="<?php echo $pispasep ?>">
      <br>
    </div>

    <div class="col-sm">
      <div style="text-align: left;"; style="margin-top: 40px">
      <h4>Dados Profissionais</h4>
      </div>
      <br>
      <label for="exampleFormControlSelect1">Situação Funcional</label>
      <select class="form-control" id="exampleFormControlSelect1" name="situacaofuncional" value="<?php echo $situacaofuncional ?>">
      <option <?php echo $situacaofuncional=='Ativo' ? 'selected="selected"' : ''?>>Ativo</option>
      <option <?php echo $situacaofuncional=='Aposentado' ? 'selected="selected"' : ''?>>Aposentado</option>
      <option <?php echo $situacaofuncional=='Cedido' ? 'selected="selected"' : ''?>>Cedido</option>
      <option <?php echo $situacaofuncional=='Contrato de Trabalho Temporário' ? 'selected="selected"' : ''?>>Contrato de Trabalho Temporário</option>
      <option <?php echo $situacaofuncional=='AGU' ? 'selected="selected"' : ''?>>AGU</option>
      <option <?php echo $situacaofuncional=='ICEA' ? 'selected="selected"' : ''?>>ICEA</option>
      <option <?php echo $situacaofuncional=='Em exercício no DCTA' ? 'selected="selected"' : ''?>>Em exercício no DCTA</option>
      <option <?php echo $situacaofuncional=='Exercício Provisório' ? 'selected="selected"' : ''?>>Exercício Provisório</option>
      <option <?php echo $situacaofuncional=='Licença sem vencimentos' ? 'selected="selected"' : ''?>>Licença sem vencimentos</option>
      <option <?php echo $situacaofuncional=='DAS' ? 'selected="selected"' : ''?>>DAS</option>
    </select>
    <br>
      <label> Data de Demissão/Saída </label>
      <input type="date" class="form-control" name="demissdata" value="<?php echo $demissdata ?>">
      <br>
      <label> Publicação da Demissão/Saída </label>
      <input type="text" class="form-control" name="demisspubli" value="<?php echo $demisspubli ?>">
      <br>
    <label for="exampleFormControlSelect1">Organização Militar</label>
      <select class="form-control" id="exampleFormControlSelect1" name="om" value="<?php echo $om ?>">
      <option <?php echo $om=='DCTA' ? 'selected="selected"' : ''?>>DCTA</option>
      <option <?php echo $om=='IEAv' ? 'selected="selected"' : ''?>>IEAv</option>
      <option <?php echo $om=='GAP' ? 'selected="selected"' : ''?>>GAP</option>
      <option <?php echo $om=='CODCTA' ? 'selected="selected"' : ''?>>CODCTA</option>
      <option <?php echo $om=='ITA' ? 'selected="selected"' : ''?>>ITA</option>
      <option <?php echo $om=='IFI' ? 'selected="selected"' : ''?>>IFI</option>
      <option <?php echo $om=='IAE' ? 'selected="selected"' : ''?>>IAE</option>
      <option <?php echo $om=='PASJ' ? 'selected="selected"' : ''?>>PASJ</option>
      <option <?php echo $om=='COPAC' ? 'selected="selected"' : ''?>>COPAC</option>
      <option <?php echo $om=='CLBI' ? 'selected="selected"' : ''?>>CLBI</option>
      <option <?php echo $om=='CLA' ? 'selected="selected"' : ''?>>CLA</option>
      <option <?php echo $om=='AGU' ? 'selected="selected"' : ''?>>AGU</option>
      <option <?php echo $om=='ICEA' ? 'selected="selected"' : ''?>>ICEA</option>
      </select>
      <br>
      <label for="exampleFormControlSelect1">Carreira</label>
      <select class="form-control" id="exampleFormControlSelect1" name="carreira" value="<?php echo $carreira ?>">
      <option <?php echo $carreira=='C&T' ? 'selected="selected"' : ''?>>C&T</option>
      <option <?php echo $carreira=='CDT' ? 'selected="selected"' : ''?>>CDT</option>
      <option <?php echo $carreira=='CLT' ? 'selected="selected"' : ''?>>CLT</option>
      <option <?php echo $carreira=='DACTA' ? 'selected="selected"' : ''?>>DACTA</option>
      <option <?php echo $carreira=='DAS' ? 'selected="selected"' : ''?>>DAS</option>
      <option <?php echo $carreira=='JUR' ? 'selected="selected"' : ''?>>JUR</option>
      <option <?php echo $carreira=='MAG' ? 'selected="selected"' : ''?>>MAG</option>
      <option <?php echo $carreira=='MAG EBTT' ? 'selected="selected"' : ''?>>MAG EBTT</option>
      <option <?php echo $carreira=='MAG SUP' ? 'selected="selected"' : ''?>>MAG SUP</option>
      <option <?php echo $carreira=='MPOG' ? 'selected="selected"' : ''?>>MPOG</option>
      <option <?php echo $carreira=='PCCTAE' ? 'selected="selected"' : ''?>>PCCTAE</option>
      <option <?php echo $carreira=='PGPE' ? 'selected="selected"' : ''?>>PGPE</option>
      </select>
      <br>
      <label for="exampleFormControlSelect1">Cargo</label>
       <select class="form-control" id="exampleFormControlSelect1" name="cargo" value="<?php echo $cargo ?>">
        <option <?php echo $cargo=='Auxiliar em C&T' ? 'selected="selected"' : ''?>>Auxiliar em C&T</option>
        <option <?php echo $cargo=='Técnico' ? 'selected="selected"' : ''?>>Técnico</option>
        <option <?php echo $cargo=='Tecnologista' ? 'selected="selected"' : ''?>>Tecnologista</option>
        <option <?php echo $cargo=='Pesquisador' ? 'selected="selected"' : ''?>>Pesquisador</option>
        <option <?php echo $cargo=='Analista em C&T' ? 'selected="selected"' : ''?>>Analista em C&T</option>
        <option <?php echo $cargo=='Assistente em C&T' ? 'selected="selected"' : ''?>>Assistente em C&T</option>
        <option <?php echo $cargo=='Outro' ? 'selected="selected"' : ''?>>Outro</option>
        <option <?php echo $cargo=='Agente de Portaria' ? 'selected="selected"' : ''?>>Agente de Portaria</option>
        <option <?php echo $cargo=='Prof Mag Sup' ? 'selected="selected"' : ''?>>Prof Mag Sup</option>
        <option <?php echo $cargo=='Prof EBTT' ? 'selected="selected"' : ''?>>Prof EBTT</option>
        <option <?php echo $cargo=='Engenheiro' ? 'selected="selected"' : ''?>>Engenheiro</option>
        <option <?php echo $cargo=='Agente Adm' ? 'selected="selected"' : ''?>>Agente Adm</option>
        <option <?php echo $cargo=='Assistente Técnico' ? 'selected="selected"' : ''?>>Assistente Técnico</option>
        <option <?php echo $cargo=='Administrador' ? 'selected="selected"' : 'Administrador'?>></option>
        </select>
      <br>
      <label> Classe </label>
      <input type="text" class="form-control" name="classe" value="<?php echo $classe ?>">
      <br>
      <label> Padrão </label>
      <input type="text" class="form-control" name="padrao" value="<?php echo $padrao ?>">
      <br>
      <label for="exampleFormControlSelect1">Nível</label>
       <select class="form-control" id="exampleFormControlSelect1" name="nivel" value="<?php echo $nivel ?>">
        <option <?php echo $nivel=='NA' ? 'selected="selected"' : ''?>>NA</option>
        <option <?php echo $nivel=='NI' ? 'selected="selected"' : ''?>>NI</option>
        <option <?php echo $nivel=='NS' ? 'selected="selected"' : ''?>>NS</option>
       </select>
      <br>
      <label for="exampleFormControlSelect1">Jornada</label>
       <select class="form-control" id="exampleFormControlSelect1" name="jornada" value="<?php echo $jornada ?>">
        <option <?php echo $jornada=='40 horas' ? 'selected="selected"' : ''?>>40 horas</option>
        <option <?php echo $jornada=='30 horas' ? 'selected="selected"' : ''?>>30 horas</option>
        <option <?php echo $jornada=='20 horas' ? 'selected="selected"' : ''?>>20 horas</option>
        <option <?php echo $jornada=='Dedicação Exclusiva' ? 'selected="selected"' : ''?>>Dedicação Exclusiva</option>
      </select>
      <br>
      <label>Código da Vaga</label>
      <input type="number" class="form-control" name="codigovaga" value="<?php echo $codigovaga ?>">
      <br>
    </div>
    <div class="col-sm">
      <div style="text-align: left;"; style="margin-top: 40px">
      <h4> ...  </h4>
      </div>
      <br>
      <label>Data da Posse</label>
      <input type="date" class="form-control" name="dataposse" value="<?php echo $dataposse ?>">
      <br>
      <label>Data do Exercício</label>
      <input type="date" class="form-control" name="dataexercicio" value="<?php echo $dataexercicio ?>">
      <br>
      <label> Tempo de Serviço no DCTA em anos </label>
      <input disabled="disabled" type="number" class="form-control" name="tempodcta" <?php $tempodcta1 = number_format($tempodcta, 0, '.','') ?>  value="<?php echo $tempodcta1 ?>">
      <br>
      <label> Tempo de Serviço/Contribuição Averbado </label>
      <input type="number" class="form-control" name="tempoexterno" value="<?php echo $tempoexterno ?>">
      <br>
      <label> Tempo Afastado </label>
      <input type="number" class="form-control" name="tempoafastado" value="<?php echo $tempoafastado ?>">
      <br>
      <label> Previsão de Aposentadoria </label>
      <input type="year" class="form-control" name="prevaposentadoria" value="<?php echo $prevaposentadoria ?>">
      <br>
      <label> Última Progressão </label>
      <input type="date" class="form-control" name="progressao" value="<?php echo $progressao ?>">
      <br>
      <label for="exampleFormControlSelect1">Titulação</label>
      <select class="form-control" id="exampleFormControlSelect1" name="titulacao" value="<?php echo $titulacao ?>">
      <option <?php echo $titulacao=='GQ-I' ? 'selected="selected"' : ''?>>GQ-I</option>
      <option <?php echo $titulacao=='GQ-II' ? 'selected="selected"' : ''?>>GQ-II</option>
      <option <?php echo $titulacao=='GQ-III' ? 'selected="selected"' : ''?>>GQ-III</option>
      <option <?php echo $titulacao=='Especialização' ? 'selected="selected"' : ''?>>Especialização</option>
      <option <?php echo $titulacao=='Mestrado' ? 'selected="selected"' : ''?>>Mestrado</option>
      <option <?php echo $titulacao=='Doutorado' ? 'selected="selected"' : ''?>>Doutorado</option>
      <option <?php echo $titulacao==' ' ? 'selected="selected"' : ''?>> </option>
      </select>
      <br>
      <label> Portaria de Concessão da Titulação </label>
      <input type="text" class="form-control" name="portariatitulacao" value="<?php echo $portariatitulacao ?>">
      <br>
      <label> Data da Concessão da Titulação </label>
      <input type="date" class="form-control" name="datatitulacao" value="<?php echo $datatitulacao ?>">
      <br>
      <label> Abono de Permanência </label>
      <input type="text" class="form-control" name="abono" value="<?php echo $abono ?>">
      <br>
    </div>
  	</div>

    <?php

          if (($nivel_usuario == 1) || ($nivel_usuario == 2)) {
          ?>
          <br>
          <br>

	       <div style="text-align: center; margin-bottom: 0px">
	       <button type="submit" id="botao" class="btn ">Atualizar</button>
	       </div>

         <?php } ?>


         <div style="text-align: right; margin-bottom: 50px">
         <a href="_listar.php" role="button" class="btn btn-primary">Voltar</a>
		
  <?php } ?>
    <?php } ?>
      <?php } ?>

    

	</form>
  </div>


 <script type="text/javascript" src="js/bootstrap.js"></script>
 </body>
 </html>

