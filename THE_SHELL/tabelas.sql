CREATE TABLE Usuario (

		id_usuario INT NOT NULL,
		login VARCHAR(100),
		nome VARCHAR(100),
		senha VARCHAR(20),
		email VARCHAR(100),
		tel VARCHAR(50),
		PRIMARY KEY (id_usuario),
		FOREIGN KEY (id_usuario) REFERENCES Usuario(id_usuario)
);


CREATE TABLE Turma (

		id_turma INT NOT NULL,
		id_usuario INT,
		nome VARCHAR(100),
		turno VARCHAR(50),
		serie VARCHAR(50),
		PRIMARY KEY (id_turma),
		FOREIGN KEY (id_usuario) REFERENCES Usuario(id_usuario)
);


CREATE TABLE Professor (

		id_professor INT NOT NULL,
		id_usuario INT,
		siape VARCHAR(50),
		id_turma INT,
		disciplina VARCHAR(100),
		PRIMARY KEY (id_professor),
		FOREIGN KEY (id_turma) REFERENCES Turma(id_turma),
		FOREIGN KEY (id_usuario) REFERENCES Usuario(id_usuario)
);

CREATE TABLE Aluno (

		id_aluno INT NOT NULL,
		id_usuario INT,
		matricula VARCHAR(50),
		id_turma INT,
		PRIMARY KEY (id_aluno),
		FOREIGN KEY (id_turma) REFERENCES Turma(id_turma),
		FOREIGN KEY (id_usuario) REFERENCES Usuario(id_usuario)
);


CREATE TABLE Secretaria (

		id_secretaria INT NOT NULL,
		id_usuario INT,
		siape VARCHAR(50),
		PRIMARY KEY (id_secretaria),
		FOREIGN KEY (id_usuario) REFERENCES Usuario(id_usuario)
);


CREATE TABLE Direcao (

		id_diretor INT NOT NULL,
		id_usuario INT,
		siape VARCHAR(50),
		PRIMARY KEY (id_diretor),
		FOREIGN KEY (id_usuario) REFERENCES Usuario(id_usuario)
);


CREATE TABLE SESOPNAPNE (

		id_funcionario INT NOT NULL,
		id_usuario INT,
		siape VARCHAR(50),
		PRIMARY KEY (id_funcionario),
		FOREIGN KEY (id_usuario) REFERENCES Usuario(id_usuario)
);


CREATE TABLE Professor_Turma (

		id_professor INT NOT NULL,
		id_turma INT NOT NULL,
		PRIMARY KEY (id_professor, id_turma),
		FOREIGN KEY (id_professor) REFERENCES Professor(id_professor),
		FOREIGN KEY (id_turma) REFERENCES Turma(id_turma)
);

CREATE TABLE Disciplina (

		id_disciplina INT NOT NULL,
		nome VARCHAR(50),
		PRIMARY KEY (id_disciplina)
);

CREATE TABLE Turma_Disciplina (

		id_turma INT NOT NULL,
		id_disciplina INT NOT NULL,
		PRIMARY KEY (id_turma),
		PRIMARY KEY (id_disciplina),
		FOREIGN KEY (id_turma) REFERENCES Turma(id_turma),
		FOREIGN KEY (id_disciplina) REFERENCES Disciplina(id_disciplina)
);

CREATE TABLE Horario (

		id_horario INT NOT NULL,
		id_disciplina INT,
		hora_inicio DATETIME,
		hora_fim DATETIME,
		PRIMARY KEY (id_horario),
		FOREIGN KEY (id_disciplina) REFERENCES Disciplina(id_disciplina)
);

CREATE TABLE Turma_Horario(

		id_turma INT NOT NULL,
		id_horario INT NOT NULL,
		PRIMARY KEY (id_turma),
		PRIMARY KEY (id_horario),
		FOREIGN KEY (id_turma) REFERENCES Turma(id_turma),
		FOREIGN KEY (id_horario) REFERENCES Horario(id_horario)
);

CREATE TABLE classe (
	
		id_classe INT NOT NULL AUTO_INCREMENT,
  	classe VARCHAR(100),
  	PRIMARY KEY(id_classe)
);
