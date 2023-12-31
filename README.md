# CRUD with Image Uploading in CodeIgniter 4

This is a CodeIgniter 4 application that demonstrates basic CRUD operations (Create, Read, Update, Delete) with image uploading functionality. The project showcases how to build a simple web application to manage data records along with uploading and displaying images.

## Overview

The application provides a user interface for performing CRUD operations on data records. Each record includes attributes such as title, description, and an associated image. Users can add new records, view existing records, update their details, delete records, and upload images.

## Features

- Create, Read, Update, and Delete records in a user-friendly interface.
- Upload and associate images with records.
- Display uploaded images alongside record details.
- Basic validation and error handling for data and image uploads.

## Prerequisites

- PHP 7.2 or higher with Composer installed.
- CodeIgniter 4 installed on your web server.
- Basic knowledge of PHP, CodeIgniter, HTML, and form handling.

## Installation

1. Clone the repository to your web server.
2. Run `composer install` in the project directory to install dependencies.
3. Configure your database settings in `app/Config/Database.php`.
4. Run the migrations to set up the required database tables: `php spark migrate`.
5. Access the application through a web browser.

## Usage

1. Navigate to the homepage to view the list of records.
2. Click "Add Record" to create a new record, providing title, description, and an image.
3. View and manage existing records, including updating and deleting them.
4. Uploaded images are stored in the `public/uploads` directory.

## Configuration

- Modify the database settings in `app/Config/Database.php` to match your environment.
- Customize validation rules and messages in the respective controllers for your use case.

## Security Considerations

- This example focuses on illustrating basic CRUD and image uploading functionality.
- In a real-world application, implement proper security measures, input validation, and user authentication.
- Securely handle image uploads to prevent vulnerabilities.

## Disclaimer

This example is intended for educational purposes only. Ensure that you follow best practices and adhere to relevant laws and regulations when handling user data and images.

## License

This project is licensed under the [MIT License](LICENSE).
