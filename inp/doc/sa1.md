# Programmiersprachen

## Klassifizierung

- __Low-level__ Sprachen: nahe an dem Befehlssatz der CPU, know-how über die verwendete Hardware ist notwendig
- __High-level__ Sprachen:
    - einfache Entwicklung (z.B. ähnlich zu natürlichen Sprachen)
    - einzelne Ausdrücke können vielen "Maschinenbefehlen" entsprechen
    - höherer Portabilitätsgrad (bzgl. Architektur u. mögl. OS)
    - keine oder wenig Speicherverwaltung

## Assemblersprache

Ein __Assembler__ übersetzt __Assemblersprache__ zu einer __Maschinensprache__. Ausdrücke der Assemblersprache sind _oft nahezu deckungsgleich_ mit korrespondierenden Ausdrücken der jeweiligen Maschinensprache.

### Register (8088/86)

Prozessorinterne Speicherplätze, mit symbolischen Namen bezeichnet.

```
   |   16b   |
   | 8b | 8b |
AX | AH | AL |
BX | BH | BL |
CX | CH | CL |
DX | DH | DL |
```

Wobei `b` für Bit, `H` für High und `L` für Low stehen.

### `MOV` und `ADD`

- `MOV <Register dst>, <Register src>`
- `ADD <Register dst>, <Register src>`, Inhalt von `src` + Inhalt von `dst`, Ergebnis wird in `dst` gespeichert

## Höhere Programmiersprachen

### Compiler

Wie _Assembler_ ein __Übersetzungsprogramm__, __optimiert__ jedoch das Programm bzgl. __Geschwindigkeit__ und __Speicherbedarf__.

### Fortran

- _For_mula _Tran_slation
- 1954 von IBM entwickelt
- kompilierte Sprache
- naturwissenschaftlicher Bereich

### COBOL

- _co_mmon _b_usiness-_o_riented _l_anguage
- um 1959 erschienen
- kompilierte Sprache
- betriebswirtschaftlicher Bereich

### Pascal

- 1971 entwickelt
- v.a. Lehrsprache für strukturierte Programmierung
- sauberer Aufbau führt zu wartbaren u. robusten Programmen

### C

- 1971 von Dennis Ritchie (Bell Labs) entwickelt
- zur Programmierung von Unix geschaffen (Systemprogrammierung)
- sicherheitskritische Funktionen die robuste Entwiclung erschweren

### Native Sprachen

...werden für eine bestimmte CPU-Architektur kompiliert und sind nur auf jener Architektur ausführbar.

## Objektorientierte Programmierung

Grundgedanke ist die __natürliche Welt besser abbilden__ zu können. Neue Ansätze: __Vererbung__, __Kapselung__ und __Polymorphie__.

### Objektorientierte Sprachen

#### Veraltet

__Simula-67, Smalltalk__

#### C++

C mit _bedeutend_ mehr Komplexität, u.a. objektorientierte Konzepte.

#### Java, C#

Durch die "__Java-Technologie__" kann ein Programm auf sich durch Architektur und Betriebssystem unterscheidenden Systemen ausgeführt werden.

```
Kompilierung
    Quellcode -> Bytecode
Laufzeit (Zielsystem)
    Bytecode -[JRE]> Maschinensprache
```

Für diesen Prozess muss jedoch selbstverständlich die JRE auf dem Zielsystem vorhanden sein.

# Sprachparadigmen

Ein Programmierparadigma ist ein einer Programmiersprache oder Programmiertechnik __zugrundeliegende Prinzip__.

## Imperativ

Die __algorithmischen Aspekte__ einer Lösung stehen im Vordergrund, eine Menge von Befehlen wird in einer __genau definierten Reihenfolge__ ausgeführt.

Orientiert sich an der klassischen __Von-Neumann-Architektur__, welche Befehle ebenfalls nacheinander abarbeitet.

### Strukturierte Programmierung

Statt Sprungbefehlen (`jmp`, `goto`) werden Kontrollstrukturen wie __bedingte Verzweigungen__ (`if/else`) und __Schleifen__ (`while`, `do/while`) verwendet.

### Prozedurale Programmierung

Programme werden in __kleinere Teilaufgaben__ (Prozeduren) aufgespaltet.

## Objektorientert

Baut auf dem Konzept der __Objektorientierung__ auf, fördert __Flexibilität__ (nein) und __Wiederverwendbarkeit__.

Aus der realen Welt werden __Objekte__ mit __Namen__, __Eigenschaften__ und __Operatoren__ abgeleitet.

## Deklarativ

Nur das Ergebnis wird beschrieben, die Implementation der Ergebnisbeschaffung bleibt im Hintergrund (siehe SQL), und ist dadurch im Nachhinein einfacher optimierbar.

### Funktional

Ein Programm ist eine Abbildung der Eingabe auf die Ausgabe und besteht fast ausschließlich aus Funktionen.

Beispiele: __F#, Haskell__

### Logisch

Formulierung von logischen Aussagen (Regeln) auf deren Basis der Interpreter Lösungsaussagen herleitet.

# OSI Modell

Sieben Abstraktionsschichten:

```
Layer VII   Anwedungsschicht
Layer VI    Darstellungsschicht
Layer V     Kommunikationsschicht
Layer IV    Transportschicht
Layer III   Vermittlungsschicht
Layer II    Sicherungsschicht
Layer I     Physikalische Schicht   
```

Nur Layer I versendet tatsächlich Daten, andere Schichten kommunizieren nur scheinbar miteinander. 

## Layer I - Physikalische Schicht

### Geschwindigkeitsbezeichnungen

```
Klassisches Ethernet        10   Mbit/s
Fast Ethernet               100  Mbit/s
Gigabit Ethernet            1000 Mbit/s
TenGigabit Ethernet         10   Gb/s
```
### Koaxial/Thin-Wire Kabel

- Netzmantel wirkt wie ein Faraday'scher Käfig
- max. 180m
- max. 4 Repeater, also max. 900m
- 10Mbit/s bis zu 720Mbit/s

### Twisted Pair Kabel

Acht Drähte, jeweils zwei sind verdrillt, die Paare sind wieder verdrillt. Die Verdrillung vermeidet Parallelführung und dadurch Störungen.

Stecker sind problematisch nachdem die Kabel hier parallel laufen.

#### Abschirmungen

- UTP, keine
- STP, nur Paare
- S/UTP, nur außen
- S/STP, Paare und außen
- S/FTP, außen Abschirmung, Paare mit Netz oder Folie

#### RJ45

- 8 Kontakte
- bis 100Mbit/s, 4 Adern (also 2 volle Verbindungen/Kabel mögl.)
- GigaBit benötigt alle 8
- max. 100m mit max. 4 Repeatern 500m

#### Kategorien

- 1, Telefon
- 5/5e, Fast Ethernet
- 7/8, Hochabgeschirmt, Gigabit/TenGigaBit

### Glasfaserkabel

- 10 bis 120km, 1000km mit Verstärker
- normalerweise 100Mbit/s bis 1000Mbit/s
- möglich 10GBit/s bis 1000TBit/s
- abhörsicher
- geringer Kerndurchmesser deshalb für große Distanzen geeignet

### Netzwerktopologien

#### Sternstruktur

Jedes Gerät ist direkt mit dem zentralen Gerät verbunden.

#### Busstruktur

Alle Geräte sind an einem Bus angeschlossen. An beiden Enden muss sich ein __Abschlusswiderstand__ befinden, ansonsten würden Signale reflektiert werden.

#### Ringstruktur

Wie Bus, nur sind die Geräte direkt mit ihren Nachbarn verbunden, festgelegte Richtung.

### Geräte

- Repeater (Verstärker)
- Hub (passive Verteiler, mit eingebautem Repeater auch "repeating Hub", intern als Bus implementiert ergo sind alle angeschl. Geräte in der selben Kollisionsdomäne)
- Konverter
- Transceiver (Bauteil zum Senden/Empfangen von Signalen)

### CSMA/CD

```
Carrier Sensing     Sender überprüft ob Übertragungsmedium frei ist bevor er
                    sendet
Multiple Access     Mehrere Sender/Empfänger teilen sich ein Medium
Collision Detection Wird eine Kollision entdeckt wird ein Jam Signal ausgesendet
                    -> Sender müssen Übertragung abbrechen und wiederholen
```

## Layer II - Sicherungsschicht

### MAC

Feste __physikalische Adresse__, in der Hardware kodiert. Weltweit einmalig und üblicherweise im Hexadezimalsystem notiert.

```
         Kennzeichnung des Geräts
         --------
HH.HH.HH.XX.XX.XX
--------
Kennung des Herstellers
```

### Broadcast

FF.FF.FF.FF.FF.FF (alle Bit auf 1) ist reserviert für Nachrichten an _alle_ Geräte im aktuellen Netz.

### ARP- Adressermittlung

Ermittlung der MAC-Adresse im Intranet.

1. Sender sendet `SLA SPA ELA ???` wobei `S`für Sender,`E`für Empfänger, `PA` für physische Adresse und `LA` für logische Adresse (IP) stehen als __Broadcast__
2. Fühlt sich ein Gerät angesprochen (eigene IP == ELA) trägt es seine MAC ein `SLA SPA ELA EPA`
3. Paket wird zurück an den Sender `SLA SPA` gesendet

### Ethernet Paket (Ethernet Frame)

__Maximal 1518Byte, minimal 64Byte__ (wenn kleiner: Probleme bei Kollisionserkennung)

Beispiel:

```
        EMAC | SMAC | LEN | DATA | PADDING | FCS
Byte    6    | 6    | 2   | 46-1500        | 4

EMAC/SMAC   ... MAC Adresse Empfänger/Sender
LEN         ... Länge des Datenpakets
DATA        ... Nutzdaten -wie von Layer III übergeben
PADDING     ... „Dummy Bytes“ falls Framelänge unter 64Bytefällt
FCS         ... Frame Check Sequence
```

### Geräte

#### Bridge

Unterteilen Netze in Teilsegmente welche nur die Pakete enthalten welche für sie bestimmt sind (im gegensatz zum Hub, der alle Pakete überall wieder ausgibt).

#### Switch

Mehrere Bridges in einem Gerät, speichern Adressinformationen um den Datenverkehr zu beschleunigen.

Jedes Gerät kommuniziert über eine Bridge, hat eine eigene Kollisionsdomäne.
