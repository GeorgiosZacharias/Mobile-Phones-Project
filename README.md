# E-Shop Project

A PHP-based e-commerce website for selling mobile phones.

## Setup Instructions

1. **Install XAMPP** (or similar LAMP/WAMP stack)

2. **Clone this repository** to your `htdocs` folder:
   ```
   git clone <your-repo-url> C:\xampp\htdocs\Project
   ```

3. **Configure database connection:**
   - Copy `config.example.php` to `config.php`
   - Copy `loginCon.example.php` to `loginCon.php`
   - Update both files with your MySQL credentials

4. **Create database:**
   - Open phpMyAdmin: `http://localhost/phpmyadmin`
   - Create a new database named `eshop`
   - Import the `eshop.sql` file (Note: Contains sample data)

5. **Run the project:**
   - Navigate to `http://localhost/Project/`

## Default Admin Credentials
- Username: `admin`
- Password: `admin`

## Features
- Product browsing
- User registration and login
- Shopping cart
- Order management
- Admin panel

## Security Notes
- Change the default admin password after first login
- Never commit `config.php` or `loginCon.php` to version control
- These files contain sensitive database credentials
