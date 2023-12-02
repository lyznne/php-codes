<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grading system</title>
    <link rel="stylesheet" href="lean.css">
</head>

<body>
    <main>
    <h1>Grading system</h1>
        <div class="container">
             
            <div class="details">
                <h3>Students details</h3>
                <form action="post">
                    <p>Student name: <input type="text" placeholder="name" name="user"></p>
                    <p>Reg number: <input type="text" placeholder="reg number" name="number"></p>
                    <p>Course: <input type="text" placeholder="course" name="course"></p>
                </form>

                <div class="marks">
                    <h3>Students marks and Grading</h3>
                    <p>Enter marks: <input type="number" placeholder="marks" name="marks"></p>
                    <button type="submit">Enter</button>
                </div>

                <div class="list">
                    <h3>students and their grades</h3>
                    <table>
                        <thead>
                            <tr>
                                <th>Position</th>
                                <th>Reg number</th>
                                <th>Course</th>
                                <th>Marks</th>
                                <th>Position</th>
                                <th>Remarks</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            session_start();

                            $students = isset($_SESSION['$students']) ? $_SESSION['students'] : [];
                            if ($_SERVER['REQUEST_METHOD'] ===  'POST') {
                                $username = $_POST['username'];
                                $reg = $_POST['reg'];
                                $course = $_POST['course'];
                                $marks = (int)$_POST['marks'];
                                $grade  = '';
                                $remarks = '';


                                if ($marks  >= 80 && $marks <= 100) {
                                    $grade = "A";
                                    $remarks = "Excellent";
                                } elseif ($marks >= 60 && $marks < 70) {
                                    $grade = "B";
                                    $remarks = "Good";
                                } elseif ($marks >= 50 && $marks < 60) {
                                    $grade = "C";
                                    $remarks = "Fairly good";
                                } elseif ($marks >= 40 && $marks < 50) {
                                    $grade = "D";
                                    $remarks = "Needs improvement";
                                } elseif ($marks >= 0 && $marks < 40) {
                                    $grade = "E";
                                    $remarks = "Failed";
                                } else {
                                    echo "error";
                                }

                                $student = [
                                    'username' => $username,
                                    'reg' => $reg,
                                    'course' => $course,
                                    'marks'  => $marks,
                                    'grade'   => $grade,
                                    'remarks' => $remarks
                                ];

                                $students[] = $student;
                                $_SESSION['students'] = $students;
                            }

                            foreach ($student as $position => $student) {
                                echo "<tr>";
                                echo "<td>" . ($position + 1) . "</td>";
                                echo "<td>" . $student['username'] . "</td>";
                                echo "<td>" . $student['reg'] . "</td>";
                                echo "<td>" . $student['course'] . "</td>";
                                echo "<td>" . $student['marks'] . "</td>";
                                echo "<td>" . $student['grade'] . "</td>";
                                echo "<td>" . $student['remarks'] . "</td>";
                            }

                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="table">
                <h3>Grading table</h3>
                <div class="grading">
                    <p>70 - 100</p><span>A</span>
                    <p>60 - 69</p><span>B</span>
                    <p>50 - 59</p><span>C</span>
                    <p>40 - 49</p><span>D</span>
                    <p>0 - 39</p><span>E</span>
                </div>
            </div>
        </div>
    </main>
</body>

</html>