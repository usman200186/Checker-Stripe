<?php

return $config = Array(

	// Enable test mode (not require HTTPS) 
	'test-mode'  => true,

	// Secret Key from Stripe.com Dashboard
	'secret-key' => 'sk_test_iTqlKDo0mt9IYC7ffRpXMYUR00nZALosKS',

	// Publishable Key from Stripe.com Dashboard
	'publishable-key' => 'pk_test_g6IHUf44KJ6RUbs8J7LH1pAN00pBg6npRP',

	// Where to send upon successful donation (must include http://)
	'thank-you'  => ' thankyou.html',

	// Who the email will be from.
	'email-from' => 'bobbiemarr438@gmail.com',

	// Who should be BCC'd on this email. Probably an administrative email.
	'email-bcc'  => 'bobbiemarr438@gmail.com',

	// Subject of email receipt
	'email-subject' => 'Obrigado por Doar!!',

	// Email message. %name% is the donor's name. %amount% is the donation amount
	'email-message' => "Oi seu bosta %name%,\n\nObrigado por doar %amount% moneys. Agora você se fodeo."

);
