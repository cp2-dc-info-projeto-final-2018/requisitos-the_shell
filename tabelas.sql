CREATE TABLE Usuario (

		id_usuario INT NOT NULL,
		login STRING,
		nome STRING,
		senha STRING,
		email STRING,
		tel STRING,
		PRIMARY KEY (id_usuario),
		FOREIGN KEY (id_usuario) REFERENCES 
);


CREATE TABLE Turma (

		id_turma INT NOT NULL,
		nome STRING,
		turno STRING,
		serie STRING,
		PRIMARY KEY (id_turma),
		FOREIGN KEY (id_turma) REFERENCES Turma(id_turma)
);


CREATE TABLE Professor (

		id_professor INT NOT NULL,
		siape STRING,
		id_turma INT,
		disciplina STRING,
		PRIMARY KEY (id_professor),
		FOREIGN KEY (id_turma) REFERENCES Turma(id_turma),
		FOREIGN KEY (id_professor) REFERENCES Professor(id_professor)
);

CREATE TABLE Aluno (

		id_aluno INT NOT NULL,
		matricula STRING,
		id_turma INT,
		boletim STRING,
		horas_estagio FLOAT,
		PRIMARY KEY (id_aluno),
		FOREIGN KEY (id_turma) REFERENCES Turma(id_turma),
		FOREIGN KEY (id_aluno) REFERENCES Aluno(id_aluno)
);


CREATE TABLE Secretaria (

		id_secretaria INT NOT NULL,
		siape STRING,
		PRIMARY KEY (id_secretaria),
		FOREIGN KEY (id_secretaria) REFERENCES Secretaria(id_secretaria)
);


CREATE TABLE Direcao (

		id_diretor INT NOT NULL,
		siape STRING,
		PRIMARY KEY (id_diretor),
		FOREIGN KEY (id_diretor) REFERENCES Direcao(id_diretor)
);


CREATE TABLE SESOP/NAPNE (

		id_funcionario INT NOT NULL,
		siape STRING,
		PRIMARY KEY (id_funcionario),
		FOREIGN KEY (id_funcionario) REFERENCES SESOP/NAPNE(id_funcionario)
);


CREATE TABLE Professor_Turma (

		id_professor INT NOT NULL,
		id_turma INT NOT NULL,
		PRIMARY KEY (id_professor, id_turma),
		FOREIGN KEY (id_professor) REFERENCES Professor(id_professor),
		FOREIGN KEY (id_turma) REFERENCES Turma(id_turma)
);







