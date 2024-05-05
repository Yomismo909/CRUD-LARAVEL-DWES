drop schema students;
create schema students;
use students;
-- Creación de la tabla Estudiantes
CREATE TABLE Estudiantes (
    id_estudiante INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50),
    apellido VARCHAR(50),
    fecha_nacimiento DATE,
    direccion VARCHAR(100)
);
-- Creación de la tabla Profesores
CREATE TABLE Profesores (
    id_profesor INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50),
    apellido VARCHAR(50),
    clase VARCHAR(50)
);
-- Creación de la tabla Clases
CREATE TABLE Clases (
    id_clase INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50),
    descripcion TEXT,
    profesor_id INT,
    FOREIGN KEY (profesor_id) REFERENCES Profesores(id_profesor)
);

-- Creación de la tabla de relación Estudiantes_Clases
CREATE TABLE Estudiantes_Clases (
    id_estudiante INT,
    id_clase INT,
    PRIMARY KEY (id_estudiante, id_clase),
    FOREIGN KEY (id_estudiante) REFERENCES Estudiantes(id_estudiante),
    FOREIGN KEY (id_clase) REFERENCES Clases(id_clase)
);

-- Inserción de datos
INSERT INTO Estudiantes (nombre, apellido, fecha_nacimiento, direccion) 
VALUES 
    ('Juan', 'Perez', '2000-01-15', 'Calle Principal 123'),
    ('María', 'Gomez', '1999-05-20', 'Avenida Central 456'),
    ('Pedro', 'Rodriguez', '2001-11-10', 'Plaza Mayor 789'),
    ('Ana', 'Martinez', '2002-03-25', 'Calle Secundaria 321'),
    ('Carlos', 'Lopez', '2000-08-05', 'Paseo de la Reforma 567'),
    ('Laura', 'Diaz', '2001-02-12', 'Calle Libertad 890'),
    ('Luis', 'Sanchez', '1998-09-30', 'Avenida Independencia 234'),
    ('Elena', 'Ramirez', '2002-06-18', 'Calle Real 567'),
    ('Miguel', 'Torres', '2003-04-08', 'Paseo del Prado 890'),
    ('Sofia', 'Flores', '1999-07-22', 'Calle Mayor 123'),
    ('Javier', 'Garcia', '2000-12-01', 'Avenida Juarez 456'),
    ('Paula', 'Hernandez', '2001-10-14', 'Plaza de Armas 789'),
    ('Diego', 'Vazquez', '1998-04-30', 'Calle del Sol 321'),
    ('Natalia', 'Rojas', '1999-11-20', 'Avenida de los Insurgentes 567'),
    ('Andres', 'Molina', '2002-08-15', 'Paseo de la Castellana 890'),
    ('Valeria', 'Ortega', '2003-03-08', 'Calle Alcala 123'),
    ('Gabriel', 'Gutierrez', '2000-06-22', 'Avenida Reforma 456'),
    ('Lucia', 'Navarro', '2001-01-01', 'Plaza Mayor 789'),
    ('Daniel', 'Santos', '1998-10-14', 'Calle Gran Via 321'),
    ('Julia', 'Castro', '1999-09-20', 'Paseo de la Reforma 567');

INSERT INTO Profesores (nombre, apellido, clase) 
VALUES 
    ('Carlos', 'Ruiz', 'Matemáticas'),
    ('Ana', 'Garcia', 'Historia'),
    ('David', 'Lopez', 'Física');

INSERT INTO Clases (nombre, descripcion, profesor_id) 
VALUES 
    ('Álgebra', 'Introducción a las operaciones algebraicas', 1),
    ('Historia del Arte', 'Recorrido por las principales corrientes artísticas', 2),
    ('Física Clásica', 'Estudio de los principios fundamentales de la física', 3),
    ('Cálculo', 'Análisis de funciones y cálculo diferencial', 1),
    ('Historia Contemporánea', 'Acontecimientos importantes del siglo XX', 2);
