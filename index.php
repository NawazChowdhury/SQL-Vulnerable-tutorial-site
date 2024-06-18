<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Display SUV Cars (Vulnerable)</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>SUV Cars (Vulnerable)</h2>

    <?php
    // Example of vulnerable code (for educational purposes only)
    if (isset($_GET['category'])) {
        $category = $_GET['category'];
        
        // Database connection parameters
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "cars";

        // Create connection (Note: This is not secure and is vulnerable to SQL injection)
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // SQL query (vulnerable to SQL injection)
        $sql = "SELECT * FROM suv_cars WHERE category = '$category' AND announced = 1";
        $result = $conn->query($sql);

        // Display data in an HTML table
        if ($result->num_rows > 0) {
            echo "<table border='1'>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Model</th>
                        <th>Year</th>
                    </tr>";
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["id"] . "</td>
                        <td>" . $row["name"] . "</td>
                        <td>" . $row["model"] . "</td>
                        <td>" . $row["year"] . "</td>
                      </tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }

        // Close connection
        $conn->close();
    } else {
        echo "Please provide a category parameter.";
    }
    ?>
</body>
</html>


<!-- USE cars;

CREATE TABLE suv_cars (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    model VARCHAR(50),
    year INT,
    announced TINYINT(1)
);

INSERT INTO suv_cars (name, model, year, announced) VALUES
('Toyota RAV4', 'RAV4', 2023, 1),
('Honda CR-V', 'CR-V', 2023, 1),
('Ford Escape', 'Escape', 2024, 1),
('Chevrolet Equinox', 'Equinox', 2024, 1),
('Nissan Rogue', 'Rogue', 2023, 1),
('Hyundai Tucson', 'Tucson', 2024, 1),
('Kia Sportage', 'Sportage', 2023, 1),
('Subaru Forester', 'Forester', 2024, 1),
('Mazda CX-5', 'CX-5', 2023, 1),
('Jeep Cherokee', 'Cherokee', 2024, 1),
('GMC Terrain', 'Terrain', 2023, 0),
('Volkswagen Tiguan', 'Tiguan', 2024, 0),
('BMW X3', 'X3', 2023, 0),
('Audi Q5', 'Q5', 2024, 0),
('Mercedes-Benz GLC', 'GLC', 2023, 0),
('Volvo XC60', 'XC60', 2024, 0),
('Lexus RX', 'RX', 2023, 0),
('Acura MDX', 'MDX', 2024, 0),
('Infiniti QX60', 'QX60', 2023, 0),
('Cadillac XT5', 'XT5', 2024, 0);

-- Step 1: Add a new column `category` to the `suv_cars` table
ALTER TABLE suv_cars
ADD COLUMN category VARCHAR(50);

-- Step 2: Update all existing records to set `category` as 'SUV'
UPDATE suv_cars
SET category = 'SUV';

-- Optional: Display the modified table structure
DESCRIBE suv_cars;


PASTE THIS IN URL ?category=SUV' OR '1'='1
PASTE THIS in URL ?category=SUV' OR '1'='1

-->