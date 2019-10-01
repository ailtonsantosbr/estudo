<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Monitora&ccedil;&atilde;o</title>

    <!-- Bootstrap Core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<link rel="StyleSheet" href="css/dtree.css" type="text/css"/>
	<script type="text/javascript" src="js/dtree.js"></script>
	
	<!-- jQuery -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

</head>

<body>

    <div id="wrapper">
        <!-- Navigation -->
        <!--<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0; background: #000663; background-image:url(img/cabecalho_caixa.png); background-position:center; background-repeat: repeat-y;">-->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0; background: #000663; background: linear-gradient(to top, rgba(0,57,186,1), rgba(0,80,255,1)) !important; background-position:center;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
				
                <a class="navbar-brand" href="http://monitoracao.ceptisp.caixa/view/inicio.php">
					<img style="" src="img/bg_caixa.png" width="120px" height="30px">
				</a>
                
				<a class="navbar-brand" href="http://monitoracao.ceptisp.caixa/view/inicio.php">
					<font color="#FFFFFF">
						Monitora&ccedil;&atilde;o
					</font>
				</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
						<font color="orange">Links <i class="fa fa-caret-down"></i></font>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="https://internetbanking.caixa/" target="_blank">Internet Banking CAIXA</a>
                        </li>
                        
						<li class="divider"></li>
                        
						<li>
                            <a href="https://correio.corp.caixa.gov.br/owa/auth/logon.aspx?replaceCurrent=1&url=https%3a%2f%2fcorreio.corp.caixa.gov.br%2fowa%2fexchange" target="_blank">Caixa M@il</a>
                        </li>
                        
						<li class="divider"></li>
                        
						<li>
                            <a href="http://sismn.caixa/" target="_blank">Manual Normativo</a>
                        </li>
                        
						<li class="divider"></li>
                        
						<li>
                            <a href="http://portfolio.caixa/" target="_blank">Portif&oacute;lio</a>
                        </li>
                        
						<li class="divider"></li>
                        
						<li>
                            <a href="#">Estrutura</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">

										
						<li class="sidebar-search">
							<form name = "botao" method = "post" action = "pesquisa.php">
								<div class="input-group custom-search-form">
									<input name = "busca" type="text" class="form-control" placeholder="Busca...">
										<span class="input-group-btn">
											<button class="btn btn-default" type="submit">
												<i class="fa fa-search"></i>
											</button>
										</span>
									</input>
								</div>
								<!-- /input-group -->
							</form>
                        </li>
						
						<br>
						
						<script type='text/javascript'>
						d = new dTree('d');
						d.add(0,-1,'Links Monitoração');
			d.add(23,0,'Agenda','http://siwam.ceptisp.caixa/agenda/','','_blank','img/page.gif');d.add(26,0,'Contatos','http://siwam.ceptisp.caixa/contatos/','','_blank','img/page.gif');d.add(206,0,'Descrição de Sistema','http://unidades/sites/GEDTI/goverancati/SitePages/Links%20Importantes.aspx','','_blank','img/page.gif');d.add(218,0,'Ferramentas','','','_blank','img/folder.gif','img/folderopen.gif');d.add(2460,218,'Abertura de Incidentes','http://siwam.ceptisp.caixa/itsm/Abre_INC_Padrao/','','_blank','img/page.gif');d.add(2301,218,'APM ','http://10.218.128.234:8081/','','_blank','img/page.gif');d.add(2252,218,'CIELO','https://monitoracaodenegocio.cielo.com.br/MicroStrategy/servlet/mstrWeb','','_blank','img/page.gif');d.add(2283,218,'Indicadores CEPTIBR','https://indicadores.ceptibr.caixa/painel/','','_blank','img/page.gif');d.add(2274,218,'Indicadores CEPTIRJ','http://indicadores.corerj.caixa:8080/PainelV3/','','_blank','img/page.gif');d.add(2265,218,'Indicadores CEPTISP','http://indicadores.ceptisp.caixa/','','_blank','img/page.gif');d.add(2246,218,'Monitor OMS SINAC','https://sinac.caixa/monitor_oms/','','_blank','img/page.gif');d.add(2317,218,'Monitoracao URLs Intra','http://10.1.21.77/mon/sites.php','','_blank','img/page.gif');d.add(2228,218,'Painel de Canais','http://canais.ceptisp.caixa/inicio.php','','_blank','img/page.gif');d.add(2389,218,'Painel de Incidentes','http://incidentes.ceptisp.caixa/view/inicio.php','','_blank','img/page.gif');d.add(23710,218,'Painel de Tarefas','http://tarefas.ceptisp.caixa/view/inicio.php','','_blank','img/page.gif');d.add(24911,218,'Painel de WO','http://servicos.ceptisp.caixa/view/inicio.php','','_blank','img/page.gif');d.add(22912,218,'SIGSC','http://servicos.caixa','','_blank','img/page.gif');d.add(22013,218,'SIMCV','https://simcv.caixa','','_blank','img/page.gif');d.add(22114,218,'SIMOC','http://simoc.caixa/simoc/index.jsf','','_blank','img/page.gif');d.add(24115,218,'SITRC (TED)','http://painelsitrc.ceptisp.caixa','','_blank','img/page.gif');d.add(23416,218,'SIWAM','http://siwam.ceptisp.caixa/','','_blank','img/page.gif');d.add(22317,218,'SIWAM SINAC','http://siwam.ceptisp.caixa/sinac/','','_blank','img/page.gif');d.add(23618,218,'SIWAM Sisag','http://siwam.ceptisp.caixa/sisag/Telao_SISAG.asp','','_blank','img/page.gif');d.add(25219,218,'VisÃ£o Gerencial','http://gestaogsc.ceptisp.caixa/view/inicio.php','','_blank','img/page.gif');d.add(25120,218,'Zabbix','http://zabbixsp.caixa','','_blank','img/page.gif');d.add(250,0,'Passagem Turno','http://siwam.ceptisp.caixa/passagem_monitoracao/','','_blank','img/page.gif');d.add(247,0,'PlantÃ£o Caixa','http://plantao.ceptisp.caixa/','','_blank','img/page.gif');d.add(245,0,'Urgencia dos Incidentes','uploads/UrgÃªncia dos Incidentes.pdf','','meio','img/page.gif');		
					document.write(d);
				</script>

                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

		<div id="page-wrapper">
			<div class="row">
				<div class="embed-responsive" style="padding-bottom:80%;">
					<iframe class="embed-responsive-item" name="meio" src="meio.php"></iframe>
					<!--<iframe name="meio" class="embed-responsive-item" src='meio.php' allowfullscreen></iframe>-->
				</div>
			</div>
			<!-- /.row -->
		</div>
		<!-- /#page-wrapper -->
	</div>
    <!-- /#wrapper -->
	<br><br><br><br>
		<div class="navbar-fixed-bottom" style="background: linear-gradient(to top, rgba(0,57,186,1), rgba(0,80,255,1)) !important; width: 100%; height: 30px; border-radius: 100% 100% 0px 0px;">
			<center>
				<font style="" size="2" color="#FFFFFF">CEPTISP08 - Coordenação de Automação e Resposta à Incidentes <font />
			</center>
		</div>

</body>

</html>
