CREATE TABLE [User] (
    username nvarchar(345) Primary key,
    password char(60)
);

CREATE TABLE [Car] (
    model nvarchar(50) primary key,
	kmdriven int,
	kmleft int,
	username nvarchar(345),
	FOREIGN KEY (username) REFERENCES [User](username)
);

GO;

CREATE PROCEDURE GetUserCar @username nvarchar(345)
AS
begin
	Select * from Car WHERE username = @username
end

insert into [User] values('jens@mail.com','noget');
insert into Car values('Mazda 2','4200','321','jens@mail.com');

exec GetUserCar @username = 'jens@mail.com'

