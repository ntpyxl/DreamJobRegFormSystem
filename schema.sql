CREATE TABLE softEngAccounts (
    employee_id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(16),
    last_name VARCHAR(16),
    age INT,
    date_of_birth INT,
    religion VARCHAR(32),
    homeAddress VARCHAR(128),
    date_registered TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    physical_conditions VARCHAR(512)
);