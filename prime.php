<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
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
                <input type="number" name="first" id="first" placeholder="Range from ...">
                <input type="number" name="last" id="last" placeholder="Range up to ...">
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