<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Calculator</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>BMI Calculator</h1>
        <form action="" method="post">
            <div class="input-group">
                <label for="firstName">ชื่อ:</label>
                <input type="text" id="firstName" name="firstName" required>
            </div>
            <div class="input-group">
                <label for="lastName">นามสกุล:</label>
                <input type="text" id="lastName" name="lastName" required>
            </div>
            <div class="input-group">
                <label for="age">อายุ:</label>
                <input type="number" id="age" name="age" required>
            </div>
            <div class="input-group">
                <label for="weight">น้ำหนัก (กก.):</label>
                <input type="number" id="weight" name="weight" step="0.1" required>
            </div>
            <div class="input-group">
                <label for="height">ส่วนสูง (ซม.):</label>
                <input type="number" id="height" name="height" step="0.1" required>
            </div>
            <button type="submit" name="calculate">คำนวณ์ BMI</button>
        </form>

        <?php
        function calculateBMI($weight, $height) {
            $heightMeters = $height / 100;
            return $weight / ($heightMeters ** 2);
        }

        function interpretBMI($bmi) {
            if ($bmi < 18.5) {
                return "ควรพบแพทย์น้ำหนักคุณน้อยกว่าปกติ";
            } elseif ($bmi <= 24.9) {
                return "น้ำหนักปกติ";
            } elseif ($bmi <= 29.9) {
                return "น้ำหนักเกิน";
            } else {
                return "ควรพบแพทย์น้ำหนักคุณมากกว่าปกติ";
            }
        }

        if (isset($_POST['calculate'])) {
            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];
            $age = $_POST['age'];
            $weight = $_POST['weight'];
            $height = $_POST['height'];

            $bmi = calculateBMI($weight, $height);
            $bmiStatus = interpretBMI($bmi);

            echo "<div class='result'>";
            echo "<h2>ผลการคำนวณ BMI</h2>";
            echo "<p><strong>ชื่อ:</strong> $firstName $lastName</p>";
            echo "<p><strong>อายุ:</strong> $age ปี</p>";
            echo "<p><strong>BMI:</strong> " . number_format($bmi, 2) . "</p>";
            echo "<p><strong>สถานะ:</strong> $bmiStatus</p>";
            echo "</div>";
        }
        ?>
    </div>
</body>
