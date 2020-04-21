<!DOCTYPE html>
 <html>
 <head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href ="css/bootstrap.css">

  <style type="text/css">

    #botao {
      background-color: #F72378; /*cor de fundo*/
      color: #ffffff; /*cor da letra*/
      /*font-weight: bold;*/
    }

  </style>
<body> 

<?php

session_start();
if (!isset($_SESSION['usuario'])) {
  header ('Location: index.php');
}

?> 
  

<div class="container" style="margin-top: 40px;">
  <div class="row">
    <div class="col-sm">
    <form action="_inserir_servidor.php" method="post" >
      <div style="text-align: center;">
      <h4>Dados Pessoais</h4>
      </div>
     <label> Nome </label>
      <input type="text" class="form-control" name="nome" placeholder="Digite o nome do servidor" required autocomplete="off">
    <br>
    <label> Siape </label>
      <input type="number" class="form-control" name="siape" placeholder="Digite o SIAPE do servidor" required autocomplete="off">
      <br>
     <label for="exampleFormControlSelect1">Sexo</label>
       <select class="form-control" id="exampleFormControlSelect1" name="sexo" required autocomplete="off">
        <option>-------------------</option>
        <option>Feminino</option>
        <option>Masculino</option>
        </select>
      <br>
      <label> Data de Nascimento </label>
      <input type="date" class="form-control" name="datanascimento" placeholder="Digite a data de nascimento do servidor" required autocomplete="off">
      <br>
      <!-- <label> Idade </label> -->
      <input type="hidden" class="form-control" name="idade" placeholder="Digite a idade do servidor" required autocomplete="off">

      <label> CPF </label>
      <input type="number" class="form-control" name="cpf" placeholder="Digite o CPF do servidor" required autocomplete="off">
      <br>
      <label> RG </label>
      <input type="number" class="form-control" name="rg" placeholder="Digite o RG do servidor" required autocomplete="off">
      <br>
      <label for="exampleFormControlSelect1">Estado Civil</label>
      <select class="form-control" id="exampleFormControlSelect1" name="estadocivil" required autocomplete="off">
      <option>-------------------</option>
      <option>Solteiro(a)</option>
      <option>Casado(a)</option>
      <option>Divorciado(a)/Sepadarado(a)</option>
      <option>Outro</option>
      </select>
      <br>
      <label for="exampleFormControlSelect1">Portador de Necessidades Especiais</label>
      <select class="form-control" id="exampleFormControlSelect1" name="pne" required autocomplete="off">
      <option>-------------------</option>
      <option>SIM</option>
      <option>NÃO</option>
      </select>
      <br>
      <label> Endereço </label>
      <input type="text" class="form-control" name="endereco" placeholder="Insira o endereço do servidor" required autocomplete="off">
      <br>
      <label> Email </label>
      <input type="Email" class="form-control" name="email" placeholder="Insira o email do servidor" required autocomplete="off">
      <br>
      <br>
    </div>


    <div class="col-sm">
      <div style="text-align: right;"; style="margin-top: 40px">
      <h4>Dados Profissionais</h4>
      </div>
      <label for="exampleFormControlSelect1">Situação Funcional</label>
      <select class="form-control" id="exampleFormControlSelect1" name="situacaofuncional" required autocomplete="off">
      <option>-------------------</option>
      <option>Ativo</option>
      <option>Aposentado</option>
    </select>
    <br>
    <label for="exampleFormControlSelect1">Organização Militar</label>
      <select class="form-control" id="exampleFormControlSelect1" name="om" required autocomplete="off">
      <option>-------------------</option>
      <option>DCTA</option>
      <option>IEAv</option>
      <option>GAP</option>
      <option>IPEV</option>
      <option>CODCTA</option>
      <option>ITA</option>
      <option>IFI</option>
      <option>IAE</option>
      <option>PASJ</option>
      <option>COPAC</option>
      <option>CLBI</option>
      <option>CLA</option>
      </select>
      <br>
      <label for="exampleFormControlSelect1">Carreira</label>
      <select class="form-control" id="exampleFormControlSelect1" name="carreira" required autocomplete="off">
      <option>-------------------</option>
      <option>Ciência e Tecnologia</option>
      <option>Carreira Geral de Pessoal</option>
      <option>Professor</option>
      </select>
      <br>
      <label for="exampleFormControlSelect1">Cargo</label>
       <select class="form-control" id="exampleFormControlSelect1" name="cargo" required autocomplete="off">
        <option>-------------------</option>
        <option>Auxiliar em C&T</option>
        <option>Técnico</option>
        <option>Tecnologista</option>
        <option>Pesquisador</option>
        <option>Analista em C&T</option>
        <option>Assistente em C&T</option>
        <option>Outro</option>
        </select>
      <br>
      <label> Classe </label>
      <input type="text" class="form-control" name="classe" placeholder="Insira o cargo do servidor" required autocomplete="off">
      <br>
      <label> Padrão </label>
      <input type="text" class="form-control" name="padrao" placeholder="Insira o cargo do servidor" required autocomplete="off">
      <br>
      <label for="exampleFormControlSelect1">Nível</label>
       <select class="form-control" id="exampleFormControlSelect1" name="nivel" required autocomplete="off">
        <option>-------------------</option>
        <option>Nível Auxiliar</option>
        <option>Nível Médio</option>
        <option>Nível Superior</option>
       </select>
      <br>
      <label for="exampleFormControlSelect1">Jornada</label>
       <select class="form-control" id="exampleFormControlSelect1" name="jornada" required autocomplete="off">
        <option>-------------------</option>
        <option>40 horas</option>
        <option>30 horas</option>
        <option>20 horas</option>
      </select>
      <br>
      <label>Código da Vaga</label>
      <input type="number" class="form-control" name="codigovaga" placeholder="Digite o código de vaga do servidor" required autocomplete="off">
      <br>
      <label> PIS/PASEP </label>
      <input type="number" class="form-control" name="pispasep" placeholder="Digite o PIS/PASEP do servidor" required autocomplete="off">
      <br>
    </div>
    <div class="col-sm">
      <div style="text-align: left;"; style="margin-top: 40px">
      <h4>...</h4>
      </div>
      <label>Data da Posse</label>
      <input type="date" class="form-control" name="dataposse" placeholder="Digite a data da posse do servidor" required autocomplete="off">
      <br>
      <label>Data do Exercício</label>
      <input type="date" class="form-control" name="dataexercicio" placeholder="Digite a data de exercício do servidor" required autocomplete="off">
      <br>
      <!-- <label> Tempo de Serviço no DCTA </label> -->
      <input type="hidden" class="form-control" name="tempodcta" placeholder="Insira o tempo de serviço do servidor no DCTA" required autocomplete="off">
      <br>
      <label> Tempo de Serviço/Contribuição Averbado </label>
      <input type="number" class="form-control" name="tempoexterno" placeholder="Insira o tempo de serviço externo averbado" required autocomplete="off">
      <br>
      <label> Tempo Afastado </label>
      <input type="number" class="form-control" name="tempoafastado" placeholder="Insira o tempo de afastamento" required autocomplete="off">
      <br>
      <label> Previsão de Aposentadoria </label>
      <input type="number" class="form-control" name="prevaposentadoria" placeholder="Insira o ano previsto para aposentadoria do servidor" required autocomplete="off">
      <br>
      <label> Última Progressão </label>
      <input type="date" class="form-control" name="progressao" placeholder="Insira a data da última progressão" required autocomplete="off">
      <br>
      <label for="exampleFormControlSelect1">Titulação</label>
      <select class="form-control" id="exampleFormControlSelect1" name="titulacao" required autocomplete="off">
      <option>-------------------</option>
      <option>GQ-I</option>
      <option>GQ-II</option>
      <option>GQ-III</option>
      <option>Especialização</option>
      <option>Mestrado</option>
      <option>Doutorado</option>
      </select>
      <br>
      <label> Portaria de Concessão da Titulação </label>
      <input type="text" class="form-control" name="portariatitulacao" placeholder="Insira a portaria de titulação do servidor" required autocomplete="off">
      <br>
      <label> Data da Concessão da Titulação </label>
      <input type="date" class="form-control" name="datatitulacao" placeholder="Insira a data de concessão da titulação" required autocomplete="off">
    </div>
  </div>
  
  <div style="text-align: right; margin-bottom: 100px" >
  <a href="menu.php" role="button" class="btn  btn-sm btn-primary">Voltar</a>
  <button type="submit" id="botao" class="btn  btn-sm">Cadastrar</button>
  </div>
</div>


</form>

 <script type="text/javascript" src="js/bootstrap.js"></script>
 </body>
 </html>
