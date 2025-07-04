CREATE TABLE `accounts` ( `id` INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, `uuid` CHAR(36) NOT NULL UNIQUE, -- for public-safe identifiers `email` VARCHAR(255) NOT NULL UNIQUE, `username` VARCHAR(50) NOT NULL UNIQUE, `password` VARCHAR(255) NOT NULL, `full_name` VARCHAR(100) DEFAULT NULL, `phone` VARCHAR(20) DEFAULT NULL, `profile_picture` VARCHAR(255) DEFAULT NULL, `status` ENUM('active', 'inactive', 'banned') DEFAULT 'inactive', `is_verified` TINYINT(1) DEFAULT 0, `role` ENUM('user', 'moderator', 'creator', 'admin') DEFAULT 'user', `last_login_at` DATETIME DEFAULT NULL, `created_at` DATETIME DEFAULT CURRENT_TIMESTAMP, `updated_at` DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP, `deleted_at` DATETIME DEFAULT NULL ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `accounts` (
    `uuid`,
    `email`,
    `username`,
    `password`,
    `full_name`,
    `phone`,
    `profile_picture`,
    `status`,
    `is_verified`,
    `role`,
    `last_login_at`
) VALUES (
    UUID(), -- generates a unique UUID
    'johndoe@example.com',
    'johndoe',
    '$2y$10$EXAMPLEHASHEDPASSWORDstringexample1234567890', -- use password_hash()
    'John Doe',
    '+1234567890',
    NULL,
    'active',
    1,
    'user',
    NOW()
);

updted------------
INSERT INTO accounts (
    uuid,
    email,
    username,
    password,
    full_name,
    phone,
    profile_picture,
    status,
    is_verified,
    role,
    last_login_at,
    gender,
    age,
    height_cm,
    religion,
    community,
    education,
    profession,
    country,
    state,
    city,
    hobbies,
    created_at,
    updated_at
) VALUES (
    'e2b7d3e4-7d02-4f3e-9fa9-123456789abc', -- UUID
    'jane.doe@example.com',
    'janedoe123',
    '$2y$10$XXXXXXXXXXXXXXXXXXXXXXXXXXXXXX', -- hashed password
    'Jane Doe',
    '9876543210',
    'uploads/jane.jpg',
    'active',
    1,
    'user',
    NOW(),
    'female',
    28,
    165,
    'Hindu',
    'Maratha',
    'MBA in Marketing',
    'Marketing Manager',
    'India',
    'Maharashtra',
    'Pune',
    'travel, reading, music',
    NOW(),
    NOW()
);

















CREATE TABLE families (
    family_id INT AUTO_INCREMENT PRIMARY KEY,    -- Internal unique ID
    family_code VARCHAR(20) UNIQUE,               -- e.g., 'FAM-00123', unique code
    family_name VARCHAR(100) NOT NULL,
    head_of_family VARCHAR(100) NOT NULL,
    members_count INT DEFAULT 1,
    address TEXT,
    contact_number VARCHAR(20),
    registered_on DATE,
    photo_url TEXT
);
CREATE TABLE family_members (
    member_id INT AUTO_INCREMENT PRIMARY KEY,
    family_id INT NOT NULL,
    family_code VARCHAR(20) NOT NULL,          -- store family_code here too
    full_name VARCHAR(100) NOT NULL,
    relation_to_head VARCHAR(50),
    date_of_birth DATE,
    gender VARCHAR(10),
    job VARCHAR(100),
    education VARCHAR(100),
    current_status VARCHAR(100),
    FOREIGN KEY (family_id) REFERENCES families(family_id) ON DELETE CASCADE
);
INSERT INTO families (family_code, family_name, head_of_family, members_count, address, contact_number, registered_on)
VALUES ('FAM-00123', 'The Johnsons', 'Michael Johnson', 5, '123 Maple Street, Springfield', '(123) 456-7890', '2024-03-15');
INSERT INTO family_members (
    family_id, full_name, relation_to_head, date_of_birth, gender, job, education, current_status
) VALUES
(1, 'Michael Johnson', 'Head', '1980-01-01', 'Male', 'Manager', 'MBA', 'Working'),
(1, 'Sarah Johnson', 'Spouse', '1982-05-10', 'Female', 'Homemaker', 'B.A. Literature', 'Homemaker'),
(1, 'Emily Johnson', 'Daughter', '2010-09-15', 'Female', NULL, '10th Grade', 'Student');
ALTER TABLE families
ADD COLUMN family_email VARCHAR(255) UNIQUE AFTER contact_number,
ADD COLUMN password VARCHAR(255) NOT NULL AFTER family_email;
CREATE TABLE certificate_requests (
    id INT AUTO_INCREMENT PRIMARY KEY,
    family_id INT NOT NULL,
    certificate_type VARCHAR(50) NOT NULL,
    details TEXT,
    status VARCHAR(20) DEFAULT 'Pending',
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
ALTER TABLE certificate_requests 
ADD COLUMN certificate_file VARCHAR(255) NULL AFTER status;
CREATE TABLE announcements (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME ON UPDATE CURRENT_TIMESTAMP
);
---------------menu--------------------s
INSERT INTO `menus` (`id`, `name`, `url`, `icon`, `parent_id`, `role_id`, `order`, `is_active`) VALUES (NULL, 'Donation Purposes', '#', NULL, NULL, '1', '1', '1');

INSERT INTO `menus` (`id`, `name`, `url`, `icon`, `parent_id`, `role_id`, `order`, `is_active`) VALUES (NULL, 'add announcements', 'add-announcements', NULL, '55', '1', '2', '1');

CREATE TABLE donation_purposes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    description TEXT,
    is_active TINYINT(1) DEFAULT 1
);
CREATE TABLE donations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    family_id INT NOT NULL,



    amount DECIMAL(10, 2) NOT NULL,
    donation_date DATE NOT NULL,
    notes TEXT,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);
ALTER TABLE donations ADD COLUMN purpose_id INT NOT NULL;
ALTER TABLE donations ADD FOREIGN KEY (purpose_id) REFERENCES donation_purposes(id);
