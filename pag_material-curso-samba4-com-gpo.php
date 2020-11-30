<?php
	include('pag_cabecalho.php');
	include('pag_menu.php');

?>


<hr>
	<h3 align="center"> Configurando DHCP e compartilhando a internet no Debian 9.8! </h3>
<hr>
	<div class="tutorialTextoSambaTool">

			<p> A primeira coisa que devemos fazer é realizar a instalação de alguns pacotes.</p>

			<p> Lembrando que é sempre bom atualizar os repositórios com o comando apt-get update e logo após atualizar o sistema com o comando apt-get upgrade.</p>


			<p> Siga o passo a passo abaixo:</p>

			<p> Atualizando os repositórios: <code>apt-get update</code></p>

			<p> Atualizando o sistema: <code>apt-get upgrade</code></p>


			<p> Agora vamos começar a fazer as instalações dos serviços necessários.</p>
			 

			<p> 1 - Instalando o dhcp-server</p>

			<p> <code>apt install isc-dhcp-server</code></p>


			<p> 2 - Uma vez instalado o dhcp-server, é hora de configurar o arquivo dhcpd.conf</p>

			<p> Como root acesse o caminho abaixo:</p>

			<p> <code> nano /etc/dhcp/dhcpd.conf</code></p>


			<p> Obs.: Considerando que o meu domínio é: samba4.local e minha faixa de rede é 10.10.10.0</p>

			<p>         O ip do meu servidor Debian é 10.10.10.1 e do meu link externo é 192.168.25.16</p>

			 

			<p> <code> option domain-name "samba4.local"; </code></p>
			<p> <code> option domain-name-servers 10.10.10.1, 192.168.25.16; </code></p>

			<p> Descomente a linha abaixo:</p>
			<p>
				<code> #authoritative; </code>
			</p>

			<p> No final do arquivo acrescenta</p>

			
				
			
			<code>
					
				subnet 10.10.10.0 netmask 255.255.255.0 { <br>
				option routers 10.10.10.1;<br>
				option subnet-mask 255.255.255.0;<br>
				range dynamic-bootp 10.10.10.21 10.10.10.240;<br>
				}<br>
			</code>
				
			

			<p> 3 - Definindo em qual interface vai rodar o dhcp</p>
			<p> Considere que o nome da minha placa de rede  que vai distribuir o dhcp é "enp0s8".</p>

			<p> Como usuário root, acesse:</p>

			<p> <code>nano /etc/default/isc-dhcp-server </code></p>

			<p><code>INTERFACE="enp0s8"</code> --> Definindo em que placa será atribuido o dhcp</p>


			<p> Restart o dhcp-server</p>

			<p> 4 - <code>systemctl restart isc-dhcp-server</code></p>


			<p> Na dúvida, reinicia o servidor para validar o serviço.</p>

			<p> 6 - <code>reboot</code></p>


			<p> Verifique o status do dhcp no servidor</p>

			<p> 7 - <code>systemctl status isc-dhcp-server</code></p>

			<p> 8 - Testa o dhcp no cliente</p>



			<p> Uma vez configurado o dhcp, é hora de compartilhar a internet na rede interna.</p>
			 

			<p> 9 - Compartilhando a internet</p>

			<p> Como root, acesse:</p>

			<p> <code>nano /etc/sysctl.conf</code></p>
			 

			<p> Procura a linha: <code>#net.ipv4.ip_forwarder=1</code></p>

			<p> Descomenta: <code>net.ipv4.ip_forwarder=1</code></p>

			 

			<p> 10 - Verifique se o retorno é o esperado.</p>

			<p> <code>cat /proc/sys/net/ipv4/ip_forward</code></p>
			<p> Retorna 0 --> Não permite encaminhamento</p>


			<p> Agora execute o comando abaixo para validar a configuração.</p>

			<p> 11 - <code>sysctl -p</code></p>
			 

			<p> 12 - Verificando novamente a configuração</p>
			<p> <code>cat /proc/sys/net/ipv4/ip_forward</code></p>

			<p> Retorna 1 --> Permite encaminhamento</p>


			 

			<p> 13 - Por último, vamos configura o iptables para compartilhar a internet.</p>

			<p> <code>iptables --table nat --append POSTROUTING --out-interface enp0s3 -j MASQUERADE</code> --> Compartilhando internet da enp0s3</p>
			<p> <code>iptables --append FORWARD --in-interface enp0s8 -j ACCEPT </code>--> Recebendo encaminhamento</p>

			<p> 14 Instalação iptable-persistent --> Caso não instale as regras serão perdidas ao reiniciar.</p>

			<p> <code>iptables -L</code></p>
			<p> <code>iptables -L -t nat</code></p>

			<p> <code>apt-get install iptables-persistent</code></p>

			<p> <code>yes</code></p>

			<p> Pronto! Se correu tudo bem, sua rede interna já está com dhcp e internet liberada normalmente.</p>

			<p> Lembrando que esta configuração e muito mais estão em nossos cursos. Caso tenha interesse acesse o menu "Nossos Cursos" ou "Realizar Matrícula" para realizar a matrícula nos cursos.</p>

			<p> Até a próxima e bons estudos!</p>
<hr>
			<h1 align="center"> <a href="pag_cupons-e-promocoes.php"> Veja também as promoções mensais clicando  Aqui. </a> </h1>

			
<hr>		

	</div>


<hr>


<?php
	include('pag_rodape.php');

?>