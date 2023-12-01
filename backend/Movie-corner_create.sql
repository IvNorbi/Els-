-- Created by Vertabelo (http://vertabelo.com)
-- Last modification date: 2023-11-20 07:05:18.739

-- tables
-- Table: award
CREATE TABLE award (
    award_id int  NOT NULL,
    name varchar(64)  NOT NULL,
    date date  NOT NULL,
    CONSTRAINT award_pk PRIMARY KEY (award_id)
);

-- Table: comment
CREATE TABLE comment (
    comment_id int  NOT NULL,
    content text  NOT NULL,
    date date  NOT NULL,
    movie_id int  NOT NULL,
    user_id int  NOT NULL,
    CONSTRAINT comment_pk PRIMARY KEY (comment_id)
);

-- Table: genre
CREATE TABLE genre (
    genre_id int  NOT NULL,
    name varchar(32)  NOT NULL,
    CONSTRAINT genre_pk PRIMARY KEY (genre_id)
);

-- Table: movie
CREATE TABLE movie (
    movie_id int  NOT NULL,
    name varchar(64)  NOT NULL,
    rating double(2,1)  NOT NULL,
    date date  NOT NULL,
    CONSTRAINT movie_pk PRIMARY KEY (movie_id)
);

-- Table: movie_award
CREATE TABLE movie_award (
    award_id int  NOT NULL,
    movie_id int  NOT NULL
);

-- Table: movie_genre
CREATE TABLE movie_genre (
    genre_id int  NOT NULL,
    movie_id int  NOT NULL
);

-- Table: movie_person
CREATE TABLE movie_person (
    person_id int  NOT NULL,
    movie_id int  NOT NULL
);

-- Table: movie_user
CREATE TABLE movie_user (
    movie_id int  NOT NULL,
    user_id int  NOT NULL
);

-- Table: person
CREATE TABLE person (
    person_id int  NOT NULL,
    name varchar(64)  NOT NULL,
    birth_date date  NOT NULL,
    role varchar(32)  NOT NULL,
    country varchar(32)  NOT NULL,
    CONSTRAINT person_pk PRIMARY KEY (person_id)
);

-- Table: user
CREATE TABLE user (
    user_id int  NOT NULL,
    name varchar(64)  NOT NULL,
    user_name varchar(64)  NOT NULL,
    password varchar(32)  NOT NULL,
    email varchar(64)  NOT NULL,
    CONSTRAINT user_pk PRIMARY KEY (user_id)
);

-- foreign keys
-- Reference: comment_movie (table: comment)
ALTER TABLE comment ADD CONSTRAINT comment_movie FOREIGN KEY comment_movie (movie_id)
    REFERENCES movie (movie_id);

-- Reference: comment_user (table: comment)
ALTER TABLE comment ADD CONSTRAINT comment_user FOREIGN KEY comment_user (user_id)
    REFERENCES user (<EMPTY>);

-- Reference: movie_award_award (table: movie_award)
ALTER TABLE movie_award ADD CONSTRAINT movie_award_award FOREIGN KEY movie_award_award (award_id)
    REFERENCES award (award_id);

-- Reference: movie_award_movie (table: movie_award)
ALTER TABLE movie_award ADD CONSTRAINT movie_award_movie FOREIGN KEY movie_award_movie (movie_id)
    REFERENCES movie (movie_id);

-- Reference: movie_genre_genre (table: movie_genre)
ALTER TABLE movie_genre ADD CONSTRAINT movie_genre_genre FOREIGN KEY movie_genre_genre (genre_id)
    REFERENCES genre (genre_id);

-- Reference: movie_genre_movie (table: movie_genre)
ALTER TABLE movie_genre ADD CONSTRAINT movie_genre_movie FOREIGN KEY movie_genre_movie (movie_id)
    REFERENCES movie (movie_id);

-- Reference: movie_person_movie (table: movie_person)
ALTER TABLE movie_person ADD CONSTRAINT movie_person_movie FOREIGN KEY movie_person_movie (movie_id)
    REFERENCES movie (movie_id);

-- Reference: movie_person_person (table: movie_person)
ALTER TABLE movie_person ADD CONSTRAINT movie_person_person FOREIGN KEY movie_person_person (person_id)
    REFERENCES person (person_id);

-- Reference: movie_user_movie (table: movie_user)
ALTER TABLE movie_user ADD CONSTRAINT movie_user_movie FOREIGN KEY movie_user_movie (movie_id)
    REFERENCES movie (movie_id);

-- Reference: movie_user_user (table: movie_user)
ALTER TABLE movie_user ADD CONSTRAINT movie_user_user FOREIGN KEY movie_user_user (user_id)
    REFERENCES user (user_id);

-- End of file.

