<?php
function generateClientRawContent($message){
	return "
Merci pour votre mail !
Nous répondrons rapidement à votre demande. Pensez à consulter votre client de messagerie
Votre demande:
{$message}
À bientôt.";
}

function generateClientHtmlContent($message) {
	return "
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">

<html xmlns:v=\"urn:schemas-microsoft-com:vml\">
<head>
	<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\">
	<meta name=\"viewport\" content=\"width=device-width; initial-scale=1.0; maximum-scale=1.0;\">
    <link href=\"https://fonts.googleapis.com/css?family=Roboto\" rel=\"stylesheet\">
	<title>Merci pour votre mail !</title>
</head>
<body leftmargin=\"0\" topmargin=\"0\" marginwidth=\"0\" marginheight=\"0\">

	<table bgcolor=\"#E9E9E9\" width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
		<tbody>
			<tr>
				<td height=\"40\" style=\"font-size: 40px; mso-line-height-rule: exactly; line-height: 40px;\">&nbsp;</td>
			</tr>
			<tr>
				<td align=\"center\" style=\"text-align:center\">
					<a href=\"https://sysmod.fr\">
						<img src=\"https://sysmod.fr/images/logo.png\" alt=\"Logo de Sysmod\" border=\"0\">
					</a>
				</td>
			</tr>
			<tr>
				<td height=\"40\" style=\"font-size: 40px; mso-line-height-rule: exactly; line-height: 40px;\">&nbsp;</td>
			</tr>
			<tr>
		</tbody>
	</table>

	<table width=\"500\" align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
		<tbody>
			<tr>
				<td height=\"40\" style=\"font-size: 40px; mso-line-height-rule: exactly; line-height: 40px;\">&nbsp;</td>
			</tr>
			<tr>
				<td height=\"30\" align=\"center\" style=\"font-family: 'Roboto', sans-serif;color:#1c1c1c; text-align:center; font-size: 30px; mso-line-height-rule: exactly; line-height: 30px;\">
					Merci pour <span style=\"color: #FF5D00\">votre mail</span> !
				</td>
			</tr>
			<tr>
				<td height=\"10\" style=\"font-size: 10px; mso-line-height-rule: exactly; line-height: 10px;\">&nbsp;</td>
			</tr>
			<tr>
				<td align=\"center\" height=\"16\" style=\"font-family: 'Roboto', sans-serif;color:#1c1c1c; font-size: 16px; mso-line-height-rule: exactly; line-height: 16px;\">
					Nous répondrons rapidement à votre demande. Pensez à consulter votre client de messagerie !
				</td>
			</tr>
			<tr>
				<td height=\"40\" style=\"font-size: 40px; mso-line-height-rule: exactly; line-height: 40px;\">&nbsp;</td>
			</tr>
			<tr>
				<td height=\"20\" align=\"left\" style=\"font-family: 'Roboto', sans-serif;color:#1c1c1c; text-align:left; font-size: 20px; mso-line-height-rule: exactly; line-height: 20px;\">
					Votre <span style=\"color: #FF5D00\">demande</span>:
				</td>
			</tr>
			<tr>
				<td height=\"10\" style=\"font-size: 10px; mso-line-height-rule: exactly; line-height: 10px;\">&nbsp;</td>
			</tr>
			<tr>
				<td align=\"left\" style=\"font-style: italic; font-family: 'Roboto', sans-serif;color:#1c1c1c; text-align:left;\">
					\"{$message}\"
				</td>
			</tr>
			<tr>
				<td height=\"40\" style=\"font-size: 40px; mso-line-height-rule: exactly; line-height: 40px;\">&nbsp;</td>
			</tr>
			<tr>
				<td height=\"30\" align=\"center\" style=\"font-family: 'Roboto', sans-serif;color:#1c1c1c; text-align:center; font-size: 30px; mso-line-height-rule: exactly; line-height: 30px;\">
					À <span style=\"color: #FF5D00\">bientôt</span> !
				</td>
			</tr>
		</tbody>
	</table>

</body>
</html>";
}

function generateAdminHtmlContent($senderName, $senderMail, $senderPhone, $message) {
	return "
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">

<html xmlns:v=\"urn:schemas-microsoft-com:vml\">
<head>
	<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\">
	<meta name=\"viewport\" content=\"width=device-width; initial-scale=1.0; maximum-scale=1.0;\">
    <link href=\"https://fonts.googleapis.com/css?family=Roboto\" rel=\"stylesheet\">
	<title>Demande de contact - sysmod.fr</title>
</head>
<body leftmargin=\"0\" topmargin=\"0\" marginwidth=\"0\" marginheight=\"0\">

	<table bgcolor=\"#E9E9E9\" width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
		<tbody>
			<tr>
				<td height=\"40\" style=\"font-size: 40px; mso-line-height-rule: exactly; line-height: 40px;\">&nbsp;</td>
			</tr>
			<tr>
				<td align=\"center\" style=\"text-align:center\">
					<a href=\"https://sysmod.fr\">
						<img src=\"https://sysmod.fr/images/logo.png\" alt=\"Logo de Sysmod\" border=\"0\">
					</a>
				</td>
			</tr>
			<tr>
				<td height=\"40\" style=\"font-size: 40px; mso-line-height-rule: exactly; line-height: 40px;\">&nbsp;</td>
			</tr>
			<tr>
		</tbody>
	</table>

	<table width=\"500\" align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
		<tbody>
			<tr>
				<td height=\"40\" style=\"font-size: 40px; mso-line-height-rule: exactly; line-height: 40px;\">&nbsp;</td>
			</tr>
			<tr>
				<td height=\"30\" align=\"center\" style=\"font-family: 'Roboto', sans-serif;color:#1c1c1c; text-align:center; font-size: 30px; mso-line-height-rule: exactly; line-height: 30px;\">
					Nouvelle demande de <span style=\"color: #FF5D00\">contact</span> !
				</td>
			</tr>
			<tr>
				<td height=\"10\" style=\"font-size: 10px; mso-line-height-rule: exactly; line-height: 10px;\">&nbsp;</td>
			</tr>
			<tr>
				<td align=\"center\" height=\"16\" style=\"font-family: 'Roboto', sans-serif;color:#1c1c1c; font-size: 16px; mso-line-height-rule: exactly; line-height: 16px;\">
					Un client a envoyé un mail depuis le formulaire de contact !
				</td>
			</tr>
			<tr>
				<td height=\"40\" style=\"font-size: 40px; mso-line-height-rule: exactly; line-height: 40px;\">&nbsp;</td>
			</tr>
			<tr>
				<td height=\"20\" align=\"left\" style=\"font-family: 'Roboto', sans-serif;color:#1c1c1c; text-align:left; font-size: 20px; mso-line-height-rule: exactly; line-height: 20px;\">
					La <span style=\"color: #FF5D00\">demande</span>:
				</td>
			</tr>
			<tr>
				<td height=\"10\" style=\"font-size: 10px; mso-line-height-rule: exactly; line-height: 10px;\">&nbsp;</td>
			</tr>
			<tr>
				<td align=\"left\" style=\"font-style: italic; font-family: 'Roboto', sans-serif;color:#1c1c1c; text-align:left;\">
					Nom: {$senderName}<br/>
					Mail: <a href='mailto:{$senderMail}'>{$senderMail}</a><br/>
					Téléphone: {$senderPhone}<br/>
					Message: \"{$message}\"
				</td>
			</tr>
			<tr>
				<td height=\"40\" style=\"font-size: 40px; mso-line-height-rule: exactly; line-height: 40px;\">&nbsp;</td>
			</tr>
			<tr>
				<td height=\"30\" align=\"center\" style=\"font-family: 'Roboto', sans-serif;color:#1c1c1c; text-align:center; font-size: 30px; mso-line-height-rule: exactly; line-height: 30px;\">
					<span style=\"color: #FF5D00\">Répond</span> vite !
				</td>
			</tr>
		</tbody>
	</table>

</body>
</html>";
}

function generateAdminRawContent($senderName, $senderMail, $senderPhone, $message){
	return "
Nouvelle prise de contact!
Nom: {$senderName}
Mail: {$senderMail}
Téléphone: {$senderPhone}
Message: \"{$message}\"
";
}
