# Log
Hier werden die Ereignisse und erreichten Meilensteine/Iterationen des Tages dokumentiert.
---


## 2013-01-30 Mittwoch
- Sprechstunde bei Plaß
	- Projektantrag erhalten
	- iPod touch von Louchéne erhalten
	- Virtuelle Server und Samsung Galaxy S kommt noch
- Besprechung über weiteren Projekt-Verlauf mit Le
	- Versuch ersten Prototypen bauen
	- Einrichtung von Server und GitHub -> Dokumentation

## 2013-01-31 Donnerstag
- read some jQuery Mobil
- did first GitHub Tutorial with codeschool [Link](http://try.github.com/levels/1/challenges/1)
- first Prototypen finished and uploaded to Dropbox Account
	- Contains 2 Pages -> Home and Standorte und erste Menüpunkte

## 2013-02-04 Montag
- Fortschritte mit GitHub (zuerst commit -m dann push um daten hochzuladen, löschen noch nicht klar)
- Fixe-Leisten Problemnoch nicht geklärt

## 2013-02-05 Dienstag
- Virtuellen Server erhalten→ Webserver, Datenbank, Adresse, User, Passwort
- Plaß meeting
	- Kontakt Frau Nag → Studierendenwerk → Zugriff auf Datenbank
	- Kontakt Herr Kabel → Kommunikationsdesign Student für Mensa Meter Logo
	- Prüfung ob Login mit @haw-hamburg.de E-Mail realisierbar ist -> verworfen
- Prüfung von Twitter und Facebook als Login Möglichkeit

## 2013-02-06 Mittwoch
- 3 Storyboard Seiten erstellt → Login Prozess und Essen Bewerten Prozess
- Aufgabenteilung
	- Le → Facebook Login
	- Daniel → Twitter Login 

## 2013-02-12 Dienstag
- Besprechung mit Dominik Wigger
	- Aktueller Standpunkt des Projekts
	- Rahmenpunkte für ein Logo
	- Hauptverwendungsgrund hat sich klarer herausgestellt
		- Entscheidungshilfe
		- für welche Mensa entscheide ich mich
		-an welcher Mensa schmeckt das Essen heute am Besten
		- Welches essen wir wo angeboten
- Login via Twitter mit Beispiel funktioniert
	- Seiten müssen jedoch neu geladen werden und werden immer noch Error Nachrichten [Tutorial](http://blog.habrador.com/2012/02/sign-in-with-twitter-tutorial.html)

## 2013-02-13
- Login via Twitter mit login-twitbook funktioniert
- Login via Facebook scheint zu funktionieren → muss noch in login-twitbook eingebunden werden
- Erste Logo Entwurf wurde erstellt

## 2013-02-14
Studierendenwerk (B.Nag) teilt uns mit, dass wir keinen Zugang zur Datenbank bekommen
suche nach einem Parser
SimpleHTMLDOM als PHP-Parser implementierung gefunden (http://simplehtmldom.sourceforge.net/)
erste Versuche auf dem Webserver mit Simplehtmldom

## 2013-02-15 bis 19
- Experimentieren und herausfinden wie Daten von Studierendenwerk-Seite mit Simplehtmldom ausgelesen werden kann
- Datum → trennen von Tag und dd.mm.jjjjj
- Unerwartete Ergebnisse tauchen beim auslesen der geparsten Tabellen-Inhalten aufgehalten
unklar woher zusätzliche leere Felder herkommen
- Le findet durch experimentieren heraus, dass Tag und Datum in den Feldern [18] und [19] abgespeichert sind
- Versuch auf Eigenschaften ->plaintext, ->innertext, ->outertext zeigen keine Resultate
- Le setzt ->plaintext an der richtigen Stelle ein und wir haben keine zusätzlichen leeren Felder mehr → Problem solved !!!

## 2013-02-22
- erste Konzeption der gesamten Datenbank
- wir haben nur eine ungefähre Ahnung wie die Tabellen in die Normalformen gebracht werden müssen
es besteht Nachholbedarf bei Relationalen Datenbanken → MySQL

## 2013-02-24
- Parser liest Daten in die Datenbank ein
- App liest Daten aus der Datenbank aus

## 2013-02-26
- Treffen mit Prof. Plaß
	- präsentieren des Zwischenstands
	- Abgabe Projekt-Antrag → Unterschriften etc.

## 2013-03-03
- HomeScreen Icon und Splash Icon werden auf iPod → iOS 6 angezeigt
- alle Projekt-Ordner werden in lowercase bezeichnet

---

## 2013-03-01
- something else happend today (test)

```
javascript Code Syntax
var s = 5;
```

## 2013-03-22
- worked on the parser
	- changed mysql extension from mysql to mysqli (=improved)
	- table will now be created via PHP IF NOT EXISTS with a revision

## 2013-03-23
- worked on the parser
	- tried using the PHP DOM Class instead of [SimpleHTMLDOMParser](http://simplehtmldom.sourceforge.net/) -> Buggy or at leat unsure how to use correct
	- PHP DOMDocument parses Date correctly
	
## 2013-03-25
- worked on the parser
	- can INSERT into Database now
	- trouble with quotations in String -> MySQL throws Error
		- have to purge the strings before saving in DB
		- str_replace, preg_replace should do the trick
