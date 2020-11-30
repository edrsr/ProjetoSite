<?php
	include('pag_cabecalho.php');
	include('pag_menu.php');

?>

	<hr>
		<h3 align="center"> Ferramenta nmap no Debian 10! </h3>
	<hr>


	<div class="tutorialNmap">

		Primeiro passo é atualizar a lista de repositório do Linux.  Comando: <code> apt update </code> <br><br>
		Agora podemos realizar a instalação do nmap Comando: <code> apt install nmap -y</code> <br><br> 

		<p><img src="./img/tutoriais/nmap/1.png"></p>

		<p> No caso da minha rede, o comando seria inserido conforme informações a seguir: </p>

		<p> <code> nmap -sP 192.168.25.0/24 </code></p>

		<p><span style="font-size: 12pt;"> <img src="./img/tutoriais/nmap/2.png"></span></p>


		<p> A saída do comando seria: </p>


		<p>  <img src="./img/tutoriais/nmap/3.png"></p>

		<p>Colocando em um script </p>

 		<p>Na raiz do sistema, crie uma pasta chamada “PesquisaHosts” para guardar o arquivo. </p>

		<p> <code> mkdir PesquisaHosts </code></p>

		<p><img src="./img/tutoriais/nmap/4.png"></p>


		<p> Acesse a pasta: </p>

		<p> <code> cd PesquisaHosts/ </code> </p>

		<p><img src="./img/tutoriais/nmap/5.png"></p>


		<p>  Vamos criar o arquivo chamado “PesquisaHosts.sh” </p>
		<p> nano PesquisaHosts.sh </p>

		<p> <img src="./img/tutoriais/nmap/6.png"> </p>


		<p> Copie os comandos e ajuste de acordo com a sua rede</p>


			<pre class="language-markup">
				<code>

#!/bin/bash

echo "Descobrindo Hosts Ativos na Rede!"

echo ""

echo ""

nmap -sP 192.168.25.0/24

echo ""

echo ""

echo "Fim da descoberta!"

				</code>
			</pre>

		<p>  Verificando como ficaria: </p>

		<p> <img src="./img/tutoriais/nmap/8.png"> </p>


		<p> Ao finalizar, pressione CTRL + O, para salvar, pressione ENTER para confirmar e pressione CTRL + X para sair.</p>

		<p> <strong>Agora só precisamos conceder permissões de execução ao script.</p>

		<p> <code> chmod +x PesquisaHosts.sh </code></p>

		<p> <img src="./img/tutoriais/nmap/9.png" /></p>

		<p>Agora podemos executar o nosso script.</p>

		<p>Tenha certeza de que o usuário está no mesmo diretório que o script. Execute o comando a seguir: <br> <br> <code> ./PesquisaHosts.sh </code></p>

		<p> <img src="./img/tutoriais/nmap/10.png" /> </p>



		<p> Agora podemos executar o nosso script. </p>

		<p> Tenha certeza de que o usuário está no mesmo diretório que o script. Execute o comando a seguir: <br> <br><code> ./PesquisaHosts.sh </code></p>

		<br>

		<p> <img src="./img/tutoriais/nmap/11.png" /> </p>

		<p> O script está pronto!</span> </p>

		<p>Agora você pode personalizar da forma que achar melhor!</p>

	</div>


	<hr>
			<h1 align="center"> <a href="pag_cupons-e-promocoes.php"> Veja também as promoções mensais clicando  Aqui. </a> </h1>

			
	<hr>


<?php
	include('pag_rodape.php');
?>