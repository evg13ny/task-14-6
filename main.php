<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My first PHP page</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>

    <div class="flex-container">

        <div class="header">
            <?php include 'logo.inc.php' ?><!-- логотип -->
            <?php include 'menu.inc.php' ?><!-- меню -->
        </div>

        <div class="about_me">

            <h1> <?php echo $p  ?> </h1><!-- приветсвие -->

            <div class="data">
                <div class="myImg">
                    <?php echo '<img src="./img/photo.jpg">'; ?><!-- фотография -->
                </div>

                <div class="fullname">
                    <p> My name is
                        <?php echo $name, ' ', $surname . '<br>';
                        echo 'city', ' ', $city; ?><!-- данные -->
                    </p>

                    <p> I'm
                        <?php echo $age;   ?>
                        y.o. </p>
                    <p> I learned how to create variables </p>
                    <p> I learned simple operations with variables </p>
                </div>
            </div>

            <div class="knowledge">

                <?php include 'knowledge.inc.php'; ?><!-- знания по образцу -->
                <?php echo $a, ' ', $b, ' ', $c; ?> <br>

                <?php
                $a = 10;
                $b = 20;
                $c = $a + $b;
                echo $c;
                ?> <br>
                <?php
                echo $d;
                ?>

            </div>

            <div class="article">
                <p class="text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Recusandae asperiores ducimus dolore explicabo. Animi est amet quibusdam molestias!
                    Minus laudantium sapiente dignissimos possimus natus cumque delectus sed, accusantium totam quia?
                </p>
            </div>
        </div>

        <div class="training">
            <h2>Knowledge</h2>

            <h3>Work with numbers</h3>
            <div class="intOutput">
                <?php
                echo $k;
                ?></br><!-- вызов случайного числа -->

                <?php echo "Decimal system: " . $randomInt ?></br>
                <?php echo "Binary system: " . decbin($randomInt) ?></br><!-- перевод случайного числа в двоичное -->
                <?php echo "Octal system: " . decoct($randomInt) ?></br><!-- перевод случайного числа в восьмеричное -->
                <?php echo "Hexadecimal system : " . dechex($randomInt) ?></br><!-- перевод случайного числа в шестнадцатеричное -->
                <?php echo "Variable's type : " . gettype($randomInt)  ?></br><!-- тип -->
            </div>

            <h3>Work with magic constants</h3>
            <div class="magic">
                <?php
                $start = microtime(true);
                echo "DIR: " . __DIR__;
                echo '<br>';
                echo 'Script execution time: ' . (microtime(true) - $start) . ' sec <br>';
                ?><!-- путь и время исполнения -->
            </div>

        </div>
        <?php include 'footer.inc.php' ?><!-- подвал страницы -->
    </div>
</body>

</html>