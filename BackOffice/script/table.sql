CREATE DATABASE tp_s6_web_design_mai_2023;

CREATE TABLE users (
      id_user                   SMALLSERIAL PRIMARY KEY ,
      nom                       VARCHAR(100) NOT NULL ,
      email                     VARCHAR(70) NOT NULL ,
      password                  VARCHAR(64) NOT NULL
);

CREATE TABLE article (
      id_article                SMALLSERIAL PRIMARY KEY ,
      titre                     VARCHAR NOT NULL ,
      resume                    TEXT NOT NULL ,
      contenu                   TEXT NOT NULL ,
      img                       TEXT ,
      date_creation             TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


INSERT INTO users (nom, email, password) VALUES ('Andry RABETAFIKA' , 'andry_r@gmail.com' , 'andry1234');
