CREATE database `mindpill`
default character set utf8
default collate utf8_general_ci;

use mindpill;

CREATE TABLE `mindpill`.`usuarios` (
  `idusuarios` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(70) NOT NULL,
  `email` VARCHAR(70) NOT NULL,
  `senha` VARCHAR(20) NOT NULL,
  `disc` TINYINT NOT NULL DEFAULT 0,
  PRIMARY KEY (`idusuarios`),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC)
  )default charset = utf8;

CREATE TABLE `mindpill`.`parceiros` (
  `idparceiros` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(70) NOT NULL,
  `email` VARCHAR(70) NOT NULL,
  `senha` VARCHAR(20) NOT NULL,
  `telefone` VARCHAR(20) NOT NULL,
  `descricao` VARCHAR(150) NOT NULL,
  `imagem` VARCHAR(150) NULL,
  PRIMARY KEY (`idparceiros`),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC),
  UNIQUE INDEX `telefone_UNIQUE` (`telefone` ASC)
  )default charset = utf8;

  INSERT INTO parceiros (nome, email, senha, telefone, descricao, imagem)
  VALUES ('Rafael Mello', 'rafael@mindpill.com', 1234, '(11) 9999-9999', 'Transtornos de ansiedade, Stress, Psicoterapia, Esquizofrenia, Depressão', 'imgParceiro1.jpg'),
  ('Anita de Castilho', 'anitadecastilho@mindpill.com', 1234, '(11) 9999-9998', 'Transtornos de ansiedade, Terapia cognitivo-comportamental, Stress, Depressão', 'imgParceiro2.jpg'),
  ('Guilherme Beck', 'guilherme@mindpill.com', 1234, '(11) 9999-9997', 'Transtornos de ansiedade, Problemas de relacionamentos, Depressão, Aconselhamento psicológico,Freudiana', 'imgParceiro3.jpg');


  CREATE TABLE `mindpill`.`disc` (
    `iddisc` INT NOT NULL AUTO_INCREMENT,
    `pergunta` VARCHAR(100) NOT NULL,
    `perfil` CHAR(1) NOT NULL,
    PRIMARY KEY (`iddisc`)
    )default charset = utf8;

  INSERT INTO disc (pergunta, perfil)
  VALUES ('Poderosa, Ágil, Eficiente','D'),
  ('Autoconfiante, Independente, Dominante', 'D'),
  ('Proativo,Empreendedora, Corajosa','D'),
  ('Prática, Rápida, Eficiente, Objetiva','D'),
  ('Assertiva, Focada em Resultados','D'),
  ('Determinada, Firme, Enérgica','D'),
  ('Lutadora, Combatível, Agressiva','D'),
  ('Automotivada, Pioneira, Impulsionadora','D'),
  ('Resolvedora, Destemida, Desafiadora','D'),
  ('Competitiva, Assume riscos, Desbravadora','D');
  
  INSERT INTO disc (pergunta, perfil)
VALUES ('Pensa rápido, Aberta, Se expõe
','I'),
('Comunicativa, Alegre, Extrovertida','I'),
('Participativa, Relacional, Flexível','I'),
('Persuasiva, Estimuladora, Contagiante','I'),
('Preza pelo prazer, Emotiva, Divertida','I'),
('Criativa, Falante, Distraída, Popular','I'),
('Participativa, Facilitadora, Influenciadora','I'),
('Articulada, Empolgante, Motivadora','I'),
('Vaidosa, Simpática, Gosta de Ser Reconhecida','I'),
('Entusiasmada, Impulsiva, Otimista','I');

INSERT INTO disc (pergunta, perfil)
VALUES ('Altruísta, Empática, Cuidadora','S'),
('Acolhedora, Amigável, Paciente','S'),
('Agradável, Tranquila, Organizada','S'),
('Calma, Rotineira, Constante','S'),
('Conciliadora, Conselheira, Boa Ouvinte','S'),
('Comedida, Amável, Mediadora','S'),
('Autocontrolada, Conservadora, Responsável','S'),
('Persistente, Prevenida, Tolerante','S'),
('Aconselhadora, Harmônica, Apoiadora','S'),
('Moderadora, Equilibrada, Estável','S');

INSERT INTO disc (pergunta, perfil)
VALUES ('Metódica, Reflexiva, Detalhista','C'),
('Autodisciplinada, Atenta a Detalhes, Cuidadosa','C'),
('Criteriosa, Cuidadosa, Especialista','C'),
('Idealizadora, Perfeccionista, Uniforme','C'),
('Segue regras, Sistemática, Sensata','C'),
('Precisa, Lógica, Racional','C'),
('Profunda, Perceptiva, Estratégica','C'),
('Exato, Exigente, Estruturada','C'),
('Ponderada, Ordenadora, Analisadora','C'),
('Teórica, Conservadora, Aprofunda conhecimentos','C');

-- mysql_fetch_array - funcao para randomizar a lista das perguntas DISC