Um aplicativo web To-Do List construído usando PHP, HTML, CSS, JavaScript, MySQL e XAMPP. Este aplicativo permite que os usuários adicionem, editem, excluam e filtrem tarefas com uma interface amigável.

Características:

	* Adicionar novas tarefas com título e descrição;
	* Editar tarefas existentes;
	* Marcar tarefas como concluídas;
	* Filtragem por status, pendente, concluída ou todas;
	* Design responsivo;

Tecnologias Utilizadas:

	* Frontend: 
  	 * HTML: Estrutura;
  	 * CSS: Estilo;
  	 * JavaScript: Interatividade;

  	*Bibliotecas:
    	 * Particles.js: Backgroud animado;
   	 * SweetAlert: Caixas pop-up;
   	 * Iconoir: Ícones;
   	 * GoogleFonts: Fonte estilizada;

	* Backend:
  	 * PHP: 
    	    - Tratamento de diferentes métodos HTTP (GET, POST, PUT, DELETE);
    	    - Conexão com banco de dados;
    	    - Validação de dados;
  	 * MySQL: Armazenamento de dados;
  	 * PDO: Interface para acesso ao banco de dados;
  	 * API RESTful: Arquitetura para comunicação entre frontend e backend;

Instruções de configuração:

	Siga estas etapas para configurar o projeto localmente:

1. Clone o Repositório:

	https://github.com/Alisson-Alex/Projeto--Aplicacao-To-Do-List

2. Abra o XAMPP Control Panel:
	
	Inicie o servidor MySQL em 'start' (Caso desejar alterar a porta padrão 3306, modifique antes de apertar 'start').
	Agora configure o diretório onde se encontra o projeto, clicando em 'config' na área do servidor web Apache e clique em 'Apache(httpd.conf)', primeiramente com a tecla Ctrl+F busque por 'DocumentRoot' e altere o caminho para onde está seu projeto, faça o mesmo para a segunda linha onde está '<Directory', Salve o arquivo 'httpd.conf' e feche: 

		*Exemplo: DocumentRoot "C:\xampp\apache\MeusProjetos"
			 <Directory "C:\xampp\apache\MeusProjetos"

3. Configurar o banco de dados:

	3.1 - Inicie seu servidor local usando XAMPP.
	3.2 - Abra o MySQL e crie um novo banco de dados chamado todo_list.
	3.3 - Copie o comando SQL para criar a tabela tasks com as colunas especificas:

	CREATE DATABASE todo_list;
	USE todo_list;

	CREATE TABLE tasks (
 		id INT AUTO_INCREMENT PRIMARY KEY,  
		title VARCHAR(255) NOT NULL,  
		description TEXT,  status INT DEFAULT 0,  
		created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,  
		updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE  CURRENT_TIMESTAMP  
	);

4. Configurar a conexão do banco de dados:
	
	Para alterar a porta, nome, usuário ou senha, abra -api/config.php- e edite com os detalhes de conexão do seu banco de dados:

	[...]

	define('DB_HOST', '127.0.0.1:3306');
	define('DB_NAME', 'todo_list');
	define('DB_USER', 'root');
	define('DB_PASS', '');

	[...]


5. Execute o aplicativo:
	Abra o XAMPP Control Panel novamente, na área do servidor web Apache, clique em 'start' e depois 'Admin' ao lado... Pronto, você será encaminhado para o servidor web.


Personalização:

	1. Atualizar estilos:
	Modifique os estilos para corresponder às suas preferências de design no arquivo 'styles.css'.

	2. Atualizar JavaScript:
	Melhore a funcionalidade do JavaScript para personalizar a interatividade em 'scripts.js'.

	3. Atualizar conteúdo:
	Modifique o conteúdo HTML para personalizar o texto de máscara de input e botões.

Colaboradores:

Alisson Alexandre Dos Santos



