USE Spoilers-DB@170.187.185.240;

CREATE TABLE tannunci (   
  Announcement_ID      int auto_increment primary key,
    User_ID              varchar(200) null,
    ISBN                 int(13)      null,
    Publication_Date     datetime     null,
    Sale_Status          text         null,
    Sale_Price           double(5, 2) null,
    Book_State           int(5)       null,
    Book_Comment         varchar(250) null,
    Is_Digital_Available tinyint(1)   null   
    email_utente                VARCHAR(100),   /*ottenuto dal login di Google*/
    PRIMARY KEY(id_annuncio)    
) ENGINE = InnoDB;

/*Inserimento*/
INSERT INTO tannunci (foto, casa_editrice, titolo, autore, ISBN, prezzo, email_utente)
    VALUES ('$varFoto', '$varCasa_editrice', '$varTitolo', '$varAutore', '$varISBN', $varPrezzo, '$varEmail_utente');


/*Ricerca*/
SELECT foto, casa_editrice, titolo, autore, ISBN, prezzo, email_utente
    FROM tannunci
    WHERE casa_editrice LIKE '%testo della ricerca%' OR
          titolo        LIKE '%testo della ricerca%' OR
          autore        LIKE '%testo della ricerca%' OR
          ISBN          LIKE '%testo della ricerca%' 
    ORDER BY titolo;