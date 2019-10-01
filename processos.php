<?php
date_default_timezone_set('America/Sao_Paulo');

require_once("controller/conexao.php");
require_once("model/class.gserv.php");


$usuario = new Usuario();
?>

<script type="text/javascript">
	function RemoveSelection() 
	{if (window.getSelection) {window.getSelection().removeAllRanges();}}
</script>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>GSERV - Gerenciamento de Serviços</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<!-- Bootstrap -->
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/dist/css/unslider.css">
	<link href="assets/images/favicon.ico" rel="shortcut icon" />
	<link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" media="screen" href="assets/css/simpletabs.css" />

		<!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
			<![endif]-->



		</head>
		<body>

		<?php require_once('lateral.php');?>

			<div class="spacetopo"></div>
		
			<section class="textprocesso">
				<div class="container">
					<h1 class="h1titulos">Processos</h1>

					<img src="assets/images/59847.jpg">

					<p><strong>Objetivos GSERV </strong>- Disseminar os conceitos de Central de Atendimento e os procedimentos para o correto tratamento das requisições de serviços. A equipe de Gerenciamento de Serviços (GSERV) vem fazendo um trabalho na avaliação e eficiência de atendimento de WO's, medindo tempo de abertura, atendimento e finalização, assim identificando e implementando a revisão e melhoria contínua nos processos de gerenciamento da central de serviços da CEPTI/SP.</p>

					<p><strong>Catálogo de Serviços</strong>- Responsável pelo Catálogo de Serviços da CEPTI/SP, efetuando analise para inclusão, exclusão e melhorias.</p>

					<p><strong>Indicadores NCTS </strong>– A equipe do GSERV tem como objetivo conscientizar as equipes sobre a importância dos encerramentos das WO'S dentro do prazo de 7 dias a partir da sua data de abertura.  Emitindo relatório NCTS para acompanhamento com o mapeamento de informações dos grupos de suporte. Abrangendo os WO’s que interferem no realize.caixa e para os WO’s que não interferem nos indicadores com evolução e conformidades dos registros abertos. Este atuação do GSERV está no processo de melhoria contínua conscientizando às coordenações da CEPTI/SP sobre a importância do encerramento das ordens de trabalho visando as conformidades da qualidade. 
					</p>

					<p><strong>Atendimento de Produção</strong></p>

					<p class="col-sm-6 col-xs-12"> Responsável por atender as demandas relacionadas 				as rotinas produtivas, como redisponibilização de arquivos e disponibilizar arquivos do ambiente de 		produção para desenvolvimento conforme Manual Normativo (MN TE106) e executar as boas 			práticas atendimento e criar, revisar, corrigir ou propor melhorias nas rotinas de atendimento de 			produção: </p>

					<br>

					<div class="col-sm-6 col-xs-12"><img src="assets/images/te106solic.jpg" /></div>

					


					<p><strong>Atendimento de Serviço=></strong> Responsável por abrir requisições de serviços, incidentes e abertura 		de tarefas de mudanças. Atender as demandas provenientes dos clientes externos ou 					internos à Centralizadora Nacional de Operações de TI e executar as boas práticas atendimento 			propondo melhorias nas rotinas de atendimento de serviços.</p>

					<p><strong>Automação de Processos =></strong> Responsável por construir, manter, atualizar e customizar interfaces, 		console, filtros, macros e painéis, que permitam o acompanhamento e gerenciamento dos serviços de TI 			prestados pela CAIXA. Efetua a manutenção e verificação periódica das páginas e portais desenvolvidos 			no ambiente Web e a manutenção e verificação periódica do funcionamento das automações 				desenvolvidas no ambiente Mainframe e no ambiente Web. Elabora e implementa automações de rotinas 		e processos no ambiente Mainframe e Web.</p>


				</div><!--fim container-->
			</section>
			

		<!-- código que talvez use depois
		<div class="anchor" id="metodologia"></div>
		<section  class="metodologia" >
			
			

			<div class="container textslide">
				<div class=" col-sm-7">
				<div class="my-slider">
					<ul>
						<li> 
						<h3>Para entender melhor...</h3>

						• Uso de material didático pronto<br>
						• Exercícios repetitivos<br>
						• Atividades de gramática sem contextualização<br>
						• Roleplays (dramatização de situações fictícias)<br>
						• Provas quantitativas para avaliar seu desempenho<br>
						• Aulas em duplas ou em grupos<br>
						• Leitura de textos específicos para ensino de línguas<br>
						• Escrita de frases e textos sem relevância <br>
						• Atividades de conversação dirigida<br>
						• Avaliação comparativa<br>

						</li>
						<li> 
						<h3>Para entender melhor 2...</h3>

						• Uso de material didático pronto<br>
						• Exercícios repetitivos<br>
						• Atividades de gramática sem contextualização<br>
						• Roleplays (dramatização de situações fictícias)<br>
						• Provas quantitativas para avaliar seu desempenho<br>
						• Aulas em duplas ou em grupos<br>
						• Leitura de textos específicos para ensino de línguas<br>
						• Escrita de frases e textos sem relevância <br>
						• Atividades de conversação dirigida<br>
						• Avaliação comparativa<br>

						</li>
					</ul>
				</div>
				</div>
				
				<img class="imgmanbook img-responsive" src="assets/images/imgmanbook.png" alt="Metodologia" />
				
			</div>

		</section>

		

		<div class="anchor" ></div>
		<section id="depoimentos" >
			
			
			<div class="container">

				<h1>Depoimentos dos  <strong>nossos alunos</strong></h1>
				
				<div id="depoimentosclientes" class="carousel slide" data-ride="carousel">
				  
				  <ol class="carousel-indicators">
				    <li data-target="#depoimentosclientes" data-slide-to="0" class="active"></li>
				    <li data-target="#depoimentosclientes" data-slide-to="1"></li>
				    <li data-target="#depoimentosclientes" data-slide-to="2"></li>
				    <li data-target="#depoimentosclientes" data-slide-to="3"></li>
				  </ol>

				  <div class="carousel-inner" role="listbox">
				    <div class="item active">
				      <p>A metodologia da Malu é simplesmente fantástica! Simples de se entender e de se praticar, e extremamente eficiente! 
						Sou aluno dela desde Outubro/2015, foram 16 aulas semanais de 30 minutos, totalizando 8 horas e a minha evolução no Inglês é impressionante. 
						Já tinha estudado anteriormente em escolas de idioma por alguns anos, mas nunca tinha conseguido um resultado tão expressivo e em um espaço de tempo tão curto.<br> 
						Thanks a lot Malu and let´s go ahead<p>
				    </div>

				    <div class="item">
				       <p>A metodologia da Malu é simplesmente fantástica! Simples de se entender e de se praticar, e extremamente eficiente! 
Sou aluno dela desde Outubro/2015, foram 16 aulas semanais de 30 minutos, totalizando 8 horas e a minha evolução no Inglês é impressionante. 
Já tinha estudado anteriormente em escolas de idioma por alguns anos, mas nunca tinha conseguido um resultado tão expressivo e em um espaço de tempo tão curto. 
					<br>Thanks a lot Malu and let´s go ahead<p>
				    </div>

				    <div class="item">
				      <p>A metodologia da Malu é simplesmente fantástica! Simples de se entender e de se praticar, e extremamente eficiente! 
Sou aluno dela desde Outubro/2015, foram 16 aulas semanais de 30 minutos, totalizando 8 horas e a minha evolução no Inglês é impressionante. 
Já tinha estudado anteriormente em escolas de idioma por alguns anos, mas nunca tinha conseguido um resultado tão expressivo e em um espaço de tempo tão curto. 
					<br>Thanks a lot Malu and let´s go ahead<p>
				    </div>

				    <div class="item">
				      <p>A metodologia da Malu é simplesmente fantástica! Simples de se entender e de se praticar, e extremamente eficiente! 
Sou aluno dela desde Outubro/2015, foram 16 aulas semanais de 30 minutos, totalizando 8 horas e a minha evolução no Inglês é impressionante. 
Já tinha estudado anteriormente em escolas de idioma por alguns anos, mas nunca tinha conseguido um resultado tão expressivo e em um espaço de tempo tão curto. 
					<br>Thanks a lot Malu and let´s go ahead<p>
				    </div>
				  </div>

				  
				</div>

				
				
			</div>

		</section>-->

		<div class="spaceroda"></div>


		<?php include 'footer.php';?>
		
		

		<!-- Javascript -->
		
		

		
		<script type="text/javascript" src="assets/js/simpletabs_1.1.js"></script>
		<script src="assets/js/jquery-2.2.3.min.js"></script>
		<script src="assets/js/unslider.js"></script>
		<script src="assets/js/bootstrap/carousel.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/functions.js"></script>
		
		<script>


			/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
			var dropdown = document.getElementsByClassName("dropdown-btn");
			var i;

			for (i = 0; i < dropdown.length; i++) {
				dropdown[i].addEventListener("click", function() {
					this.classList.toggle("active");
					var dropdownContent = this.nextElementSibling;
					if (dropdownContent.style.display === "block") {
						dropdownContent.style.display = "none";
					} else {
						dropdownContent.style.display = "block";
					}
				});
			}


		</script>
		

	</body>
	</html>