<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pewarisan</title>
</head>

<body>
    <?php
    class OrangTua
    {
        public $judul;

        public function __construct()
        {
            $this->judul = 'This is Class' . __CLASS__;
        }

        public function display()
        {
            return $this->judul;
        }
    }
    class Anak extends OrangTua{//extends berupa pewarisan variable maupun value

    }

    ?>

    <h1> <?php echo (new Anak)->display(); ?> </h1>



</body>

</html>