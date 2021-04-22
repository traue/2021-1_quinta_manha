CREATE TABLE tb_status(
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    status VARCHAR(25) NOT NULL
);

INSERT INTO tb_status(status) VALUES ('pendente');
INSERT INTO tb_status(status) VALUES ('realizado');

CREATE TABLE tb_tarefas(
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    tarefa TEXT NOT NULL,
    data_cadastro DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    id_status INT NOT NULL DEFAULT 1,
    FOREIGN KEY(id_status) REFERENCES tb_status(id)
);