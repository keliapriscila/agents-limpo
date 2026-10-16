-- Kélia Priscila — Schema do banco de dados
-- MySQL 5.7+ / 8.x · utf8mb4
-- Importar: mysql -u usuario -p < config/database.sql

-- Cria o banco (pule se ele já existe ou se o usuário não tem permissão)
CREATE DATABASE IF NOT EXISTS kelia_priscila CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE kelia_priscila;

CREATE TABLE IF NOT EXISTS contatos (
    id            INT UNSIGNED NOT NULL AUTO_INCREMENT,
    nome          VARCHAR(120) NOT NULL,
    email         VARCHAR(160) NOT NULL,
    telefone      VARCHAR(20)  NULL,
    tipo_projeto  VARCHAR(40)  NOT NULL,
    mensagem      TEXT         NOT NULL,
    criado_em     DATETIME     NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id),
    INDEX idx_contatos_criado_em (criado_em),
    INDEX idx_contatos_email (email)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
