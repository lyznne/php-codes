<!DOCTYPE html>
<html>
<head>
    <style>
        .traffic-light {
            width: 100px;
            text-align: center;
        }

        .light {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin: 10px auto;
        }

        .red {
            background-color: red;
        }

        .yellow {
            background-color: yellow;
        }

        .green {
            background-color: green;
        }
    </style>
</head>
<body>
    <div class="traffic-light">
        <?php
        $light = "red"; 
        ?>

        <?php
        switch ($light) {
            case "red":
                echo '<div class="light red active"></div>';
                echo '<div class="light yellow"></div>';
                echo '<div class="light green"></div>';
                break;
            case "yellow":
                echo '<div class="light red"></div>';
                echo '<div class="light yellow active"></div>';
                echo '<div class="light green"></div>';
                break;
            case "green":
                echo '<div class="light red"></div>';
                echo '<div class="light yellow"></div>';
                echo '<div class="light green active"></div>';
                break;
            default:
                echo "Invalid light";
        }
        ?>
    </div>
</body>
</html>
