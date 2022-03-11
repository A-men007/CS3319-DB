--  --------------------------------
-- SCRIPT 3

USE 45_assign2db;

-- Query 1
SELECT tripname FROM bustrip WHERE country = "Italy";

-- Query 2
SELECT DISTINCT(lastname) FROM passenger;

-- Query 3
SELECT * FROM bustrip ORDER BY tripname;

-- Query 4
SELECT tripname, country, startdate FROM bustrip WHERE startdate > "2022-4-30";

-- Query 5
SELECT firstname, lastname, birthdate FROM passenger, passport WHERE passport.passengerid = passenger.passengerid AND citizenshipcountry="USA";

-- Query 6
SELECT tripname, capacity  FROM bustrip, bus  WHERE bustrip.assignedbus = bus.licenseplate AND startdate>"2022-3-30" AND startdate<"2022-9-2";

-- Query 7
SELECT * FROM passenger, passport WHERE passenger.passengerid = passport.passengerid AND expireydate < ADDDATE(CURDATE(), INTERVAL 1 YEAR);

-- Query 8
SELECT firstname, lastname, tripname FROM bustrip, booking, passenger WHERE bustrip.tripid = booking.tripid AND booking.passengerid = passenger.passengerid AND lastname LIKE "S%";

-- Query 9 
SELECT COUNT(passengerid), tripname, bustrip.tripid FROM bustrip, booking WHERE tripname="Castles of Germany"  AND bustrip.tripid = booking.tripid;

-- Query 10
SELECT country, SUM(price)  FROM bustrip, booking WHERE bustrip.tripid = booking.tripid GROUP BY country;

-- Query 11
SELECT firstname, lastname, citizenshipcountry,  tripname, country FROM bustrip, booking, passenger, passport WHERE bustrip.tripid = booking.tripid AND booking.passengerid = passenger.passengerid AND passport.passengerid  = passenger.passengerid AND country <> citizenshipcountry;

-- Query 12
SELECT tripid, tripname FROM bustrip WHERE tripid NOT IN (SELECT tripid FROM booking);

-- Query 13
SELECT firstname, lastname, citizenshipcountry, SUM(price)  FROM (SELECT SUM(price) as totalcost, passengerid   FROM  booking GROUP BY passengerid ORDER BY totalcost DESC LIMIT 1) AS maxprice, 
  passport, passenger, booking WHERE passport.passengerid=passenger.passengerid AND booking.passengerid = passenger.passengerid AND passenger.passengerid AND maxprice.passengerid = passenger.passengerid;

-- Query 14 
SELECT COUNT(passengerid), tripname FROM bustrip, booking WHERE  bustrip.tripid = booking.tripid GROUP BY bustrip.tripid HAVING COUNT(passengerid) < 4;

-- Query 15 
SELECT  tripname as "Bus Trip Name", COUNT(passengerid) as "Current Number of Passengers", capacity as "Capacity of Assigned Bus", licenseplate as "Current Bus Assigned License Plate" FROM bustrip, booking, bus WHERE  bustrip.tripid = booking.tripid AND bus.licenseplate=bustrip.assignedbus GROUP BY bustrip.tripid;

