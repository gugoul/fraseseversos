Site para mostrar uma frase e um verso diário, diferente para cada usuário.
Possui painel Administrativo com Ajax, que pode ser acessado: fraseseversos/painel com o login admin e senha 123456

O projeto possui integração com o Blade Template Engine

Ainda não está pronto o formulário de contato.

Banco de Dados:

-- Copiando estrutura do banco de dados para mensagens
CREATE DATABASE IF NOT EXISTS `mensagens` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `mensagens`;

-- Copiando estrutura para tabela mensagens.ci_sessions
CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela mensagens.ci_sessions: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `ci_sessions` DISABLE KEYS */;
/*!40000 ALTER TABLE `ci_sessions` ENABLE KEYS */;

-- Copiando estrutura para tabela mensagens.departamento
CREATE TABLE IF NOT EXISTS `departamento` (
  `id_departamento` int(11) NOT NULL,
  `departamento` varchar(45) NOT NULL,
  PRIMARY KEY (`id_departamento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela mensagens.departamento: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `departamento` DISABLE KEYS */;
/*!40000 ALTER TABLE `departamento` ENABLE KEYS */;

-- Copiando estrutura para tabela mensagens.frases
CREATE TABLE IF NOT EXISTS `frases` (
  `id_fr` int(11) NOT NULL AUTO_INCREMENT,
  `frases_fr` varchar(250) DEFAULT NULL,
  `autor_fr` varchar(100) DEFAULT NULL,
  `tag_fr` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_fr`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela mensagens.frases: 43 rows
/*!40000 ALTER TABLE `frases` DISABLE KEYS */;
INSERT INTO `frases` (`id_fr`, `frases_fr`, `autor_fr`, `tag_fr`) VALUES
	(1, '"Se eu fosse um anjo da guarda, viveria para te guardar, mas como sou humano, vivo para te amar." ', 'Romeu Tiba', NULL),
	(2, 'A cada hora que passa eu fico mais feliz... Sabe por quê? É uma hora a menos pra eu poder te ver...', 'Jonathas Hardy', NULL),
	(3, 'Lembrar é fácil pra quem tem memória, esquecer é difícil pra que tem coração.', 'Jonathas Hardy', NULL),
	(4, 'Palavras são perdidas, promessas são esquecidas, papéis e cartas apodrecem, mas o verdadeiro amor é o que permanece...', 'Jonathas Hardy', NULL),
	(5, 'Se entre pedras pode haver uma flor, por que entre nós não pode haver amor??? ', 'Jonathas Hardy', NULL),
	(6, 'Amar é ter o céu e querer apenas uma estrela; amar é ter o oceano e querer apenas uma gota; amar é ter o universo e querer apenas uma pessoa: você. ', 'Jonathas Hardy', NULL),
	(7, 'Meu amor é como uma flor, faço tudo por teu amor. ', 'Menatti', NULL),
	(8, 'O pior erro do ser humano é tirar da mente o que não sai do coração. ', 'Mariana', NULL),
	(9, 'Insista, persista, mas nunca desista, pois um dia você conquista. ', 'Mariana', NULL),
	(10, 'Se eu fosse um anjo da guarda, viveria para te guardar, mas como sou humano, vivo para te amar.', 'Mariana', NULL),
	(11, 'Quando era criança aprendi o ABC. Agora que cresci aprendi a amar você. ', 'Mariana', NULL),
	(12, 'Sabes por porque os anjos estão enfezados comigo? Porque em vez de sonhar com eles, sonho contigo.', 'Menatti', NULL),
	(13, 'Hoje eu te amo mais que ontem e menos que amanhã. ', 'Vera', NULL),
	(14, '"Eu não vim fazer juras, nem promessas. Estive na sua vida por esse curto período de tempo com a intenção de mostrar a você o quanto nós poderíamos ser felizes... Mas fui condenada antes disso... Lembre-se, amei você todos os dias em que estivemos ju', 'Vera Waterkemper', NULL),
	(15, 'Se me mostrarem mil mulheres, espero passar um milhão para pode escolher você. ', 'Tiago Augusto da Cunha (mindinho)', NULL),
	(16, 'A mulher é uma grande guerra, pois você nunca a ganha literalmente. ', 'Tiago Augusto da Cunha (mindinho)', NULL),
	(17, 'Mexer com o sentimento do coração é apontar uma arma para própria cabeça. ', 'Tiago Augusto da Cunha (mindinho)', NULL),
	(18, 'O importante não é ter uma mina, o importante é saber amar uma mulher. ', 'Tiago Augusto da Cunha (mindinho)', NULL),
	(19, 'Se eu entrar na guerra, luto pela pátria, se eu entrar pelo amor, luto por você. ', 'Tiago Augusto da Cunha (mindinho)', NULL),
	(20, 'Deus perguntou "quem", eu disse "ela". Deus disse "De seu carinho e amor, o resto é comigo". ', 'Tiago Augusto da Cunha (mindinho)', NULL),
	(21, '"Amar não mata ninguém, o que mata mesmo é ver seu amor nos braços de um outro alguém."(Aline Perucci)', 'Autor Desconhecido', NULL),
	(22, 'Posso morrer por amor... Mas prefiro viver para te amar!!! ', 'Marcos Barosso', NULL),
	(23, 'O Caminho mais perto do amor é ele próprio.', 'Tiago Augusto da Cunha (mindinho)', NULL),
	(24, 'Uma simples frase de amor diz mais que um texto apaixonado. ', 'Tiago Augusto da Cunha (mindinho)', NULL),
	(25, 'Eu naum te amei na primeira vez,ne segunda,nem na terceira mais,sim todos os dias em que te vi.', 'Diego Vilaça', NULL),
	(26, 'Com tudo que sinto, tudo que penso e planejo sobre nós dois, posso dizer-te que te quero sempre do meu lado, e com esta certeza posso também te dizer: "TE AMO"! ', 'Gabriel', NULL),
	(27, 'Entre tantas estrelas brilhando no céu, te encontrei bem ao fundo brilhando para mim.', 'F. Bernardes', NULL),
	(28, '“Você é minha pessoa favorita no mundo”', 'Autor Desconhecido', NULL),
	(29, '“Você pode não ter sido meu primeiro amor, mas fez com que todos os outros fossem esquecidos”', 'Autor Desconhecido', NULL),
	(30, '“Seis bilhões de pessoas no mundo. Seis bilhões de almas. E, às vezes, você precisa de apenas uma”', 'Autor Desconhecido', NULL),
	(31, '“Tão bom morrer de amor! E continuar vivendo...”', 'Mario Quintana', NULL),
	(32, '“Quando duas pessoas se amam, elas não se dominam, nem se submetem. Apenas se completam” ', 'Autor Desconhecido', NULL),
	(33, '“Ame como a chuva fina, que cai silenciosa, mas que faz transbordar rios”', 'Autor Desconhecido', NULL),
	(34, '“Engole teu coração e se ama por dentro”', 'Autor Desconhecido', NULL),
	(35, '“Viver é como amar: todas as razões são contra, e a força de todos os instintos é a favor”', 'Samuel Butler', NULL),
	(36, '“A distância pode separar dois olhares, mas nunca dois corações”', 'Autor Desconhecido', NULL),
	(37, '“Antes a inquietação de um amor, que a paz de um coração vazio”', 'Autor Desconhecido', NULL),
	(38, '"Era uma raposa igual a cem mil outras. Mas eu fiz dela um amigo. Ela é agora única no mundo"', 'Antoine de Saint-Exupéry', NULL),
	(39, '“Vou me enganar mais uma vez, fingindo que te amo às vezes, como se não te amasse sempre”', 'Autor Desconhecido', NULL),
	(40, '“O amor não me faz perguntas e me dá apoio infindável” ', 'William Shakespeare', NULL),
	(41, '“Amai, porque nada melhor para a saúde que um amor correspondido”', 'Autor Desconhecido', NULL),
	(42, '“A suprema felicidade da vida é ter a convicção de que somos amados”', 'Autor Desconhecido', NULL),
	(44, 'Eu irei te fazer sofre, eu sou o Deus da Guerra!', 'Kratos de Esparta', 'guerra2');
/*!40000 ALTER TABLE `frases` ENABLE KEYS */;

-- Copiando estrutura para tabela mensagens.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT '',
  `avatar` varchar(255) DEFAULT 'default.jpg',
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `is_admin` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_confirmed` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_deleted` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela mensagens.users: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `email`, `password`, `avatar`, `created_at`, `updated_at`, `is_admin`, `is_confirmed`, `is_deleted`) VALUES
	(1, 'admin', 'admin@admin.com', '$2y$10$BANF8vTa4YzIvzO2bIf/0uDrYEJzN0UqSf0bT77YkUeNHyjGy5bLa', 'default.jpg', '2018-02-25 01:59:37', NULL, 0, 0, 0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Copiando estrutura para tabela mensagens.versos
CREATE TABLE IF NOT EXISTS `versos` (
  `id_vr` int(11) NOT NULL AUTO_INCREMENT,
  `versos_vr` text,
  `autor_vr` varchar(100) DEFAULT NULL,
  `tag_vr` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_vr`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
