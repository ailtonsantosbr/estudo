<!-- FOOTER -->
	<footer >
			
				<div id="footer-bottom">
					<div class="container center clearfix">
				<p><img src="assets/images/logoceptisprodape.png" alt="CEPTISP" /> |  - CN Operações de TI São Paulo </p>
					</div>	<!-- .container -->
				</div>
	</footer> 
	<!-- FIM FOOTER -->

	</div>

  <script type="text/javascript" src="assets/js/jquery-1.11.2.min.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
  <!--<script src="js/sb-admin-2.js"></script>-->

  

<!-- Menu lateral / JS MENU -->
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "190px";
    document.getElementById("main").style.marginLeft = "190px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.body.style.backgroundColor = "white";
}


</script>
<!-- FIM JS MENU -->

<script>
// Get the modal
var modalniver = document.getElementById('myModalNiver');

// Get the button that opens the modal
var btn = document.getElementById("myBtnNiver");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modalniver.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modalniver.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modalniver.style.display = "none";
    }
}
</script>

