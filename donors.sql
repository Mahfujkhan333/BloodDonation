CREATE DATABASE blood_donor;

USE blood_donor;

CREATE TABLE donors (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    blood_group VARCHAR(10) NOT NULL,
    address VARCHAR(255) NOT NULL,
    phone VARCHAR(15) NOT NULL,
    available BOOLEAN NOT NULL DEFAULT TRUE
);
INSERT INTO donors (name, password, blood_group, address, phone, available) VALUES
('Alice Johnson', 'alice123', 'A+', 'Badda', '1234567890', 1),
('Bob Smith', 'bob123', 'B+', 'New Market', '0987654321', 0),
('Charlie Brown', 'charlie123', 'O+', 'Rampura', '1122334455', 1),
('Daisy Miller', 'daisy123', 'AB-', 'Uttara', '2233445566', 1),
('Eve Davis', 'eve123', 'A-', 'Motijheel', '3344556677', 0),
('Frank White', 'frank123', 'O-', 'Notun Bazar', '4455667788', 1),
('Grace Adams', 'grace123', 'B-', 'Badda', '5566778899', 1),
('Henry Black', 'henry123', 'A+', 'New Market', '6677889900', 0),
('Ivy Lee', 'ivy123', 'B+', 'Rampura', '7788990011', 1),
('Jack Brown', 'jack123', 'O+', 'Uttara', '8899001122', 1),
('Karen Taylor', 'karen123', 'AB+', 'Motijheel', '9900112233', 1),
('Leo King', 'leo123', 'A-', 'Notun Bazar', '1011121314', 0),
('Mia Young', 'mia123', 'B-', 'Badda', '1213141516', 1),
('Nathan Scott', 'nathan123', 'O-', 'New Market', '1314151617', 1),
('Olivia Moore', 'olivia123', 'A+', 'Rampura', '1415161718', 0),
('Paul Walker', 'paul123', 'B+', 'Uttara', '1516171819', 1),
('Quinn Turner', 'quinn123', 'O+', 'Motijheel', '1617181920', 1),
('Ruby Harris', 'ruby123', 'AB-', 'Notun Bazar', '1718192021', 1),
('Sam Green', 'sam123', 'A-', 'Badda', '1819202122', 0),
('Tina Carter', 'tina123', 'B-', 'New Market', '1920212223', 1);

