<?php

  include('pag_cabecalho.php');
  include('pag_menu.php');
?>
	

			<br> 
	

                                    <div class="container">
                                      <form action="pag_envia_dados.php" method="post">

                                            <div class="row">
                                              <div class="col-25">
                                                <label for="nome_contato">Nome: </label>
                                              </div>
                                              <div class="col-75">
                                                <input type="text" id="pag_nome" name="pag_nome" required="true" placeholder="Informe o seu Nome!">
                                              </div>
                                            </div>

                                            <div class="row">
                                              <div class="col-25">
                                                <label for="sobrenome_contato">Sobrenome</label>
                                              </div>
                                              <div class="col-75">
                                                <input type="text" id="pag_sobrenome" name="pag_sobrenome" required="true" placeholder="Informe o seu Sobrenome!">
                                              </div>
                                            </div>

                                            <div class="row">
                                              <div class="col-25">
                                                <label for="nome_contato">Nome: </label>
                                              </div>
                                              <div class="col-75">
                                                <input type="email" id="pag_email" name="pag_email" required="true" placeholder="Informe o seu Email!">
                                              </div>
                                            </div>

                                            <div class="row">
                                              <div class="col-25">
                                                <label for="pag_msg">Mensagem:</label>
                                              </div>
                                              <div class="col-75">
                                                <textarea id="pag_msg" name="pag_msg" required="true"  placeholder="Escreva sua mensagem!" style="height:200px"></textarea>
                                              </div>
                                            </div>

                                            <div class="enviarLimpar">
                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <button type="submit" class="btn btn-primary btn-lg">Enviar Mensagem!</button>
                                              <button type="reset" class="btn btn-primary btn-lg">Limpar campos!</button>
                                              
                                            </div>
                                      </form>
                                    </div>


			<hr>


<?php
  include('pag_rodape.php');
?>