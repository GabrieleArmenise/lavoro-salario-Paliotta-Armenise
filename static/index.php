

//stima dei tempi per il backend : 4 ore (Armenise Gabriele)

<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/frontheadPALIOTTA.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

	<h1>Quanto sarai povero?</h1>
	<h2>Giorni</h2>
	<input type="number" class="t1" name="giorni" placeholder="Quanti giorni durera' il lavoro?">

	<hr class="linea1">


	<h3>Campo obbligatorio</h3>

	<h4>Ore giornaliere di lavoro</h4>

	<input type="number" class="t2" name="ore" placeholder="Quante ore lavori al giorno?">

	<hr class="linea2"> 

	<h5>Campo obbligatorio</h5>

	<h6>Compenso orario</h6>

	<input type="number" class="t3" name="pagamentoh" placeholder="Quanto vieni pagato all'ora?">

	<hr class="linea3">

	<h7>Campo obbligatorio</h7>

	<input type="submit" class="bottone" name="submit" value="submit">

</form>
</body>
</html>


<?php 

if (isset($_POST['submit']))
{
	$Giorni = $_POST["giorni"];
	$Ore = $_POST["ore"];
	$Pagamento = $_POST["pagamentoh"];



	if ($Giorni != null && $Ore != null && $Pagamento != null)
	{
		if ($Giorni >= 0 && $Ore >= 0 && $Pagamento >= 0)
		{
			$PagamentoLavoro = ($Ore * $Pagamento) * $Giorni;

			echo ("Riceverai: $PagamentoLavoro"); 
		}

		else
		{
			echo ("Inserire un numero maggiore di 0");
		}
	}

	else 
	{
		echo ("Inserire un numero");
	}

}

?>



