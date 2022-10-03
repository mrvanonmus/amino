from email import header
import requests
from user_agent import generate_user_agent
url = 'https://aminoapps.com/api/add-chat-message'
sid = input("enter sid")
headers = {
"accept": "*/*",
"accept-encoding": "gzip, deflate, br",
"accept-language": "ar-AE,ar;q=0.9,en-US;q=0.8,en;q=0.7",
"content-length": 2559,
"content-type": "application/json",
"cookie": "__auc=373aee411837ee3d860e791f4fe; GLAM-AID=763d0f7f3fb24e76acca7e7f129f76f1; qcSxc=1664281212385; __gads=ID=37ad5442b802996f:T=1664281212:S=ALNI_Mb-fiqis7n-D4e-pId1NAKYv3yoiA; __qca=P0-154781802-1664281212373; gdpr_cookie_agreee=1; G_ENABLED_IDPS=google; sid={sid}; exp=60-0; is_leader_amino_user=0; __asc=4a2eae541839b67f0ef859bb6d3; GLAM-JID=aef570347f044b4b8a65e854b043a808; GLAM-SID=37b289934e774f17a1367c2818837e1d; AMP_TOKEN=%24NOT_FOUND; _gid=GA1.2.1769920909.1664759625; __gpi=UID=00000aec928399dc:T=1664281212:RT=1664759626:S=ALNI_MYX69eJjJg7OcajqKRYFPTGeSW97w; __j_state=%7B%22landing_url%22%3A%22https%3A%2F%2Faminoapps.com%2F%22%2C%22pageViews%22%3A2%2C%22prevPvid%22%3A%225ee1c2f1528b48f5b8d9fded1130b88d%22%2C%22extreferer%22%3A%22https%3A%2F%2Faminoapps.com%2F%22%2C%22user_worth%22%3A0%7D; _ga_9SJ4LCCH1X=GS1.1.1664759628.3.1.1664759733.0.0.0; _ga=GA1.1.344657432.1664281212; session=.eJwNzMEKgjAYAOBXif_cYSVeBA-BJB42mUzH_1-kcuSmkxArnPju9T3At0H7MrO_TWZaIFnmtzlCZz72YVrbQbLB4Q4JcNX1GKqhzIUl33jSuJKuI8qujnyxcieZUOPAcwwYmpE0Z6XqPddyRYeMtPyWeX1CVcTCXWJSwvKcM5GNFs8yEo7-T2VFeDKSaQr7_gPJUzOy.Yzo50Q.7kBMDjA0Z8EKyny87ZXZEeHR0B8",
"origin": "https://aminoapps.com",
"referer": "https://aminoapps.com/",
"sec-ch-ua": "Google Chrome";v="105", "Not)A;Brand";v="8", "Chromium";v="105",
"sec-ch-ua-mobile": "?0",
"sec-ch-ua-platform": "Linux",
"sec-fetch-dest": "empty",
"sec-fetch-mode": "cors",
"sec-fetch-site": "same-origin",
"user-agent": "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36",
"x-requested-with": "xmlhttprequest"
}
msg = input("enter msg")
ndcid = input("enter ndcid")
threadId = input("enter threadId")
data = {
	"clientRefId": 0,
	"content": msg,
	"createdTime": "2022-10-03T01:39:22Z",
	"mediaType": 0,
	"sendFailed": false,
	"type": 0,
	"ndcId": ndcid,
	"threadId": threadId
}
req_sign = requests.post(url, headers=headers, data=data)