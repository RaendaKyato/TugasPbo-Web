<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Static Propherties</title>
</head>

<body>
    <?php
    Class Ortu
    {

        public static $judul = "Hai sayang,Saya Yae Miko~ dari " . __CLASS__;

        public static function display()
        {
            echo self::$judul;//bisa berupa function ataupun variabel
        }
    }

    class child extends Ortu
    {
        public static $judul = "Hai sayang,Saya Asep Kumalala~ dari " . __CLASS__;

        public static function display()
        {
            echo parent::$judul;//bisa berupa function ataupun variabel,namun jika di masukkan self::function(),maka akan rusak.
        }

        public static function displayFromChild()
        {
            echo  self::display();
        }

    }

    $objP = new Ortu;
    $objC = new Child;

    ?>

    <p> Testing, <?php echo $objP->display(); ?> </p>
    <p> <?php echo $objC->display(); ?> </p>
    <p> <?php echo $objC->displayFromChild(); ?> </p>

</body>

</html>