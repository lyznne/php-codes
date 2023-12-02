<?php
session_start();

$students = isset($_SESSION['students']) ? $_SESSION['students'] : [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $marks = (int)$_POST['marks'];
    $grade = '';
    $comment = '';

    switch (true) {
        case ($marks >= 80 && $marks <= 100):
            $grade = 'A';
            $comment = 'Excellent';
            break;
        case ($marks >= 70 && $marks < 80):
            $grade = 'B';
            $comment = 'Very Good';
            break;
        case ($marks >= 60 && $marks < 70):
            $grade = 'C';
            $comment = 'Good';
            break;
        case ($marks >= 50 && $marks < 60):
            $grade = 'D';
            $comment = 'Satisfactory';
            break;
        case ($marks >= 40 && $marks < 50):
            $grade = 'E';
            $comment = 'Needs Improvement';
            break;
        default:
            $grade = 'F';
            $comment = 'Fail';
    }

    $student = [
        'username' => $username,
        'marks' => $marks,
        'grade' => $grade,
        'comment' => $comment
    ];

    $students[] = $student;

    // Store the updated array in the session
    $_SESSION['students'] = $students;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Your Marks</title>
    <link rel="stylesheet" href="grade.css">
</head>
android:paddingTop="?attr/actionBarSize"
<body>
    <main>
        <div class="container">
            <h1>Enter marks to grade</h1>
            <div class="marks-input">
                <form method="post">
                    <input type="text" placeholder="Student name" name="username">
                    <input type="number" placeholder="Student marks" name="marks">
                    <button type="submit">Enter</button>
                </form>
            </div>
            <div class="results-table">
                <table>
                    <thead>
                        <tr>
                            <th>Position</th>
                            <th>Username</th>
                            <th>Marks</th>
                            <th>Grade</th>
                            <th>Comment</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($students as $position => $student) {
                            echo "<tr>";
                            echo "<td>" . ($position + 1) . "</td>";
                            echo "<td>" . $student['username'] . "</td>";
                            echo "<td>" . $student['marks'] . "</td>";
                            echo "<td>" . $student['grade'] . "</td>";
                            echo "<td>" . $student['comment'] . "</td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <aside>
            <h3>Grading System</h3>
            <div class="grading">
                <p>80 - 100</p> <span>A</span>
                <p>70 - 79</p> <span>B</span>
                <p>60 - 69</p> <span>C</span>
                <p>50 - 59</p> <span>D</span>
                <p>40 - 49</p> <span>E</span>
                <p>0 - 39</p> <span>F</span>
            </div>
        </aside>
    </main>
</body>

</html>
