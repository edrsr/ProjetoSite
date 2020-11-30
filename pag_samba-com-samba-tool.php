<?php

  include('pag_cabecalho.php');
  include('pag_menu.php');
  
?>
	


	<hr>

	<h3 align="center"> Trabalhando com samba-tool no Samba4! </h3>

	<hr>

			<div class="tutorialSambatool">
				<p><strong>Olá pessoal, tudo bem?</strong></p>
			<p><strong>Neste tutorial iremos apresentar algumas opções do comando samba-tool.</strong> </p>
			<p><strong>Utilizando samba-tool para administrar o domínio samba4 na versão 4.12.2</strong></p>
			<p><strong>Utilizaremos as seguintes versões dos sistemas:</strong></p>
			<p> </p>

			</div>
			

				<hr>
				<h3 align="center"> Montagem do laboratório utilizando o Virtualbox!</h3>
				<hr>

				<table id="customers2">
				  <tr>
				    <td>VM</td>
				    <td>CONFIGURAÇÃO</td>
				    <td>FUNÇÃO</td>
				    <td>LINK DOWNLOAD</td>
				  </tr>
				    <tr>
				    <td>PfSense 2.4.5</td>
				    <td>512 MB de RAM</td>
				    <td>Firewall de borda.</td>
				    <td>https://www.pfsense.org/download/</td>
				  </tr>
				  <tr>
				    <td>Debian 10. 4</td>
				    <td>1024 MB de RAM</td>
				    <td>Como controlador de domínio AD DC.</td>
				    <td>https://saimei.ftp.acc.umu.se/debian-cd/current/amd64/iso-cd/debian-10.4.0-amd64-netinst.iso</td>
				  </tr>
				  <tr>
				    <td>Windows 10 Pro</td>
				    <td>6197 MB de RAM</td>
				    <td>Acesso via RSAT para Administrar o domínio.</td>
				    <td>https://www.microsoft.com/pt-br/software-download/windows10</td>
				  </tr>
				  <tr>
				    <td>Samba 4.12.2</td>
				    <td>Instalada no Debian</td>
				    <td>Serviço AD</td>
				    <td>https://download.samba.org/pub/samba/stable/samba-4.12.2.tar.gz</td>
				  </tr>
				  
				</table>

				<hr>
				<h3 align="center"> Configuração de Rede!</h3>
				<hr>
				


				<table id="customers6">
				  
				  
				  <tr>
				    <td>MÁQUINA</td>
				    <td>IP</td>
				    <td>MÁSCARA</td>
				    <td>GATEWAY</td>
				    <td>DNS</td>
				  </tr>
				    <tr>
				    <td>SRVFW001</td>
				    <td>10.10.10.1</td>
				    <td>255.255.255.0</td>
				    <td>10.10.10.1</td>
				    <td>8.8.8.8, 8.8.4.4</td>
				  </tr>
				  <tr>
				    <td>SRVDC001</td>
				    <td>10.10.10.2</td>
				    <td>255.255.255.0</td>
				    <td>10.10.10.1</td>
				    <td>10.10.10.1</td>
				  </tr>
				  <tr>
				    <td>DKTRSR001</td>
				    <td>10.10.10.22</td>
				    <td>255.255.255.0</td>
				    <td>10.10.10.1</td>
				    <td>10.10.10.1</td>
				  </tr>
				  
				</table>

		

		<hr>



	<div class="tutorialSambatool">

			<br>
			
			<p><strong>O primeiro comando que irei mostrar tem por objetivo mostrar as opções da ferramenta samba-tool</strong></p><br><br>
			<p><strong>Verificando opções do comando samba-tool:</strong></p><br>
			<p><strong><img src="./img/tutoriais/samba_tool/1.png" alt="" width="600" height="511" /><br /> </strong></p><br>
			<p><strong>Agora vamos verificar as informações sobre o nosso domínio.</strong></p><br>
			<p><strong>Para tanto, apenas aponto para o ip do nosso controlador de domínio.</strong></p><br>
			<p><strong> <img src="./img/tutoriais/samba_tool/2.png" alt="" width="600" height="271" /></strong></p><br>
			<p><strong> </strong></p>
			<p><strong>Agora quero exibir informações sobre o nível funcional do meu domínio e da minha floresta.</strong></p><br>
			<p><strong> <img src="./img/tutoriais/samba_tool/3.png" alt="" width="600" height="178" /></strong></p><br>
			<p><strong>Caso eu queira visualizar todos os usuários do domínio é só executar o comando abaixo:</strong></p><br>
			<p><strong> </strong><strong> <img src="./img/tutoriais/samba_tool/4.png" alt="" width="600" height="187" /></strong></p><br>
			<p><strong>Se eu quiser verificar os grupos, altero apenas a opção correspondente:</strong></p><br>
			<p><strong> <img src="./img/tutoriais/samba_tool/5.png" alt="" width="600" height="930" /></strong></p><br>
			<p><strong>Agora vamos listar todas as GPOs do nosso domínio.</strong></p><br>
			<p> <img src="./img/tutoriais/samba_tool/6.png" alt="" width="600" height="215" /></p><br>
			<p><strong>Caso eu queira descobrir de quais GPOs o usuário administrator faz parte executo o comando abaixo:</strong></p><br>
			<p> <img src="./img/tutoriais/samba_tool/7.png" alt="" width="600" height="145" /></p><br>
			<p><strong>Definindo quantidade de dias para expiração da senha do usuário administrator.</strong></p><br>
			<p><strong>Primeiro defino 0 dias, depois defino 30 dias e por último defino 45 dias para expiração da senha.</strong></p><br>
			<p><strong> </strong><strong> <img src="./img/tutoriais/samba_tool/8.png" alt="" width="600" height="247" /></strong></p><br>
			<p><strong>Caso eu queira que a senha do usuário administrator nunca expire, uso o comando abaixo:</strong></p><br>
			<p><strong><img src="./img/tutoriais/samba_tool/9.png" alt="" width="600" height="144" /></strong></p><br>
			<p><strong>Para habili</strong><strong>tar a expiração é só usar novamente o comando com a quantidade de dias.</strong></p><br>
			<p><strong> </strong><strong>Caso eu queira alterar a senha do usuário administrator.</strong></p><br>
			<p><strong> <img src="./img/tutoriais/samba_tool/10.png" alt="" width="600" height="147" /></strong></p><br>
			<p><strong>Criando usuários no samba4 com samba-tool:</strong></p><br>
			<p><strong><img src="./img/tutoriais/samba_tool/11.png" alt="" width="600" height="99" /></strong></p><br>
			<p><strong>Listando usuários no samba4 com samba-tool:</strong></p><br>
			<p><strong> <img src="./img/tutoriais/samba_tool/12.png" alt="" width="600" height="193" /></strong></p><br>
			<p><strong>Alterando a senha do usuário ednaldo e forçando a troca da senha no próximo login.</strong></p><br>
			<p><strong> <img src="./img/tutoriais/samba_tool/13.png" alt="" width="600" height="91" /></strong></p><br>
			<p><strong> Criando grupos no samba4 com samba-tool.</strong></p><br>
			<p><strong><img src="./img/tutoriais/samba_tool/14.png" alt="" width="600" height="135" /></strong></p><br>
			<p><strong>Listando grupos.</strong></p><br>
			<p><strong><img src="./img/tutoriais/samba_tool/15.png" alt="" width="600" height="696" /></strong></p><br>
			<p><strong>Criando grupo e adicionando uma descrição.</strong></p><br>
			<p><strong><img src="./img/tutoriais/samba_tool/16.png" alt="" width="600" height="70" /></strong></p><br>
			<p><strong>Verificando no AD via RSAT.</strong></p><br>
			<p><strong> <img src="./img/tutoriais/samba_tool/17.png" alt="" width="600" height="273" /></strong></p><br>
			<p><strong>Desabilitando usuário e verificando no AD.</strong></p><br>
			<p><strong><img src="./img/tutoriais/samba_tool/18.png" alt="" width="600" height="102" /></strong></p><br>
			<p><strong>Verificando no AD via RSAT.</strong></p><br>
			<p><strong><img src="./img/tutoriais/samba_tool/19.png" alt="" width="600" height="520" /></strong></p><br><br>
			<p><strong>Habilitando usuário e conferindo no AD.</strong></p><br>
			<p><img src="./img/tutoriais/samba_tool/20.png" alt="" width="600" height="89" /></p><br>
			<p><strong>Verificando no AD via RSAT.</strong></p><br>
			<p><strong> <img src="./img/tutoriais/samba_tool/21.png" alt="" width="600" height="89" /></strong></p><br>
			<p><img src="./img/tutoriais/samba_tool/21.png" alt="" width="600" height="520" /></strong></p><br>
			<p><strong>Criando usuários com outras informações. Adicionando Título e Companhia.</strong></p><br>
			<p><strong> <img src="./img/tutoriais/samba_tool/22.png" alt="" width="600" height="84" /></strong></p><br>
			<p><strong>Verificando no AD via RSAT.</strong></p><br>
			<p><strong> <img src="./img/tutoriais/samba_tool/23.png" alt="" width="600" height="517" /></strong></p><br>
			<p><strong>Outras opções de criação de usuários.</strong></p><br>
			<p><strong>Continuação...</strong></p><br>
			<p><strong> <img src="./img/tutoriais/samba_tool/24.png" alt="" width="600" height="494" /></strong></p><br>
			<p><strong> </strong><strong>Continuação...</strong></p><br>
			<p><strong> <img src="./img/tutoriais/samba_tool/25.png" alt="" width="600" height="587" /></strong></p><br>
			<p><strong> </strong><strong>Continuação...</strong></p><br>
			<p><strong> <img src="./img/tutoriais/samba_tool/26.png" alt="" width="600" height="568" /></strong></p><br>
			<p><strong>Continua...</strong></p><br>
			<p><strong><img src="./img/tutoriais/samba_tool/27.png" alt="" width="600" height="475" /></strong></p><br>
			<p><strong>Adicionando usuários a grupos. Adicionando o usuário ednaldo ao grupo G_Internet.</strong></p><br>
			<p><strong><img src="./img/tutoriais/samba_tool/28.png" alt="" width="600" height="116" /></strong></p><br>
			<p><strong>Listando os usuários membros de um grupo. Membros do grupo G_Internet.</strong></p><br>
			<p><strong><img src="./img/tutoriais/samba_tool/29.png" alt="" width="600" height="94" /></strong></p><br>
			<p><strong>Verificando no AD via RSAT.</strong></p><br>
			<p> <img src="./img/tutoriais/samba_tool/30.png" alt="" width="600" height="518" /></p><br>
			<p><strong>Removendo usuários de grupos no samba4 com samba-tool.</strong></p><br>
			<p><strong>Excluindo o usuário ednaldo do grupo G_Internet.</strong></p><br>
			<p><strong><img src="./img/tutoriais/samba_tool/31.png" alt="" width="600" height="83" /></strong></p><br>
			<p><strong>Confirmando exclusão do usuário ednaldo do grupo G_Internet.</strong></p><br>
			<p><strong> <img src="./img/tutoriais/samba_tool/32.png" alt="" width="600" height="97" /></strong></p><br>
			<p><strong>Verificando no AD via RSAT.</strong></p><br>
			<p><strong> <img src="./img/tutoriais/samba_tool/33.png" width="600" height="519" /></strong></p><br>
			<p><strong>Criando OUs no samba4 com samba-tool.</strong></p><br>
			<p><strong>Criando a OU Infraestrutura.</strong></p><br>
			<p><strong><img src="./img/tutoriais/samba_tool/34.png" alt="" width="600" height="90" /></strong></p><br>
			<p><strong>Verificando no AD via RSAT.</strong></p><br>
			<p> <img src="./img/tutoriais/samba_tool/35.png" alt="" width="600" height="288" /> </p><br>
			<p><strong>Movendo usuários de OU. </strong></p><br>
			<p><strong>Movendo usuário Ednaldo da ou Users, para a OU Infraestrutura.</strong></p><br>
			<p><strong><img src="./img/tutoriais/samba_tool/36.png" alt="" width="600" height="62" /></strong></p><br>
			<p><strong>Visualizando no ad via RSAT,</strong></p><br>
			<p><strong> <img src="./img/tutoriais/samba_tool/37.png" alt="" width="600" height="128" /></strong></p><br>
			<p><strong>Fim!</strong> </p><br>

			

	</div>

		<hr>

			<h1 align="center"> <a href="pag_cupons-e-promocoes.php"> Veja também as promoções mensais clicando  Aqui. </a> </h1>
			
		<hr>


<?php

  include('pag_rodape.php');
  
?>