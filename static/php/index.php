<?php 

if (isset($_POST["submit"]))
{
	$Giorni = $_POST["giorni"];
	$Ore = $_POST["ore"];
	$Pagamento = $_POST["pagamentoh"];



	if ($Giorni != null && $Ore != null && $Pagamento != null)
	{
		if ($Giorni >= 0 && $Ore >= 0 && $Pagamento >= 0)
		{
			$PagamentoLavoro = ($Ore * $Pagamento) * $Giorni;

			echo "$Ore, $Giorni, $Pagamento, $PagamentoLavoro"; 
		}

		else
		{
			echo "Inserire un numero maggiore di 0";
		}
	}

	else 
	{
		echo "Inserire un numero";
	}

}

?>

