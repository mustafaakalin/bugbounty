import os
import subprocess
from colorama import init, Fore, Style
from pathlib import Path

init(autoreset=True)

# Ana fonksiyon
def main():
    print(Fore.LIGHTYELLOW_EX + """\033[1m
1- Bugbounty
2- Pentest
    """)

    h = input(Fore.LIGHTGREEN_EX + "\033[1mChose: " + Style.RESET_ALL)

    if h == "1":
        bugbounty_process()
    elif h == "2":
        pentest_process()
    else:
        print(Fore.RED + "Invalid choice!")

# Bug bounty süreci
def bugbounty_process():
    print(Fore.LIGHTYELLOW_EX + """\033[1m
        1- Hackerone
        2- Bugcrownd
        3- Intigriti
        4- Hackenproof
        5- Yeswehack
        6- Immunefi
        7- Inspectiv
        8- Other
    """)

    platform = input(Fore.LIGHTGREEN_EX + "\033[1mPlatform Chose: " + Style.RESET_ALL)
    platform_dict = {
        "1": "Hackerone",
        "2": "Bugcrownd",
        "3": "Intigriti",
        "4": "Hackenproof",
        "5": "Yeswehack",
        "6": "Immunefi",
        "7": "Inspectiv",
        "8": "Other"
    }
    platform = platform_dict.get(platform, "Other")

    hedef = input(Fore.LIGHTMAGENTA_EX + "\033[1mTarget domain or ip : " + Style.RESET_ALL)

    # Dinamik olarak kullanıcı home klasörünü al
    home_dir = str(Path.home())
    path = f"{home_dir}/Documents/Bugbounty/{platform}/{hedef}"

    # Dosya ve klasör oluşturma ve komut çalıştırma işlemi
    run_commands(hedef, path)

# Pentest süreci
def pentest_process():
    print(Fore.LIGHTYELLOW_EX + """\033[1m
        1- Government [.gov]
        2- Education [.edu]
        3- Other
    """)
    pentesttls = input(Fore.LIGHTGREEN_EX + "\033[1mTLS Chose: " + Style.RESET_ALL)

    pentest_dict = {
        "1": "Government",
        "2": "Education",
        "3": "Other"
    }
    pentesttls = pentest_dict.get(pentesttls, "Other")

    hedef = input(Fore.LIGHTMAGENTA_EX + "\033[1mTarget domain or ip : " + Style.RESET_ALL)

    # Dinamik olarak kullanıcı home klasörünü al
    home_dir = str(Path.home())
    path = f"{home_dir}/Documents/Pentest/{pentesttls}/{hedef}"

    # Dosya ve klasör oluşturma ve komut çalıştırma işlemi
    run_commands(hedef, path)

# Komutları çalıştırma fonksiyonu
def run_commands(hedef, path):
    os.makedirs(path, exist_ok=True)
    os.chdir(path)

    # Komut dizisi (Nuclei dışındaki tüm komutlar sırayla çalışacak)
    commands = [
        f"subfinder -d {hedef} -active -o subdomains.txt -all",
        # f"amass enum -d {hedef} -o amass.txt",  # Amass ile alt alan bulma
    ]

    # Subfinder ve Amass komutlarını paralel çalıştır
    processes = []
    for command in commands:
        print(Fore.LIGHTBLUE_EX + f"Running command: {command}")
        process = subprocess.Popen(command, shell=True)
        processes.append(process)

    # Tüm süreçlerin bitmesini bekle
    for process in processes:
        process.wait()

    # Alt alanları birleştir ve DNS çözümlemesi yap cat subdomains.txt amass.txt | sort -u > all_subdomains.txt
    os.system(f"cat subdomains.txt  | sort -u > all_subdomains.txt")  # Tüm alt alanları birleştir
    os.system(f"cat all_subdomains.txt | dnsx -silent -a -resp-only | sort -u > dnsx.txt")  # DNS çözümleme
    os.system(f"cat all_subdomains.txt dnsx.txt > subs-hosts.txt")  # Tüm subdomainleri birleştir

    # Httprobe ile aktif URL'leri bul
    os.system(f"httprobe -c 100 < subs-hosts.txt > alive.txt")  # Aktif URL'leri bul

    # httpx komutunu ayrı çalıştır
    os.system(f"httpx -l subs-hosts.txt -o httpx.txt -dashboard")  # HTTP durum kodları

    # Diğer komutları sırayla çalıştır
    other_commands = [
        r"cat httpx.txt | gau --blacklist png,jpg,gif | sed 's/=\(.*\)$/=/' | grep '=' > gauparams.txt",  # Ham dizgi kullanımı URL parametreleri
        f"cat alive.txt | waybackurls > wayback.txt",  # Wayback Machine'den URL'leri al
        # GF ile çeşitli açıkları kontrol etme
         #f"cat wayback.txt | gf xss > xss.txt",  # XSS açıkları
         #f"cat wayback.txt | gf sqli > sqli.txt",  # SQL Injection açıkları
         #f"cat wayback.txt | gf lfi > lfi.txt",  # Local File Inclusion açıkları
         #f"cat wayback.txt | gf rce > rce.txt",  # Remote Code Execution açıkları
         #f"cat wayback.txt | gf ssrf > ssrf.txt",  # Server Side Request Forgery
         #f"katana -list httpx.txt -o katana.txt -em js,jsp,json -d 5",  # Katana taraması
        #f"uncover -l subs-hosts.txt -o uncover_output.txt",  # Uncover ile yeni açığa çıkan güvenlik açıklarını bulma
    ]

    # Sıralı komutların çalıştırılması
    processes = []
    for command in other_commands:
        print(Fore.LIGHTBLUE_EX + f"Running command: {command}")
        process = subprocess.Popen(command, shell=True)
        processes.append(process)

    # Nuclei komutlarının paralel çalıştırılması
    run_nuclei_parallel()

    # FFUF için tüm httpx.txt'deki domainlerde çalıştırma
    # ffuf_with_httpx()

# Nuclei komutlarını paralel çalıştırma fonksiyonu
def run_nuclei_parallel():
    nuclei_commands = [
        #f"/usr/bin/naabu -l subs-hosts.txt -o naabu.txt",  # Naabu ile port tarama
        f"nuclei -l httpx.txt -nmhe  -o results.txt -me report -stats -si 1800 -cloud-upload",  # misconfig taraması
        #f"nuclei -l httpx.txt -nmhe -t ~/Documents/Nuclei-Templates-Collection/**/ -o emadshanab_nuclei.txt -me emadshanabReport -stats -si 1800 -cloud-upload",
        #f"nuclei -l httpx.txt -nmhe -t ~/Documents/cent-nuclei-templates/ -o cent_nuclei.txt -me CentReport -stats -si 1800 -cloud-upload"
    ]

    processes = []

    # Nuclei komutlarını paralel çalıştır
    for nuclei_command in nuclei_commands:
        print(Fore.LIGHTBLUE_EX + f"Running Nuclei command: {nuclei_command}")
        process = subprocess.Popen(nuclei_command, shell=True)
        processes.append(process)

    # Tüm süreçlerin bitmesini bekle
    for process in processes:
        process.wait()

# FFUF ile httpx.txt dosyasındaki her bir subdomain için dizin keşfi
# def ffuf_with_httpx():
#     if not os.path.exists("httpx.txt"):
#         print(Fore.RED + "httpx.txt dosyası bulunamadı!")
#         return

#     # httpx.txt dosyasındaki her satırdaki hedef için ffuf çalıştırma
#     with open("httpx.txt", "r") as file:
#         for line in file:
#             domain = line.strip()
#             if domain:
#                 # URL'yi http:// ile başlat ve protokol olmadan çıkış dosyası adı oluştur
#                 protocol = "http://" if not domain.startswith("http") else ""
#                 output_filename = f"ffuf_results_{domain.replace('http://', '').replace('https://', '').replace('.', '_')}.txt"

#                 print(Fore.LIGHTBLUE_EX + f"FFUF ile {protocol}{domain} üzerinde dizin keşfi yapılıyor...")
#                 os.system(f"ffuf -u {protocol}{domain}/FUZZ -w /usr/share/wfuzz/wordlist/general/admin-panels.txt -o {output_filename}")

# Ana fonksiyonu başlat
if __name__ == "__main__":
    main()