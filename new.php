<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Your Marks</title>
    <link rel="stylesheet" href="grade.css">
</head>

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
                        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                            $username = $_POST['username'];
                            $marks = (int)$_POST['marks'];
                            $grade = '';
                            $comment = '';

                            // Assign grade based on marks
                            if ($marks >= 80 && $marks <= 100) {
                                $grade = 'A';
                                $comment = 'Excellent';
                            } elseif ($marks >= 70 && $marks < 80) {
                                $grade = 'B';
                                $comment = 'Very Good';
                            } elseif ($marks >= 60 && $marks < 70) {
                                $grade = 'C';
                                $comment = 'Good';
                            } elseif ($marks >= 50 && $marks < 60) {
                                $grade = 'D';
                                $comment = 'Satisfactory';
                            } elseif ($marks >= 40 && $marks < 50) {
                                $grade = 'E';
                                $comment = 'Needs Improvement';
                            } else {
                                $grade = 'F';
                                $comment = 'Fail';
                            }

                            echo "<tr>";
                            echo "<td>1</td>";
                            echo "<td>$username</td>";
                            echo "<td>$marks</td>";
                            echo "<td>$grade</td>";
                            echo "<td>$comment</td>";
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
