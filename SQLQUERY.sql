CREATE TABLE [User] (
    username nvarchar(345) Primary key,
    password char(60)
);

GO

CREATE TABLE [Car] (
	id int	identity(1,1) primary key,
    model nvarchar(50),
	kmdriven int,
	kmleft int,
	username nvarchar(345),
	FOREIGN KEY (username) REFERENCES [User](username)
);

GO

CREATE OR ALTER PROCEDURE GetUserCar @username nvarchar(345)
AS
begin
	Select model,kmdriven,kmleft,username from Car WHERE username = @username
end

insert into [User] values('jens@mail.com','noget');
insert into Car values('Mazda 2','4200','321','jens@mail.com');

exec GetUserCar @username = 'jens@mail.com'

GO

CREATE PROCEDURE CreateUser @username nvarchar(345), @password char(60)
AS
begin
	insert into [User] values(@username,@password);
end

GO

CREATE PROCEDURE GetUserHash @username nvarchar(345)
AS
begin
	select [password] from [User] where username = @username
end