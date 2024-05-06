# BlogApp Project

BlogApp is a Blog Website where user can create,edit,update,delete blog and comment.

## Installation

1.Clone the Repository: If you haven't already cloned the repository, use the following command to clone it to your local machine:

```bash
git clone https://github.com/alaminhossain-web/BlogApp.git
```
Replace username with the GitHub username and repository with the name of the repository.
2.Navigate to the Project Directory: Use the cd command to change into the project directory:
```bash
cd BlogApp
```
Replace repository with the name of the repository.
3.Install Composer Dependencies: Laravel projects use Composer for dependency management. Run the following command to install the project dependencies:
```bash
composer install
```
4.Create a Copy of the Environment File: Laravel requires an environment file (.env) to run. If the project doesn't have one, create a copy of the example environment file:
```bash
cp .env.example .env
```
5.Generate Application Key: Laravel requires an application key for encryption and other security purposes. Generate the key using Artisan:
```bash
php artisan key:generate
```
6.Set Up Database Configuration: Open the .env file and configure your database connection settings, including database name, username, and password.
7.Run Database Migrations (Optional): If the project includes database migrations, you can run them to create the necessary database tables:

```bash
php artisan migrate
```
8.Start the Development Server: Laravel includes a built-in development server that you can use to run the project locally. Start the server using Artisan:
```bash
php artisan serve
```
9.Access the Application: Open your web browser and navigate to the URL provided by the development server (usually http://127.0.0.1:8000).
