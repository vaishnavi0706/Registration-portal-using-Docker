CREATE DATABASE SurveyDB;

USE SurveyDB;

CREATE TABLE SurveyResponses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    age INT NOT NULL,
    role VARCHAR(50) NOT NULL,
    recommend VARCHAR(50) NOT NULL,
    languages TEXT,
    comments TEXT,
    submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
