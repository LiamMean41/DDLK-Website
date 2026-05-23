# DDLK Website

A PHP-based web application for a device repair shop, allowing customers to browse available repair services and book appointments. Built as a college project using PHP, MySQL, and MDB (Material Design for Bootstrap).

## Features

- **Product/services listing** — displays available repairs for phones and laptops (Samsung, Apple, Asus, Razer) with pricing
- **User authentication** — login and signup system with session management
- **Booking form** — customers can book a repair by submitting their name, preferred date, and time
- **Flash messaging** — session-based messages for login feedback and page redirects
- **Responsive navbar** — built with MDB/Bootstrap, includes navigation to booking and logout

## Tech stack

| Layer | Technology |
|---|---|
| Backend | PHP |
| Database | MySQL (MySQLi) |
| Frontend | HTML, CSS, Bootstrap 4, MDB (Material Design Bootstrap) |
| Rich text | TinyMCE (bundled) |

## Project structure
htdocs/
├── index.php              # Homepage — product listing + login form
├── booking.php            # Repair booking form
├── css/
│   ├── mainstyle.css      # Custom styles
│   ├── header.css         # Navbar styles
│   └── mdb.min.css        # MDB framework
├── js/
│   ├── script.js          # Animation controls
│   ├── mdb.min.js         # MDB framework
│   └── tinymce/           # TinyMCE rich text editor
└── includes/
├── config.inc.php     # Session start
├── database.inc.php   # Database connection
├── function.inc.php   # Helper functions (auth, messaging)
├── header.inc.php     # Shared navbar
└── footer.inc.php     # Shared footer

## Setup

1. Clone the repo into your web server's document root (e.g. `htdocs/` in XAMPP)
2. Create a MySQL database and import the schema
3. Update `includes/database.inc.php` with your database credentials
4. Start Apache and MySQL, then navigate to `http://localhost`

## Known issues

- Booking form submission is currently broken — see `TODO` comment in `booking.php`
- Passwords are hashed with SHA1, which is not recommended for production use
- The COM port equivalent — the serial port config is hardcoded (if applicable)

## Requirements

- PHP 7.4+
- MySQL
- Apache (XAMPP or similar local server recommended)
