<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<style>
		* {
			box-sizing: border-box;
		}
		html, body {
			font-family: 'Montserrat', sans-serif;
			font-size-adjust: u;
			display: flex;
			width: 100%;
			height: 100%;
			background: #eeeeee;
			justify-content: center;
			align-items: center;
			margin: 0;
			padding: 0;
		}
		.checkout-panel {
			display: flex;
			flex-direction: column;
			width: 940px;
			background-color: rgb(255, 255, 255);
			box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .2);
			margin: auto;
		}
		.panel-body {
			padding: 45px 80px 0;
			flex: 1;
		}
		.title {
			font-weight: 700;
			margin-top: 0;
			margin-bottom: 40px;
			color: #2e2e2e;
		}
		.payment-method {
			display: flex;
			margin-bottom: 60px;
			justify-content: space-between;
		}
		.method {
			display: flex;
			flex-direction: column;
			width: 382px;
			height: 122px;
			padding-top: 20px;
			cursor: pointer;
			border: 1px solid transparent;
			border-radius: 2px;
			background-color: rgb(249, 249, 249);
			justify-content: center;
			align-items: center;
		}
		.card-logos {
			display: flex;
			width: 150px;
			justify-content: space-between;
			align-items: center;
		}
		.radio-input {
			margin-top: 20px;
		}
		input[type='radio'] {
			display: inline-block;
		}
		.input-fields {
			display: flex;
			justify-content: space-between;
		}
		.input-fields label {
			display: block;
			margin-bottom: 10px;
			color: #b4b4b4;
		}
		.info {
			font-size: 12px;
			font-weight: 300;
			display: block;
			margin-top: 50px;
			opacity: .5;
			color: #2e2e2e;
		}
		div[class*='column'] {
			width: 382px;
		}
		input[type='text'], input[type='password'] {
			font-size: 16px;
			width: 100%;
			height: 50px;
			padding-right: 40px;
			padding-left: 16px;
			color: rgba(46, 46, 46, .8);
			border: 1px solid rgb(225, 225, 225);
			border-radius: 4px;
			outline: none;
		}
		input[type='text']:focus, input[type='password']:focus {
			border-color: rgb(119, 219, 119);
		}
		#date {
			background: url(img/icons_calendar_black.png) no-repeat 95%;
		}
		#cardholder {
			background: url(img/icons_person_black.png) no-repeat 95%;
		}
		#cardnumber {
			background: url(img/icons_card_black.png) no-repeat 95%;
		}
		#verification {
			background: url(img/icons_lock_black.png) no-repeat 95%;
		}
		.small-inputs {
			display: flex;
			margin-top: 20px;
			justify-content: space-between;
		}
		.small-inputs div {
			width: 182px;
		}
		a{
			text-decoration: none;
			color: #fff;
		}
		.panel-footer {
			display: flex;
			width: 100%;
			height: 96px;
			padding: 0 80px;
			background-color: rgb(239, 239, 239);
			justify-content: space-between;
			align-items: center;
		}
		.btn {
			font-size: 16px;
			width: 163px;
			height: 48px;
			cursor: pointer;
			transition: all .2s ease-in-out;
			letter-spacing: 1px;
			border: none;
			border-radius: 23px;
		}
		.purchase-btn {
			margin-top: 20px;
			font-size: 18px;
			width: 200px;
			height: 50px;
			cursor: pointer;
			transition: all .2s ease-in-out;
			letter-spacing: 1px;
			border: none;
			border-radius: 25px;
			background-color: #1abc9c;
			color: #fff;
			align-self: center;
		}
		.purchase-btn-exit {
			margin-top: 20px;
			font-size: 18px;
			width: 200px;
			height: 50px;
			cursor: pointer;
			transition: all .2s ease-in-out;
			letter-spacing: 1px;
			border: none;
			border-radius: 25px;
			background-color: #ed5311;
			color: #fff;
			align-self: center;
		}
		.purchase-btn-exit:hover {
			transform: scale(1.1);
		}
		.purchase-btn:focus {
			outline: none;
		}
		.purchase-btn:hover {
			transform: scale(1.1);
		}
		.back-btn {
			color: #1abc9c;
			background: #fff;
		}
		.next-btn {
			color: #fff;
			background: #1abc9c;
		}
		.btn:focus {
			outline: none;
		}
		.btn:hover {
			transform: scale(1.1);
		}
		.blue-border {
			border: 1px solid rgb(110, 178, 251);
		}
		.warning {
			border-color: #1abc9c;
		}
	</style>
</head>
<body>
	<div class="checkout-panel">
		<div class="panel-body">
			<h2 class="title">Checkout here!</h2>
			<div class="payment-method">
				<label for="card" class="method card">
					<div class="card-logos">
						<img src="https://designmodo.com/demo/checkout-panel/img/visa_logo.png"/>
						<img src="https://designmodo.com/demo/checkout-panel/img/mastercard_logo.png"/>
					</div>
					<div class="radio-input">
						<input id="card" type="radio" name="payment">
						Pay with credit card
					</div>
				</label>
				<label for="paypal" class="method paypal">
					<img src="https://designmodo.com/demo/checkout-panel/img/paypal_logo.png"/>
					<div class="radio-input">
						<input id="paypal" type="radio" name="payment">
						Pay with PayPal
					</div>
				</label>
				<label for="cash" class="method paypal">
					<img style="width: 120px;height: 35px;" src="https://tse1.mm.bing.net/th?id=OIP.5HmTsIK51vScEe8Q0odMPwHaEo&pid=Api&P=0&h=180"/>
					<div class="radio-input">
					  <input id="cash" type="radio" name="payment">
					  Pay with Cash
					</div>
				  </label>
			</div>
			<div class="input-fields">
				<div class="column-1">
					<label for="cardholder">Name</label>
					<input type="text" id="cardholder"/>
					<div class="small-inputs">
						<div>
							<label for="date">Valid date</label>
							<input type="text" id="date"/>
						</div>
						<div>
							<label for="verification">CVV / CVC *</label>
							<input type="password" id="verification"/>
						</div>
					</div>
				</div>
				<div class="column-2">
					<label for="cardnumber">Card Number</label>
					<input type="password" id="cardnumber"/>
					<span class="info">* CVV or CVC is the card security code, unique three digits number on the back of your card separate from its number.</span>
				</div>
			</div>
			<a href="{{ route('showCart') }}"><button class="purchase-btn-exit">Return to cart</button></a>
			<button class="purchase-btn"><a href="">Purchase</a></button>
		</div>
		<br>
		<br>
	</div>
	<script>
		document.addEventListener('DOMContentLoaded', function() {
			var methods = document.querySelectorAll('.method');
			methods.forEach(function(method) {
				method.addEventListener('click', function() {
					methods.forEach(function(item) {
						item.classList.remove('blue-border');
					});
					method.classList.add('blue-border');
				});
			});
			var purchaseBtn = document.querySelector('.purchase-btn');
			var cardInputs = document.querySelectorAll('.input-fields input');
			purchaseBtn.addEventListener('click', function() {
				cardInputs.forEach(function(input) {
					input.classList.remove('warning');
					if (!input.value) {
						input.classList.add('warning');
					}
				});
			});
		});
	</script>
</body>
</html>
