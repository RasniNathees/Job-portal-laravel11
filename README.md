## Installation

1. **Clone the repository:**

    ```bash
    git clone https://github.com/RasniNathees/Job-portal-laravel11
    cd job-portal
    ```

2. **Install dependencies:**

    ```bash
    composer install
    npm install
    ```

3. **Create a copy of the `.env` file:**

    ```bash
    cp .env.example .env
    ```

4. **Generate an application key:**

    ```bash
    php artisan key:generate
    ```

5. **Run database migrations and seeders:**

    ```bash
    php artisan migrate:fresh --seed
    ```

6. **Build the front-end assets:**

    ```bash
    npm run build
    ```
