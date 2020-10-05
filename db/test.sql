    CREATE TABLE `students` (
        `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
        `name` VARCHAR(100) NOT NULL,
        `email` VARCHAR(100)NOT NULL,
        `gender` CHAR(6) NOT NULL,
        `dob` DATE NOT NULL,
        `age` TINYINT UNSIGNED
    );

    INSERT INTO students (name, email, gender, dob, age) VALUE 
    ("John", "john@gmail.com","male", "2000/10/12", 20),
    ("Mary", "mary@gmail.com","female", "1995/10/12", 25 ),
    ("Alfred", "alfred@gmail.com","male", "2003/10/12", 18),
    ("James", "james@gmail.com", "male", "2000/05/10", 20);

    CREATE TABLE `courses` (
        `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
        `name` VARCHAR(100) NOT NULL
    );

    INSERT INTO courses (name) VALUE 
    ("PHP"), ("JavaScript"), ("Python");

    ALTER TABLE students ADD COLUMN course_id INT UNSIGNED ;

    INSERT INTO students (name, email, gender, dob, age, course_id) VALUE 
    ("John", "john@gmail.com","male", "2000/10/12", 20, 1),
    ("Mary", "mary@gmail.com","female", "1995/10/12", 25, 3),
    ("Alfred", "alfred@gmail.com","male", "2003/10/12", 18, 2);


    -- select all record from courses  / LEFT join -- 
    SELECT students.name, courses.name as course 
    FROM courses LEFT JOIN students ON students.course_id = courses.id;  

    -- select all record from students  / RIGHT join -- 
    SELECT students.name, courses.name as course 
    FROM courses RIGHT JOIN students ON students.course_id = courses.id;  

    -- select all record from students.course_id == courses.id / INNER JOIN --
    SELECT students.name, courses.name as course 
    FROM courses JOIN students ON students.course_id = courses.id;  

    -- Povit Table / used Many to Many Relationship -- 
    CREATE TABLE course_student (student_id INT UNSIGNED, course_id INT UNSIGNED); 

    INSERT INTO course_student (student_id , course_id) VALUE 
    (1, 1), (1,2), (2, 2), (2,3), (3,1), (3,3), (4,2);
    
    -- Many to Many Relationship -- 
    SELECT * FROM students
        JOIN course_student ON students.id = course_student.student_id 
        JOIN courses ON courses.id = course_student.course_id ; 

     SELECT 
        students.name, course.name as course 
    FROM students
        JOIN course_student ON students.id = course_student.student_id 
        RIGHT JOIN courses ON courses.id = course_student.course_id ; 



  --- Backup Database shool ----
  me:~$ mysqldump -u root -p school > school_backup.sql

  -- Restore Database school---
  me:~$ mysql -u root -p -h localhost school < school_backup.sql 