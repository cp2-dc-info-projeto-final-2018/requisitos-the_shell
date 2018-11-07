CREATE TABLE Usuario (

		id_usuario INT NOT NULL AUTO_INCREMENT,
		id_classe_usuario INT,
		login VARCHAR(100),
		nome VARCHAR(100),
		senha VARCHAR(20),
		email VARCHAR(100),
		tel VARCHAR(50),
		PRIMARY KEY (id_usuario),
		FOREIGN KEY (id_classe_usuario) REFERENCES Classe(id_classe)
);


CREATE TABLE Turma (

		id_turma INT NOT NULL AUTO_INCREMENT,
		nome VARCHAR(100),
		serie VARCHAR(50),
		integrado BOOLEAN,
		PRIMARY KEY (id_turma),
		FOREIGN KEY (id_usuario) REFERENCES Usuario(id_usuario)
);


CREATE TABLE Professor (

		id_professor INT NOT NULL AUTO_INCREMENT,
		id_usuario INT,
		id_classe_usuario INT,
		siape VARCHAR(50),
		id_disciplina INT NOT NULL,
		PRIMARY KEY (id_professor),
		FOREIGN KEY (id_disciplina) REFERENCES Disciplina(id_disciplina),
		FOREIGN KEY (id_classe_usuario) REFERENCES Classe(id_classe),
		FOREIGN KEY (id_usuario) REFERENCES Usuario(id_usuario)
);

CREATE TABLE Aluno (

		id_aluno INT NOT NULL AUTO_INCREMENT,
		id_usuario INT,
		id_classe_usuario INT,
		matricula VARCHAR(50),
		id_turma INT,
		id_boletim INT,
		PRIMARY KEY (id_aluno),
		FOREIGN KEY (id_turma) REFERENCES Turma(id_turma),
		FOREIGN KEY (id_classe_usuario) REFERENCES Classe(id_classe),
		FOREIGN KEY (id_usuario) REFERENCES Usuario(id_usuario),
		FOREIGN KEY (id_boletim) REFERENCES Boletim(id_boletim)
);


CREATE TABLE Secretaria (

		id_secretaria INT NOT NULL AUTO_INCREMENT,
		id_usuario INT,
		id_classe_usuario INT,
		siape VARCHAR(50),
		PRIMARY KEY (id_secretaria),
		FOREIGN KEY (id_classe_usuario) REFERENCES Classe(id_classe),
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

		id_disciplina INT NOT NULL AUTO_INCREMENT,
		disciplina VARCHAR(50),
		PRIMARY KEY (id_disciplina)
);

CREATE TABLE Turma_Disciplina (

		id_turma INT NOT NULL,
		id_disciplina INT NOT NULL,
		PRIMARY KEY (id_turma, id_disciplina),
		FOREIGN KEY (id_turma) REFERENCES Turma(id_turma),
		FOREIGN KEY (id_disciplina) REFERENCES Disciplina(id_disciplina)
);

CREATE TABLE Classe (

	id_classe INT NOT NULL AUTO_INCREMENT,
  classe VARCHAR(100),
  PRIMARY KEY(id_classe),
);

CREATE TABLE Boletim (
	id_boletim INT NOT NULL AUTO_INCREMENT,
	1a_cert DECIMAL,
	2a_cert DECIMAL,
	3a_cert DECIMAL,
	pfv DECIMAL,
	media DECIMAL,
	PRIMARY KEY (id_boletim)
)
