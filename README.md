# Budget-Management-System-
Final font end ALX Project

Files link
https://docs.google.com/presentation/d/1NZac_I2yJNQ-ERjwF4BIw2zL5TxOdBdm/edit?usp=sharing&ouid=107619520712788039163&rtpof=true&sd=true

Git Link
https://github.com/nayere/Budget-Management-System-/tree/main

How to install
Download content from git 
 Installation Instructions for the Budget Management System using XAMPP

This guide will help you install and run your PHP-based Budget Management System using XAMPP. Follow these steps to set up your local environment and get the system running.

---

 Prerequisites

- Download and install XAMPP on your computer. [Follow this guide](https://www.apachefriends.org/index.html) to install XAMPP if you haven't already.
- Download the project files for the Budget Management System (PHP files, SQL database dump, etc.).

---

 Step 1: Set Up XAMPP

1. Start XAMPP:
   - Open the XAMPP Control Panel from your installation directory (e.g., `C:\xampp\xampp-control.exe` on Windows).
   - Start the Apache and MySQL services by clicking the Start button next to each service.

2. Verify Apache and MySQL are Running:
   - Open your browser and go to `http://localhost`. You should see the XAMPP dashboard.
   - If the page loads, it means Apache is running properly.

---

 Step 2: Add Project Files to XAMPP Directory

1. Navigate to the XAMPP `htdocs` folder:
   - The `htdocs` folder is the root directory for your PHP applications. By default, this folder is located at:
     - Windows: `C:\xampp\htdocs`
     - macOS: `/Applications/XAMPP/htdocs`
     - Linux: `/opt/lampp/htdocs`

2. Copy the Project Files:
   - Copy the entire project folder (Budget Management System) into the `htdocs` directory.
   - Example: After copying, the project path might look like `C:\xampp\htdocs\budget-management-system`.

---

 Step 3: Configure the Database

1. Access phpMyAdmin:
   - Open your browser and navigate to `http://localhost/phpmyadmin`. This will open phpMyAdmin, the MySQL database management tool.

2. Create a New Database:
   - In phpMyAdmin, click on the Databases tab.
   - Enter a name for your database (e.g., `budget_management`) and click Create.

3. Import the Database:
   - After creating the database, click on the database name in phpMyAdmin.
   - Go to the Import tab.
   - Click Choose File and select the SQL file (database dump) provided with your project files (e.g., `budget_management.sql`).
   - Click Go to import the database structure and data.

---


 Step 5: Run the Project

1. Access the Project:
   - Open your browser and navigate to the project’s URL by typing the following into your address bar:
     ```
     http://localhost/budget-management-system/
     ```
   - Replace `budget-management-system` with the actual name of the project folder you copied to `htdocs`.

2. Test the Application:
   - The main page of your Budget Management System should load, allowing you to add, update, delete, and view expenses.

---

 Step 6: Troubleshooting

- Apache or MySQL Not Starting: If Apache or MySQL doesn't start, check for port conflicts. For example, if another service is using port 80 (used by Apache), you can change Apache’s port in the `httpd.conf` file.
- Blank Page: Ensure that `display_errors` is enabled in `php.ini` for debugging PHP errors. Locate the `php.ini` file in XAMPP's `php` folder, search for `display_errors`, and set it to `On`.
- Database Connection Error: Double-check the database name, username, and password in your PHP configuration file.

---

By following these steps, your Budget Management System should be successfully installed and running in the XAMPP environment. You can now manage your expenses directly from the local server!

Thank You 
Job Nayere
