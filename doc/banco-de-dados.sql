CREATE TABLE atendimento (
  id_atendimento INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  mensagem_id_mensagem INTEGER UNSIGNED NOT NULL,
  usuario_id_usuario INTEGER UNSIGNED NOT NULL,
  texto_atendimento TEXT NULL,
  arquivo_atendimento VARCHAR(100) NULL,
  data_atendimento DATE NULL,
  hora_atendimento TIME NULL,
  PRIMARY KEY(id_atendimento),
  INDEX atendimento_FKIndex1(usuario_id_usuario),
  INDEX atendimento_FKIndex2(mensagem_id_mensagem)
);

CREATE TABLE categoria (
  id_categoria INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome_categoria VARCHAR(45) NULL,
  PRIMARY KEY(id_categoria)
);

CREATE TABLE mensagem (
  id_mensagem INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  categoria_id_categoria INTEGER UNSIGNED NOT NULL,
  usuario_id_usuario INTEGER UNSIGNED NOT NULL,
  titulo_mensagem VARCHAR(255) NULL,
  texto_mensagem TEXT NULL,
  data_mensagem DATE NULL,
  hora_mensagem TIME NULL,
  status_mensagem CHAR(1) NULL,
  PRIMARY KEY(id_mensagem),
  INDEX mensagem_FKIndex1(usuario_id_usuario),
  INDEX mensagem_FKIndex2(categoria_id_categoria)
);

CREATE TABLE usuario (
  id_usuario INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome_usuario VARCHAR(100) NULL,
  email_usuario VARCHAR(100) NULL,
  senha_usuario VARCHAR(100) NULL,
  tipo_usuario CHAR(1) NULL,
  status_usuario CHAR(1) NULL,
  data_usuario DATE NULL,
  PRIMARY KEY(id_usuario)
);


