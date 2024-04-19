#!C:/Python312/python.exe
import nmap
import json
# Cria uma instância do scanner Nmap
nm = nmap.PortScanner()

# Define o intervalo de IPs da sua rede local. Por exemplo, '192.168.1.0/24'.
# O argumento '-sn' é utilizado para realizar uma varredura de descoberta de hosts sem escanear portas.
nm.scan(hosts='192.168.248.1-254', arguments='-sn')
minha_lista = []
# Lista todos os hosts que responderam ao ping e estão ativos.
hosts_list = [(x, nm[x]['status']['state']) for x in nm.all_hosts()]
for host, status in hosts_list:
    minha_lista.append('{0}'.format(host))
i = 0
total = len(minha_lista)
final = total - 1
print(json.dumps(minha_lista))



"""
while(i<=final):
    print(minha_lista[i])
    #print("<br>") 
    i+=1
"""

    