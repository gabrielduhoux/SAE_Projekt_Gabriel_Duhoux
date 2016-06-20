<?php

// Hier muss das login php rein, um zu identifieren und um zu validieren
// Session ist in header.php gestartet
// Cookie setzen?
// password_hash() nicht vergessen
// jQuery einbauen --> zumindest im Menü --> Seiten Französisch und Laitein in der Nav in Dropdown Form

// Datenbank Struktur?
    // Benutzer Tabelle   --> ID, Firstname, Lastname
    // Password Tabelle   --> ID, Passwort gehasht
    // Kommentar Tabelle  --> ID, Comment_Text --> Value des Textfeldes übernehmen

// Jeder Nutzer muss eine klare ID haben --> Mehrere comments, aber klar zugeordnet --> 1 : n Verbindung
// Alle eingabefelder im Formular escapen --> function heisst wie genau? --> php.net


// Was sieht man mehr wenn man angemeldet ist?
    // Man kann kommentieren
    // Man kann Bilder Uploaden --> zB um gemachte Hausaufgaben abzufotografieren und somit zu verschicken
    // man kann Emails direkt aus dem Browser schicken --> Template einbauen (selber bauen ist eine Katastrophe)

// Admin Bereich muss können:
     // Bilder löschen
     // Kommentare löschen
     // Auf kommentare antworten
     // Evtl. mit einem Sterne System abgegebene Aufgaben bewerten --> ??? Muss nicht sein
     // Angezeigte Inhalte auf der Seite evtl. in einer .json Datei bearbeiten? --> Texte / Überschriften / Nav etc.


// Informieren wie ich alles sinnvoll auf eine CD brennen kann.
// Wie bekomme ich die Datenbank und die Tabellen da rein?
// Wie erstelle ich im Zweifel Tabellen so, dass sie sich aus dem Code heraus selber erstellen?
    //  CREATE TABLE
        // ID INT(10),
        // firstname VARCHAR(100),
        // lastname VARCHAR(100),
        // PRIMARY KEY => ID;
    // Kann das so klappen wenn der localhost läuft?



// Schummeln:
    // Alle dateien die wir bisher im Unterricht erstellt haben, können in ähnlicher Form das, was ich hier machen muss.
    // Copy & Paste und dann von den Variablen etc anpassen?
    // Sollte klappen und viel Zeit sparen!


// TO-DO:
    // erstelle eine copy_pasty.php und alles rein, was sinnvoll erscheint
    // Dann einfach anpassen ung fertig :D
    // Nicht mit Robert oder Khadim oder Heike darübe reden, nicht, dass es Probleme gibt :D

?>
