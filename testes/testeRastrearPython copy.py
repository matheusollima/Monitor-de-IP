#!C:/Python312/python.exe
import nmap

# Cria uma instância do scanner Nmap
nm = nmap.PortScanner()

# Define o intervalo de IPs da sua rede local. Por exemplo, '192.168.1.0/24'.
# O argumento '-sn' é utilizado para realizar uma varredura de descoberta de hosts sem escanear portas.
nm.scan(hosts='192.168.248.1/24', arguments='-sn')
minha_lista = []
# Lista todos os hosts que responderam ao ping e estão ativos.
hosts_list = [(x, nm[x]['status']['state']) for x in nm.all_hosts()]
i = 0
total = len(hosts_list)
for host in hosts_list:
   minha_lista.append(host)

with open("C:\\Users\\mathe\\Desktop\\ip_lista.txt", 'w') as arquivo:
    for item in minha_lista:
        arquivo.write('{}\n'.format(item))