USE mydb;
CREATE TABLE investments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    investname VARCHAR(100) NOT NULL,
    amount DECIMAL(10, 2) NOT NULL,
    date DATE NOT NULL,
    country VARCHAR(50) NOT NULL
);
```