<?php

$field_first_name = $_POST['contact_names'];

$field_email = $_POST['contact_email'];

$field_message = $_POST['contact_message'];

$mail_to = 'mcameron@avalanche.com.au';

$subject = 'Message from an Avalanche.com.au site visitor '.$field_first_name;

$body_message = 'From: '.$field_first_name."\n";

$body_message .= 'E-mail: '.$field_email."\n";

$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";

$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);


if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		//alert('Thank you for the message. We will contact you shortly.');
		window.location = 'index.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		//alert('Message failed. Please, send an email to info@avalanche.com.au');
		window.location = 'index.html';
	</script>
<?php
}