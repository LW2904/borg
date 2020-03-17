CREATE TABLE IF NOT EXISTS teilnehmer (
    teilnehmerID INT NOT NULL AUTO_INCREMENT,
	vorname VARCHAR(100),
	name VARCHAR(100),
	strasse VARCHAR(100),
	PLZ VARCHAR(10),
	ort VARCHAR(100),
	PRIMARY KEY (teilnehmerID)
	);
	
CREATE TABLE IF NOT EXISTS seminare (
	seminarID INT NOT NULL AUTO_INCREMENT,
	bezeichnung VARCHAR(100),
	datum VARCHAR(100),
	kapazitaet VARCHAR(100),
	PRIMARY KEY (seminarID)
	);
	
CREATE TABLE IF NOT EXISTS buchungen (
	buchungsID INT NOT NULL AUTO_INCREMENT,
	bewertung VARCHAR(100),
	zahlungsstatus VARCHAR(100),
	teilnehmerID INT,
	seminarID INT,
	FOREIGN KEY (teilnehmerID) REFERENCES teilnehmer(teilnehmerID),
	FOREIGN KEY (seminarID) REFERENCES seminare(seminarID),
	PRIMARY KEY (buchungsID)
	);
	
INSERT INTO seminare (bezeichnung,datum,kapazitaet) VALUES 
	('Lesen I', '2020-03-20', 2),
	('Lesen II', '2020-03-22', 2);
	
INSERT INTO teilnehmer (vorname,name,strasse,PLZ,ort) VALUES 
	('Max', 'Muster', 'Berggasse 14', '4020', 'Linz'),
	('Lisa', 'Lustig', 'Holzweg 77', '4320', 'Perg'),
	('Anna', 'Anders', 'Sohlstraße 21', '4600', 'Wels'),
	('Gerd', 'Ganz', 'Kurzegasse 1', '4030', 'Linz');
	
INSERT INTO buchungen (zahlungsstatus,bewertung,teilnehmerID,seminarID) VALUES 
	('bezahlt', 'sehr gut', 1, 1),
	('bezahlt', 'offen', 2, 1),
	('offen', 'offen', 1, 2);
