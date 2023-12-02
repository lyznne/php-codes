<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>maths</title>
    <link rel="stylesheet" href="./maths.css">
</head>

<body>

    <?php
    // Define the quadratic function
    function quadraticFunc(int $a, int $b, int $c)

    {

        $discriminant = $b ** 2 - 4 * $a * $c;
        echo $discriminant;

        if ($discriminant >= 0) {
            $sqrtValue = sqrt($discriminant);
            $x1 = (-$b + $sqrtValue) / (2 * $a);
            $x2 = (-$b - $sqrtValue) / (2 * $a);
            echo $sqrtValue;
            return [$x1, $x2];
        } else {
            echo "<p class='err'> Math Error !! </p>";
            $err = "The equation has complex roots, and this function handles only real roots.";
            echo "<p class='err'>" . $err . "  </p>";
        }
    }

    // Handle form submission
    $result = [];
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['calculate_quadratic'])) {
        $a = (int)$_POST['a'];
        $b = (int)$_POST['b'];
        $c = (int)$_POST['c'];

        // Call the quadratic function and get the result
        $result = quadraticFunc($a, $b, $c);
    }
    ?>

    <div class="container">
        <div class="form">
            <h1>Maths Quadratic equation</h1>
            <h1>ax² + bx + c = 0</h1>
            <p>enter the values of the equation below</p>
            <form action="#" method="post">
                <input type="number" name="a" id="a" placeholder="Enter the value of a">
                <input type="number" name="b" id="b" placeholder="Enter the value of b">
                <input type="number" name="c" id="c" placeholder="Enter the value of c">

                <button type="submit" name="calculate_quadratic">Find value of X</button>
            </form>

        </div>
        <aside>
            <h3>Values entered</h3>
            <div class="values">
                <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['calculate_quadratic'])) {
                    echo "<p>a = " . $a . "</p>";
                    echo "<p>b = " . $b . "</p>";
                    echo "<p>c = " . $c . "</p>";
                }
                ?>
            </div>
            <div class="equation">
                <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['calculate_quadratic'])) {
                    echo "<h1> " . $a . "x² + " . $b . "x + " . $c . " = 0</h1>";
                }
                ?>
            </div>

            <div class="answer">
                <h3>Answers</h3>
                <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['calculate_quadratic'])) {
                    if (is_array($result)) {
                        echo "<p>Values of x are " . "<span class='ans' >" . $result[0] . "</span>" . "</p>";
                        echo  "<p > " . "<span class='ans' >" .  $result[1] . "</span>" . "</p>";
                    } else {
                        echo "<p class='ans'>" . $result . "</p>";
                    }
                }
                ?>
            </div>
        </aside>
    </div>
    <?php
    function isPrime($num)
    {
        if ($num <= 1) {
            return false;
        }
        for ($i = 2; $i * $i <= $num; $i++) {
            if ($num % $i === 0) {
                return false;
            }
        }
        return true;
    }

    function primeNumbers($first, $last)
    {
        $primes = [];
        if ($first < 0 || $last < 0 || $first > $last) {
            return 'Please enter a valid range of positive numbers!';
        } else {
            for ($i = $first; $i <= $last; $i++) {
                if (isPrime($i)) {
                    $primes[] = $i;
                }
            }
        }
        return $primes;
    }
    ?>

    <div class="container prime-numbers">
        <div class="main">
            <h1>Prime numbers</h1>
            <p>Enter the range for the prime numbers</p>
            <form action="#" method="post">
                <div class="input-fields">
                    <input type="number" name="first" id="first" placeholder="Range from ...">
                    <input type="number" name="last" id="last" placeholder="Range up to ...">
                </div>
                <button type="submit" name="calculate_primes">Find prime numbers</button>
            </form>
        </div>
        <div class="aside">
            <h3>Prime numbers found are :</h3>
            <div class="answers">
                <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['calculate_primes'])) {
                    if (isset($_POST['first'], $_POST['last'])) {
                        $first = $_POST['first'];
                        $last = $_POST['last'];

                        $primeNumbers = primeNumbers($first, $last);

                        if (is_array($primeNumbers)) {
                            foreach ($primeNumbers as $prime) {
                                echo "<p>" . $prime . "</p>";
                            }
                        } else {
                            echo "<p>" . $primeNumbers . "</p>";
                        }
                    }
                }
                ?>
            </div>
        </div>
    </div>


</body>

</html>