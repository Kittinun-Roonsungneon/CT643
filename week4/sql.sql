-- Create table for employees
CREATE TABLE employee (
    uuid CHAR(36) PRIMARY KEY,
    username VARCHAR(255) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    salt VARCHAR(255) NOT NULL,
    nameTH VARCHAR(255),
    nameEN VARCHAR(255),
    studentID VARCHAR(255)
);

-- Create table for token logs
CREATE TABLE token_log (
    row_id INT AUTO_INCREMENT PRIMARY KEY,
    employee_id CHAR(36) NOT NULL,
    jwt_token VARCHAR(255) NOT NULL,
    created_at DATETIME NOT NULL,
    login_type VARCHAR(50),
    access_code_id INT,
    FOREIGN KEY (employee_id) REFERENCES employee(uuid),
    FOREIGN KEY (access_code_id) REFERENCES access_code_log(row_id)
);

-- Create table for access code logs
CREATE TABLE access_code_log (
    row_id INT AUTO_INCREMENT PRIMARY KEY,
    access_code VARCHAR(255) UNIQUE NOT NULL,
    created_at DATETIME NOT NULL,
    token_before VARCHAR(255),
    token_after VARCHAR(255),
    token_create_at DATETIME
);
