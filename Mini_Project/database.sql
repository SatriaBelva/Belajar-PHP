CREATE TABLE akun (
	id int(11) PRIMARY KEY AUTO_INCREMENT,
    nama VARCHAR(100) NOT NULL,
    pwd VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    waktu DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
)