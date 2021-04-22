CREATE TABLE tb_status(
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    status VARCHAR(25) NOT NULL
);

INSERT INTO tb_status(status) VALUES ('pendente');
INSERT INTO tb_status(status) VALUES ('realizado');