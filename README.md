# 2. Übung - PHP Grundlagen
### Schuljahr 24/25
### Lehrgang 2
### Übungstag 20.11.2024
### Krenn Andy
### Gruppe B

<br>

# Umsetzung

Das Programm liest 3 Eingaben des Users ein. _Menge 1_, _Menge 2_ und _Preis/Liter_. <br>
Die Werte werden per _GET Requests im Programm aufgenommen und verarbeitet. <br>
Berechnet wird der Gesamtpreis, von beiden Mengen, der getankt wird. 

- ### **Welche Informationen liefert die Funktion phpinfo();**
  - PHP-Version und -Konfiguration.
  - Aktivierte PHP-Module und deren Versionen.
  - Server-Informationen (z.B. Webserver und Architektur).
  - Umgebungsvariablen des Servers.
  - PHP-Datenbankerweiterungen und deren Versionen.
  - Pfad zur php.ini-Datei.
  - Fehlerberichtseinstellungen.
  - Dateizugriffsrechte und -einstellungen.

<br>

- ### **Wozu dienen folgende Optionen in der PHP.INI:**
- **PHP-Fehler ausgeben**
  - _display_errors_ Steuert, ob Fehler auf der Webseite angezeigt werden.
- **Speichernutzung und die Laufzeit deiner Skripte limitieren**
  - _memory_limit_ 
    - Begrenzung des maximalen Speichers
  - _max_execution_time_ 
    - Begrenzung der Skriptlaufzeit.

- **allow_url_fopen = off**
  - Verhindert das Öffnen von externen URLs mit Funktionen wie _fopen()_
- **safe-mode = on**
  - Beschränkt den Zugriff auf Systemressourcen
- **session.auto_start = off**
  - Verhindert den automatischen Start von Sessions bei jedem Seitenaufruf 

