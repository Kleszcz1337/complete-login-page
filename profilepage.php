<?php 
	include_once 'header.php';
?>

        <div class="login">
 	        <h1>Profile page</h1>
        </div>

        <?php
			if(isset($_SESSION["Username"]))
			{
                echo  $_SESSION["Username"];
                echo "<br>";
                echo  "<p>Użytkowniku, jeżeli chcesz dokonać jakiś zmian na swoim koncie, prosze skontaktuj się ze mną</p>";
                echo  "<p>zapasowy216@gmail.com</p>";
			}
		?>

</div>
<?php 
    include_once 'footer.php';
?>