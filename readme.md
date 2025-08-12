# PC Builders

A web-based PC component selection and ordering system that allows users to build their custom PC configurations.

## Features

- User registration system
- Interactive PC component selection interface
- Multiple component categories including:
  - Processors
  - Motherboards
  - RAM
  - Graphics Cards
  - Power Supply Units
  - Storage (SSD & HDD)
  - Peripherals (Keyboard & Mouse)
  - Cooling Systems
  - Additional Accessories
- Shopping cart functionality
- Responsive design

## Technologies Used

- HTML5
- CSS3
- PHP
- MySQL
- JavaScript
- XAMPP (Apache Server)

## Prerequisites

- XAMPP (or similar local server environment)
- Web browser
- MySQL database

## Installation

1. Clone the repository:
```bash
git clone https://github.com/yourusername/pc-builders.git
```

2. Move the project folder to your XAMPP's htdocs directory:
```bash
C:\xampp\htdocs\     (for Windows)
/opt/lampp/htdocs/   (for Linux)
```

3. Start XAMPP and ensure Apache and MySQL services are running

4. Import the database:
   - Open phpMyAdmin (http://localhost/phpmyadmin)
   - Create a new database named 'pc_builders'
   - Import the SQL file from `sql/create_db.sql`

5. Access the application:
```
http://localhost/pc_builders/
```

## Project Structure

```
pc_builders/
├── images/           # Component images
├── sql/             # Database scripts
├── styles.css       # Main styling
├── styles1.css      # Registration page styling
├── index.html       # Registration page
├── page2.html       # Component selection page
├── register.php     # User registration handler
├── add_to_cart.php  # Cart functionality
└── README.md        # Project documentation
```

## Database Structure

The project uses two main tables:
- `customers`: Stores user registration information
- `cart`: Stores selected components for each customer

## Features to Add

- User authentication
- Admin panel
- Price calculation
- Order processing
- Component compatibility checker
- User profile management

## Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Authors

- Your Name
- Contact: your.email@example.com

## Acknowledgments

- Images sourced from various PC component manufacturers
- XAMPP development team
- Contributors and testers