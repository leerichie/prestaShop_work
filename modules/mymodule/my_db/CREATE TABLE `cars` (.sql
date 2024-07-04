CREATE TABLE `cars` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `make` VARCHAR(255) NOT NULL,
    `model` VARCHAR(255) NOT NULL,
    `year` INT NOT NULL,
    PRIMARY KEY (`id`)
);

INSERT INTO `cars` (`make`, `model`, `year`) VALUES
('Suzuki', 'Grand Vitara', 2012),
('Dodge', 'Ram', 2019),
('Toyota', 'Camry', 2020),
('Ferrari', 'F40', 2023),
('Renault', 'Clio', 2015);
