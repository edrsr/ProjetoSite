<?php

  include('pag_cabecalho.php');
  include('pag_menu.php');
  
?>
	


	<hr>

	<h3 align="center"> Recuperando senha no Linux Mint! </h3>

	<hr>

	<div class="tutorialRecuperaSenha">

			<p> Olá pessoal, tudo bem? </p>

			Este tutorial visa ajudar pessoas que querem recuperar o acesso a sua conta do sistema Linux. <br><br>

			Utilizarei o Linux Mint, mas vale para qualquer sistema que faça parte desta distribuição e até para os demais sistemas.<br><br>

			Mostrarei a maneira que acho que seja a mais eficiente na hora de recuperar o acesso a uma conta em que a senha foi esquecida ou perdida.<br><br>

			Utilizarei uma máquina virtual criada no Virtualbox. Para baixar o virtualbox, acesse o link a seguir: <br><br><code>https://www.virtualbox.org/wiki/Downloads</code><br><br>

			Primeiro Vejamos que o acesso não pode ser realizado com o único usuário que temos que é o usuário "ednaldo - ednaldo Mendes de Araújo".<br><br>

			<p>
				<img src="./img/tutoriais/senhaLinux/1.png" width="600" height="314">
			</p>

			Vamos reiniciar nosso computador e começar as configurações necessárias.<br><br>

			Neste momento precisamos pressionar repetidamente a tecla "esc" para nos permitir acessar as opções do grub.<br><br>


			<p>
				<img src="./img/tutoriais/senhaLinux/2.png" width="600" height="314">
			</p>
			 

			Neste momento pressionaremos a tecla "e", para acessar as opções do grub onde me permite alterar a maneira como o linux irá iniciar.<br><br>

			<p>
				<img src="./img/tutoriais/senhaLinux/3.png" width="600" height="314">
			</p>

			Navegue até a linha que inicia por "linux /boot/vmlinux-....", vá até o final da linha com a seta do teclado que aponta para a direita ou pressionando a tecla "end".<br><br>

			Altere apenas as opções: "ro quiet splash" para "rw init=/bin/bash", conforme imagem abaixo:<br><br>

			<p>
				<img src="./img/tutoriais/senhaLinux/4.png" width="600" height="314">
			</p>

			 

			A alteração acima nos permite acessar um shell bash onde será possível realizar alterações no nosso sistema. <br><br>

			Agora vamos voltar o cursor "_" para o início da linha, pressionar "F10" para salvar as alterações e reinicar o sistema já no terminal.<br><br>


			<p>
				<img src="./img/tutoriais/senhaLinux/5.png" width="600" height="314">
			</p>
			 

			Na tela abaixo já podemos perceber que o linux reiniciou no prompt de comando e com o usuário root.<br><br>

			<p>
				<img src="./img/tutoriais/senhaLinux/6.png" width="600" height="314">
			</p>

			Na tela abaixo, mostro onde ficam armazenadas as senhas inclusive a senha do usuário root.<br><br>

			Comando: cat /etc/gshadow | less<br><br>

			<p>
				<img src="./img/tutoriais/senhaLinux/7.png" width="600" height="314">
			</p>

			Veja o arquivo aberto na tela abaixo!<br><br><br>

			Para sair, digite "q".<br><br>

			<p>
				<img src="./img/tutoriais/senhaLinux/8.png" width="600" height="314">
			</p>

			Na imagem abaixo iremos alterar os pontos de montagem para permitir que o linux grave as informações que iremos realizar.<br><br>

			Comandos:<br><br>

			mount -o remount,rw / --> "-a" monta a partição para leitura/gravação enquanto que "-r" monta a partição somente para leitura.<br><br>

			mount -a --> monta todos os sistemas de arquivos especificados no arquivo "/etc/fstab"<br><br>

			nano /etc/shadow --> Acessa o arquivo shadow para alteração da senha do root.<br><br>

			<p>
				<img src="./img/tutoriais/senhaLinux/9.png" width="600" height="314">
			</p>

			Visão da senha do usuário root.<br><br>

			<p>
				<img src="./img/tutoriais/senhaLinux/10.png" width="600" height="314">
			</p>

			Apagando a senha do usuário root.<br><br>

			Observe que no meu caso ficou apenas "root::18396:0:99999:::", conforme imagem abaixo:<br><br>

			Para salvar e sair, pressionamos as teclas "CTRL + O" e "ENTER". Depois pressionamos "CTRL + X".<br><br>

			<p>
				<img src="./img/tutoriais/senhaLinux/11.png" width="600" height="314">
			</p>

			Depois que apagamos a senha do root, salvamos as informações e alteramos novamente as configurações de leitura e escrita das partições.<br><br><br><br>

			Comando sync confirma alteração realizada na senha do usuário root.<br><br>

			Caso os comandos "reboot ou reboot -f" não funcionarem, force a reinicialização do sistema.<br><br>

			<p>
				<img src="./img/tutoriais/senhaLinux/12.png" width="600" height="314">
			</p>

			Poderíamos já criar o usuário neste ponto do vídeo, mas vou mostrar como criar ao chegar na tela de login.<br><br>

			Isso vai mostrar que realmente o root está sem senha porque vamos realizar um login com ele.<br><br>

			Reiniciando o sistema, agora deixe ligar normalmente.<br><br>

			<p>
				<img src="./img/tutoriais/senhaLinux/13.png" width="600" height="314">
			</p>

			 Pressione "ENTER" para iniciar normalmente.<br><br>

			 <p>
				<img src="./img/tutoriais/senhaLinux/14.png" width="600" height="314">
			</p>

			Na tela abaixo, ao invés de logar, pressione as teclas "CTRL + ALT +F1" para acessar o terminal.<br><br>

			Iremos confirmar se o usuário root está sem senha.<br><br>

			<p>
				<img src="./img/tutoriais/senhaLinux/15.png" width="600" height="314">
			</p>

			Ao digitar "root" ele já loga sem pedir senha.<br><br>

			Aqui aproveitaremos para definir uma senha para o root.<br><br>

			Comando: "passwd root"<br><br>

			<p>
				<img src="./img/tutoriais/senhaLinux/16.png" width="600" height="314">
			</p>

			Agora vamos criar um usuário "mendes" que servirá para alterar a senha do usuário "ednaldo".<br><br>

			Comandos:<br><br>

			useradd mendes -m --> Cria um usuário chamado mendes, a opção "-m" cria um diretório padrão para o usuário.<br><br>

			ls /home --> Mostra o diretório home do usuário "mendes" já criado.<br><br>

			Mesmo assim precisamos criar uma senha para que ele logue no sistema.<br><br>

			passwd mendes --> Define uma senha para o usuário "mendes"<br><br>

			<p>
				<img src="./img/tutoriais/senhaLinux/17.png" width="600" height="314">
			</p>

			Agora vamos definir o usuário "mendes" como membro do grupo "sudo". Para que ele seja administrador do sistema.<br><br>

			Ao concluir, pressione "CTRL + ALT + F7" para ir para a tela de login.<br><br>

			<p>
				<img src="./img/tutoriais/senhaLinux/18.png" width="600" height="314">
			</p>

			Caso o usuário mendes não apareça após algum tempo, reinicie sua máquina.<br><br>

			<p>
				<img src="./img/tutoriais/senhaLinux/19.png" width="600" height="314">
			</p>

			Veja que após algum tempo, o usuário aparecerá automaticamente.<br><br>

			Faça login no sistema com o usuário "mendes".<br><br>

			<p>
				<img src="./img/tutoriais/senhaLinux/20.png" width="600" height="314">
			</p>

			Acessando o sistema.<br><br>

			 <p>
				<img src="./img/tutoriais/senhaLinux/21.png" width="600" height="314">
			</p>

			Acessando opções de Administração de Usuários e Grupos.<br><br>

			<p>
				<img src="./img/tutoriais/senhaLinux/22.png" width="600" height="314">
			</p>

			 Verificando se o usuário "mendes" realmente possui permissões de root.<br><br>

			Clica no usuário "mendes", clica em "Gerenciar Grupos", em "Configurações de Grupos" procura "sudo" e clica em "Propriedades".<br><br>

			Caso esteja marcado está ok.<br><br>

			Clica em ok e já podemos alterar a senha ou qualquer outra característica do usuário "ednaldo".<br><br>

			<p>
				<img src="./img/tutoriais/senhaLinux/23.png" width="600" height="314">
			</p>


			Escolha o usuário "ednaldo" e clique em "Modificar" ao lado de Senha.<br><br>

			<p>
				<img src="./img/tutoriais/senhaLinux/24.png" width="600" height="314">
			</p>

			Alterando a senha:<br><br>

			<p>
				<img src="./img/tutoriais/senhaLinux/25.1.png" width="600" height="314">
			</p>

			Após alterar a senha e clicar em ok, Clique em "Configurações Avançadas".<br><br>

			Verificando se o usuário está bloqueado.<br><br>

			<p>
				<img src="./img/tutoriais/senhaLinux/25.png" width="600" height="314">
			</p>

			Alterando nome do usuário (Opcional).<br><br>

			Ao lado do nome do usuário, clique em "Modificar..."<br><br>

			<p>
				<img src="./img/tutoriais/senhaLinux/26.png" width="600" height="314">
			</p>

			Clique em "close".<br><br>

			<p>
				<img src="./img/tutoriais/senhaLinux/27.png" width="600" height="314">
			</p>

			Reiniciando o sistema.<br><br>
			<p>
				<img src="./img/tutoriais/senhaLinux/28.png" width="600" height="314">
			</p>


			Logando no usuário "ednaldo" com a senha definida nos passos anteriores.<br><br>

			Veja que o nome do usuário foi corrigido (ednaldo Mendes de Araujo para Ednaldo Mendes de Araujo.<br><br>

			<p>
				<img src="./img/tutoriais/senhaLinux/29.png" width="600" height="314">
			</p>

			Login realizado com sucesso.<br><br>

			<p>
				<img src="./img/tutoriais/senhaLinux/30.png" width="600" height="314">
			</p>

			Fim!<br><br>

			 

			Neste artigo nós vimos como recuperar o acesso redefinindo a senha de um usuário do linux.<br><br>

			Até a próxima!<br><br>

			<hr>

			<h1 align="center"> <a href="pag_cupons-e-promocoes.php"> Veja também as promoções mensais clicando  Aqui. </a> </h1>

			
			<hr>

	</div>

<?php

  include('pag_rodape.php');
  
?>