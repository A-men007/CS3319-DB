-- ---------------------------------
-- SCRIPT 1

-- Set up the database

SHOW DATABASES;
DROP DATABASE IF EXISTS 45_assign2db;
CREATE DATABASE 45_assign2db;
USE 45_assign2db;


-- Create the tables for the database

SHOW TABLES;

CREATE TABLE passenger (passengerid INT NOT NULL, firstname VARCHAR(20) NOT NULL, lastname VARCHAR(20) NOT NULL,  PRIMARY KEY(passengerid));
CREATE TABLE passport (passportnum CHAR(4) NOT NULL, citizenshipcountry VARCHAR(30) NOT NULL, expireydate DATE NOT NULL, birthdate DATE NOT NULL,passengerid INT NOT NULL, PRIMARY KEY(passportnum),  FOREIGN KEY(passengerid) REFERENCES passenger(passengerid) ON DELETE CASCADE);
CREATE TABLE bus (licenseplate CHAR(7) NOT NULL, capacity INT NOT NULL, PRIMARY KEY (licenseplate));
CREATE TABLE bustrip (tripid INT NOT NULL, tripname VARCHAR(50) NOT NULL, startdate DATE NOT NULL, enddate DATE NOT NULL, country VARCHAR(30) NOT NULL, assignedbus CHAR(7) NOT NULL, PRIMARY KEY (tripid), FOREIGN KEY(assignedbus) REFERENCES bus(licenseplate));
CREATE TABLE booking (passengerid INT NOT NULL, tripid INT NOT NULL, price DECIMAL(10,2) NOT NULL, PRIMARY KEY (passengerid, tripid), FOREIGN KEY (passengerid) REFERENCES passenger(passengerid) ON DELETE CASCADE, FOREIGN KEY (tripid) REFERENCES bustrip(tripid) ON DELETE RESTRICT);

SHOW TABLES;
