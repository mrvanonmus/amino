import requests
from user_agent import generate_user_agent
url = 'https://aminoapps.com/api/auth'

headers = {
"Accept": "*/*",
"Accept-Encoding": "gzip, deflate, br",
"Accept-Language": "en-US,en;q=0.5",
"Connection": "keep-alive",
"Content-Length": "645",
"Content-Type": "application/json",
"Cookie": "session=.eJwVik8LgjAcQL9K_M4dTO0ieDAUUdjG4hdju0jp8E-bhFjkxO-e8S4P3luheunJ3kc9zhDN01sfodGfvtZV30C0wuEBERCsQ4rcI7kyZLg5gl2nhjZQmC3Scp-6a0-dMSwtDU2TvRdnZZWRjgdkKPf3T2eZkAsR2ZelzZP6MqSiCJngJ4m7Y-IpvFjZxjFs2w-p0jNd.Yzo6Xg.Ag-qJuTmpqYD_yWU34SNto_pbNw; _ga_9SJ4LCCH1X=GS1.1.1664760414.4.0.1664760414.0.0.0; _ga=GA1.2.1816831851.1659449589; __auc=c6aca8ff1825ee73e41969b7330; gdpr_cookie_agreee=1; __qca=P0-1348985531-1659449591036; __gads=ID=7af8ec53a4efbdd8-228f399c7ad40027:T=1659449591:S=ALNI_MbqviJc1-NTTCarQ4b_THh5…BLED_IDPS=google; exp=60-0; GLAM-JID=ed0c1ac6010a4959897d1d56f8766836; GLAM-AID=0cd1ea264a1b4b109d5d8838bcf923c2; GLAM-SID=443403ef94f249608c68eb02ba6d388c; __j_state=%7B%22landing_url%22%3A%22https%3A%2F%2Faminoapps.com%2F%22%2C%22pageViews%22%3A1%2C%22prevPvid%22%3A%2259c30b86d10744acb7c0ef531c62a0b5%22%2C%22extreferer%22%3A%22https%3A%2F%2Faminoapps.com%2F%22%2C%22user_worth%22%3A0%7D; __asc=f0a506c21839b73fee75e199d64; AMP_TOKEN=%24NOT_FOUND; _gid=GA1.2.814864295.1664760415; _gat=1; qcSxc=1664760416819",
"Host": "aminoapps.com",
"Origin": "https://aminoapps.com",
"Referer": "https://aminoapps.com/",
"Sec-Fetch-Dest": "empty",
"Sec-Fetch-Mode": "cors",
"Sec-Fetch-Site": "same-origin",
"TE": "trailers",
"User-Agent": "Mozilla/5.0 (X11; Linux x86_64; rv:102.0) Gecko/20100101 Firefox/102.0",
"X-Requested-With": "xmlhttprequest"
}
mail = input("enter email")
password = input("enter password")
data = {
{
	"auth_type": 0,
	"email": mail,
	"recaptcha_challenge": "03AIIukzi7DFPXBGimLJ2hd0sMY3xFhQP48cGxEpoH5d362ScFRQ10lMOqHFgaR7WvqpmrrdjWhpVsj5KSbm05vZpSoQub7skE5yPq1XnbNIqrT0cNhZVfjI0hnJQmkErs_WWK7_6G9EhA--4Rsn-X1H7mqEZxarYDIREGPxvj_3WZikDO4BEXv9BpOyGIPJbBZQXkywG6vdQQi6CQB8Er6ph1ZY9DNZp8iJHzJ7gCZUV1xI2fo0IN0MrVLhHVAyVyJoGaGpNX-IWFurdMGFs7ZQes9UDMzlQ3ak3jowq1UrtGhpEVPRDUPvxqSnYQwN0tSWwfdQyvqUvYhBFkqMG44MRzOnH26n3qdRL1lBSeArofyh6NC_Btsdgx5vUc6zrb72Tygw9LJlPbuNAPMhyC4h0ZaKJbw3hUsGp7s3twHqxIcBG4sfI7qzXs_ffPrGQ0_TEAzv3SyCURlZO5_QpA23L-GZbXMBv6KCvUyhqwos4wyP0qnUKMerGzi7x20ZMLn07OL0t7H2QS",
	"recaptcha_version": "v3",
	"secret": password
}
}
req_sign = requests.post(url, headers=headers, data=data)
