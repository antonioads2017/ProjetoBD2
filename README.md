# ProjetoBD2
Projeto para disciplina de banco de dados 2 do curso ADS IFPB. Projeto com dominio em uma loja de informatica bem intuitiva.

Desenvolvedores: Antonio Miguel e Eduardo Lucas;

Pré-Requistos:
	1 - Configurar dependencia do mongo no php:
		1.1  - Entre na pasta home do seu computador;
		1.2 - Execute os seguintes comandos:
			$ git clone https://github.com/mongodb/mongo-php-driver.git;
			$ cd mongo-php-driver;
			$ git submodule update --init;
			$ phize;
			$ ./configure;
			$ make all;
			$ sudo make install;
			$ sudo apt instal composer;
	2 - Executar o MongoDB Server;
	3 - Rodar os scripts do postgresql localizado na pasta databases;
	4 - Configurar conexão com Postgresql no arquivo postgresConnection.php na pasta databases;
	5 - Colocar sua key da api no google maps nos arquivos googlemaps.php(linha 141) e converterEndereco.php(linha 10) na pasta usuario.

