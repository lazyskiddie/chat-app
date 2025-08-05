# chat-app

A lightweight, real-time group chat web application built using PHP, MySQL, and AJAX. This app allows multiple users to send and receive messages instantly in a shared chat room — no page reloads required.

----------------------------------------------------------------------------------------------------------

# 🚀 Features
- Real-time group messaging with AJAX
- Simple and clean UI with dark theme (WhatsApp style)
- Stores chat messages in MySQL
- User joins with a name (no login required)
- Responsive design for mobile & desktop

-------------------------------------------------------------------------------------------------------------

# 🛠️ Tech Stack
- Frontend: HTML, CSS, JavaScript (AJAX)
- Backend: PHP (vanilla)
- Database: MySQL
- Hosting Compatibility: Works with any PHP-enabled hosting InfinityFree.

----------------------------------------------------------------------------------------------------------------

🧑‍💻 How to Run Locally
Clone the Repository
git clone https://github.com/yourusername/chat-app.git
cd chat-app
Setup MySQL Database
Create a database, e.g., chatapp
Run the following SQL to create the table:
CREATE TABLE messages (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50),
  message TEXT,
  timestamp DATETIME DEFAULT CURRENT_TIMESTAMP
);
Update db_config.php
$conn = mysqli_connect("localhost", "your_user", "your_password", "chatapp");
Launch in Browser
Open index.html in your browser (or host it on a local server like XAMPP).
Start chatting!

