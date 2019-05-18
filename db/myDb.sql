CREATE TABLE bususer (
	Personid SERIAL PRIMARY KEY,
	LastName varchar(255),
	FirstName varchar(255),
	Phone varchar(30),
	Age int CHECK(Age > 0),
	Address varchar(255)
);

CREATE TABLE place(
	Placeid SERIAL PRIMARY KEY,
	Name varchar(255)
);

CREATE TABLE ticket(
	Ticketid SERIAL PRIMARY KEY,
	Destination_id varchar(255),
	Origin_id varchar(255),
	Price money
	);

CREATE TABLE result_id(
	Ticketid int REFERENCES ticket(Ticketid),
	Userid int REFERENCES bususer(Personid)
); 