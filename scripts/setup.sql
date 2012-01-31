CREATE TABLE `album` (
    id int(11) NOT NULL auto_increment,
    artist varchar(100) NOT NULL,
    title varchar(100) NOT NULL,
    PRIMARY KEY (id)
);

INSERT INTO album (artist, title)
    VALUES ('Coldplay', 'Mylo Xyloto');
INSERT INTO album (artist, title)
    VALUES ('Noel Gallagher', 'Noel Gallagher\'s High Flying Birds!');
INSERT INTO album (artist, title)
    VALUES ('Adele', '21');
INSERT INTO album (artist, title)
    VALUES ('Matt Cardle', 'Letters');
INSERT INTO album (artist, title)
    VALUES ('Steps', 'The Ultimate Collection');