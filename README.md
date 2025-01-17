# Sequence Project

This project implements a high-performance Sequence number generator.
This algorithm uses cycle detection. If a cycle is found, the time complexity is O(k); if not, it is O(n . log(m)), where n is the input, and m is the largest element.


## Requirements
- Docker and Docker Compose
- PHP 8.4
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


---

## Technical Details
- **Time Complexity**: This algorithm uses cycle detection. If a cycle is found, the time complexity is O(k); if not, it is O(n.log m), where n is the input, and m is the largest element.
- **Space Complexity**: The overall space complexity of this code is O(n).
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







