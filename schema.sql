CREATE TABLE soft_eng_accounts (
    employee_id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(16),
    last_name VARCHAR(16),
    age INT,
    gender VARCHAR(32),
    date_of_birth DATE,
    religion VARCHAR(32),
    homeAddress VARCHAR(128),
    date_registered TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    physical_conditions VARCHAR(512)
);
