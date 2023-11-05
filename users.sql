/*************/
/* User */
/*************/

CREATE TABLE user (
  user_id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL,
  email VARCHAR(256) NOT NULL,
  password VARCHAR(64) NOT NULL,
  registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
);

/*************/
/** MY GAME **/
/*************/

/* Table for managing users score for myGame */
CREATE TABLE golf_stats (
  stat_id INT AUTO_INCREMENT PRIMARY KEY,
  course_name VARCHAR(100) NOT NULL,
  play_date DATE NOT NULL,
  holes_played INT NOT NULL,
  score INT NOT NULL,
  putts INT NOT NULL,
  misc_info TEXT,
  user_id INT, --want to associate stats with a user
  FOREIGN KEY (user_id) REFERENCES user(user_id) -- Reference to the User Table
);

CREATE TABLE user_golf_stats (
  user_stat_id INT AUTO_INCREMENT PRIMARY KEY,
  user_id INT NOT NULL,
  FOREIGN KEY (user_id) REFERENCES user(user_id), -- Reference to the User Table
  average_score DECIMAL(5,2),
  par INT,
  handicap DECIMAL(5,2),
  putts_per_round DECIMAL(4,2),
  putts_per_hole DECIMAL(4,2),
  rounds_played INT,
  FOREIGN KEY (rounds_played) REFERENCES golf_stats(stat_id) -- Reference to Golf Stats Table
);


/*************/
/**  Groups **/
/*************/

CREATE TABLE basic_golf_stats (
  stat_id INT AUTO_INCREMENT PRIMARY KEY,
  player_name VARCHAR(100) NOT NULL,
  play_date DATE NOT NULL,
  holes_played INT NOT NULL,
  putts INT NOT NULL,
  misc_info TEXT
);


