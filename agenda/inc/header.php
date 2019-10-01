<header id="header" class="navbar-fixed-top" role="banner">
        
        <div id="main-navigation" class="navbar navbar-default">
          
          <nav class="navbar-collapse navbar-main-navigation" role="navigation">

            <div class="">

              <span class="mais" style="" onclick="openNav()">&#9776;</span><!-- menu lateral / para desativar comente ou exclua -->
              
          <div class="logo_container">
            <span class="logo_helper"></span>
            <a href="" title="Ir para a página principal" alt="CEPTI/SP">
              <img src="assets/images/logoceptisp.png" id="CEPTISP"  />
            </a>
            
          </div>

              <a class="logocaixa" href="#">
      <img src="assets/images/logonewcaixa.png" alt="Caixa" />
      </a>

        <!--<h1 class="col-sm-4 col-xs-12">Escala de Plantão</h1> titulo no header-->
        

    <div class="collapse navbar-collapse blocouser" id="myNavbar"> 
      
      <ul class="nav navbar-nav navbar-right springy-text .visible-sm-block hidden-xs">
         <li>
         <a class="btniver" id="myBtnNiver" data-target='#myModalNiver'><span style="font-size:1.0em;" class="fa fa-birthday-cake"></span></a>

          
        </li>
         <!-- mostra o usuario LDAP
         <li>
          <a class="usuario">
            <font style="color: #FFFFFF; font-size:13px; font-weight: 300;"><?php echo $frase?></font><br/>
            <b style="color: #f7941d; font-size:15px; font-weight: 600;"><?php echo $nome; ?></b>
            
          </a>
          
        </li>-->
        
        
        <li style="margin: 0 25px 0 0;"></li>
      </ul>
    </div> 
    
    
      </div>

          </div><!-- .container-->
        </nav><!-- .navbar-collapse -->
      </div><!-- #main-navigation-->


      <?php include 'inc/menu.php' ?>
    

      <!-- modal aniversariantes-->
      <div id="myModalNiver" class="modal">
        <div class="modal-content">
          <span class="close">&times;</span>
          <div class='modal-header' style='min-height: 45px !important; background-image: linear-gradient(to top, #0075be, #005a9c); '>
                    <h5 class='modal-title'> <font style='font-weight: bold; color: #FFFFFF; font-size: 1.0em;'>Aniversariantes do Dia</font></h5>
                  </div>

                  <div class='modal-body' style="border-radius: 0px 0px 12px 12px; width: 100%; min-height: 65%; background-blend-mode: collor-dodge;">
                    <div class='modal-body niver'>
                      <form accept-charset='ISO-8859-1' method='post' action='#'>
                        <div><?php echo $aniversariante?></div>
                      </form>
                    </div>
                  </div>

      </div>
      </div>
     <!-- fim modal -->

  </header>
  <!-- #header -->
  <div class="spaceheader"></div>