<?php
echo "No funciona con mastercard";
		require_once('./vendor/autoload.php');
		use Transbank\Webpay\Configuration;
		use Transbank\Webpay\Webpay;
		// ...

		$transaction = (new Webpay(Configuration::forTestingWebpayPlusNormal()))
		               ->getNormalTransaction();

		$tokenWs = filter_input(INPUT_POST, 'token_ws');
		

		$result = $transaction->getTransactionResult($tokenWs);
		$output = $result->detailOutput;
		if($output->responseCode == 0){
			echo '<script>window.localStorage.clear();</script>';
			echo '<script>window.localStorage.setItem("authorizationCode",'.$output->authorizationCode.');</script>';
			echo '<script>window.localStorage.setItem("amount",'.$output->amount.');</script>';
			echo '<script>window.localStorage.setItem("responseCode",'.$output->responseCode.');</script>';
		}


?>

<?php if($output->responseCode == 0) : ?>
<form method="post" action="<?php echo $result->urlRedirection ?>" id="return-form">
	<input type="hidden" name="token_ws" value="<?php echo $tokenWs ?>">
</form>

<script type="text/javascript">
	document.getElementById('return-form').submit();
</script>
<?php endif; ?>