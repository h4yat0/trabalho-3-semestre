# Projeto site de viagens

## Nomes dos integrantes

	João Victor Hayato Tsuchiya de Oliveira
	Mateus Henrique Aguiar
	Luis Felipe Margioto de Oliveira
	Gabriel Arthur Tonholo de Campos
	Yago D. Sales

### Tecnologias

Para a utilização desse projeto se faz necessário algumas tecnologias, essas sendo:

- PHP 8.1.2 ou superior;
- MySQL ou MariaDB;
- Composer;

### Instalando componentes

- Caso já tenha o php instalado:
	Instale o composer na pasta do php 

		https://getcomposer.org/download/

	Rode o seguinte camando na raiz do projeto 
		
		php composer.phar install

- Caso esteja rodando pelo XAMP:
	Instale o composer na pasta do php 
		
		https://getcomposer.org/download/

	Rode o seguinte comando na raiz do projeto

		composer install

Independente do caso rode o seguinte comando na raiz do projeto

	composer update

#### Estrutura do projeto

O projeto está estruturado utilizando a arquitetura de software **MVC**

- **/app**: armazena as informações mais importantes do projeto;
	- **/app/config**: informações de configuração do projeto;
	- **/app/core**: armazena o núcleo do projeto (regras de views e routing);
	- **/app/site**: armazena controllers, models e views;
	- **/app/site/controllers**: armazena os controllers;
	- **/app/site/models**: armazena os models;
	- **/app/site/views**: armazena as views;
		- **/app/views/shared**: armazena views template e/ou partials;

- **/public**: armazena arquivos estáticos como css, js e imagens;
	- **/public/css**: armazena as regras de estilo;
	- **/public/img**: armazena as imagens utilizadas no projeto;
	- **/public/js/**: armazena os scripts do projeto

- **/vendor**: pasta de recursos externos intalados por meio do composer

### Funcionamento do projeto

**Router**: O controlador padrão é HomeController e o metodo padrão é index(). 

Caso o caminho na URL não referencie um controlador e/ou metodo existente este será levado a HomeController com metodo index()

Parametros para os metodos devem ser indicados da seguinte forma:

	Controller/method/param1/param2/param3
	
**Páginas**: Toda página deve ser nomeada da seguinte forma:

	pageName.html.twig

Ao chamar uma página uma página dentro de um método use a função View() extendida da classe Controller


	View(string $page, array $params = [])

$params não é uma variável obrigatória, mas quando passada deve ser da seguinte forma

	ex: View(home, [
		'variavel1' => valorDaVarivael,
		'variavel2' => valorDaVarivael
	])

**Imports dentro de páginas**: O import de dentro do html para arquivos estáticos locais deve ser feito da seguinte maneira (BASE é uma variável global que indica a raiz do projeto):

	ex css: <link rel="stylesheet" href="{{BASE}}/public/assets/css/cssName.css"/>

**Como trabalhar com Twig**: 

- Template: O template padrão do site é "__template.html.twig" ele é importado da seguinte maneira:

		{% extends './shared/__template.html.twig' %}

- Blocos: blocos são sinalizados dentre de chaves com porcentagens em cada lado "{% %}", eles servem para determinar que aquele é um bloco de código que deve substituir o bloco do template. Os blocos no template geralmente estão vázios, mas o conteudo do bloco deve ficar entre as chaves (Nunca nomeie um bloco utilizando carcteres como "-", "_", ".")

		Bloco vazio: {% block blockName %}{% endblock %}
		
		Bloco com conteúdo:
	
		{% block blockName %}
		Block content
		{% endblock %}

- Variaveis: Se uma variável deverá ser passada para a página ela deve ser sinalinzada da seguinte maneira na página:
					
		{{variableName}}

		ex: <h1>Número de passagens disponiveis: {{numeroDePassagens}}</h1>