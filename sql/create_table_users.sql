drop table if exists users;
create table users(
    user_id INT PRIMARY KEY AUTO_INCREMENT,
    user_name VARCHAR(100) not null,
    user_email VARCHAR(100) UNIQUE NOT NULL,
    user_password VARCHAR(100) NOT NULL,
    user_state INT (1) DEFAULT 1,
    user_time_create TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    usuario_time_updated TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

