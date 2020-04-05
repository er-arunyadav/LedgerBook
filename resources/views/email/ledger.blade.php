<!DOCTYPE html>
<html>
<head>
	<title>Record Added Successful</title>
	
</head>
<body>
	@if($amount['credit'] == 0)
		<center><h2>You have Succesfully debited {{$amount['debit']}} <br> from {{$name}} for {{$amount['particular']}}</h2></center>
	@elseif($amount['debit'] == 0)
		<center><h2>You have Succesfully debited {{$amount['credit']}} <br> from {{$name}} for for {{$amount['particular']}}</h2></center>
	@else
	<center>
		<h2>You have Succesfully credit {{$amount['credit']}} & debit {{$amount['debit']}} <br> from {{$name}} for for {{$amount['particular']}}</h2></center>
	@endif
	
	<center><h4>Remaing Balance of {{$name}} is {{$amount['balance']}}</h4></center>

	<center><p>Thank for using LedgerBook</h1></p>

</body>
</html>