<form action="" method="post">
<center>
$~ Dev By <font color="red">You</font> :)<br>
<font color="red"> Username :<input type="text" name="sid"></font><br><br>
<font color="red"> Password :<input type="text" name="ndcId"></font><br><br>
<font color="red"> Password :<input type="text" name="threadId"></font><br><br>
<input type="submit" name="submit" value="join">
</center>
</form>
<?
$sid = $_POST['sid'];
$ndcId = $_POST['ndcId'];
$threadId = $_POST['threadId'];
$ch = curl_init(); 
curl_setopt($ch, CURLOPT_URL, "https://aminoapps.com/api/join-thread"); 
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
    'cookie: __auc=373aee411837ee3d860e791f4fe; GLAM-AID=763d0f7f3fb24e76acca7e7f129f76f1; qcSxc=1664281212385; __gads=ID=37ad5442b802996f:T=1664281212:S=ALNI_Mb-fiqis7n-D4e-pId1NAKYv3yoiA; __qca=P0-154781802-1664281212373; gdpr_cookie_agreee=1; G_ENABLED_IDPS=google; sid=$sid; exp=60-0; is_leader_amino_user=0; __asc=4a2eae541839b67f0ef859bb6d3; GLAM-JID=aef570347f044b4b8a65e854b043a808; GLAM-SID=37b289934e774f17a1367c2818837e1d; AMP_TOKEN=%24NOT_FOUND; _gid=GA1.2.1769920909.1664759625; __gpi=UID=00000aec928399dc:T=1664281212:RT=1664759626:S=ALNI_MYX69eJjJg7OcajqKRYFPTGeSW97w; __j_state=%7B%22landing_url%22%3A%22https%3A%2F%2Faminoapps.com%2F%22%2C%22pageViews%22%3A2%2C%22prevPvid%22%3A%225ee1c2f1528b48f5b8d9fded1130b88d%22%2C%22extreferer%22%3A%22https%3A%2F%2Faminoapps.com%2F%22%2C%22user_worth%22%3A0%7D; _ga_9SJ4LCCH1X=GS1.1.1664759628.3.1.1664759733.0.0.0; _ga=GA1.1.344657432.1664281212; session=.eJwNzMEKgjAYAOBXif_cYSVeBA-BJB42mUzH_1-kcuSmkxArnPju9T3At0H7MrO_TWZaIFnmtzlCZz72YVrbQbLB4Q4JcNX1GKqhzIUl33jSuJKuI8qujnyxcieZUOPAcwwYmpE0Z6XqPddyRYeMtPyWeX1CVcTCXWJSwvKcM5GNFs8yEo7-T2VFeDKSaQr7_gPJUzOy.Yzo50Q.7kBMDjA0Z8EKyny87ZXZEeHR0B8',
	'Sec-Fetch-Dest: empty',
    'Sec-Fetch-Mode: cors',
    'Sec-Fetch-Site: same-origin',
    'TE: trailers'
    ));
curl_setopt($ch, CURLOPT_POSTFIELDS, "ndcId=$ndcId&threadId=$threadId");
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
$check = curl_exec($ch);
if(eregi("true", $check))
	{
		echo "<center>join -> $ndcId:$threadId </center>";
	}
	else
	{
		if(eregi("checkpoint", $check))
		{
			echo "<center>joined But CheckPoint :( -> $ndcId:$threadId </center>";
		}
		else
		{
			if(eregi("Please wait a few minutes before you try again.", $check))
			{
				echo "<center> Use Proxy </center>";
			}
			else
			{
				echo "<center> Failed -> $ndcId:$threadId </center>";
			}
		}
	}
curl_close($ch);