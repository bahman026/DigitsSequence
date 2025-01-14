# Sequence Project

This project implements a high-performance Sequence number generator using matrix exponentiation. It supports calculation of extremely large Sequence numbers efficiently. The project is developed for **Sheypoor** and is designed to be used in a containerized environment.

## Features
- Fast calculation of Sequence numbers using matrix exponentiation.
- Handles large numbers efficiently with GMP library.
- Supports command-line interface (CLI) for generating and displaying Sequence numbers.
- Includes unit tests for ensuring correctness.

---

## Requirements
- Docker and Docker Compose
- PHP 8.4 with required extensions
    - `bcmath`
    - `zip`
    - `gmp`
- Composer

---

## Setup and Execution

Follow the steps below to set up and run the project:

### 1. Build and Start the Project
Use the following command to build and start the containerized environment:

```bash
docker compose up -d --build
```

### 2. Access the Container
To access the running container, execute:

```bash
docker exec -it sequence_app bash
```

### 3. Run Unit Tests
Inside the container, you can run the test suite to ensure the application works correctly:

```bash
./vendor/bin/phpunit
```

### 4. Run Sequence Calculations
To calculate a Sequence number from the CLI, use the following command:

```bash
php index.php 10000000
```
This command calculates the 10,000,000th Sequence number.

#### Display the Full Number
To display the full Sequence number (if truncated), use the `--full-number` flag:

```bash
php index.php 100000 --full-number
```

---

## Technical Details
- **Time Complexity**: The time complexity of the algorithm is O(n log n).
- **Space Complexity**: The overall space complexity of this code is O(n).
- **Libraries**: The project utilizes the GMP library for handling large numbers.
- **Testing**: PHPUnit is used for unit testing.

---

## File Structure
- `src/`: Contains the core logic for Sequence calculations.
- `tests/`: Contains unit tests for validating functionality.
- `Dockerfile`: Sets up the PHP environment with necessary extensions.
- `docker-compose.yml`: Configures and manages the containerized application.
- `index.php`: Entry point for CLI execution.

---

For any questions or issues, please contact the programmer.







