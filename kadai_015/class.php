<html>

<body>
    <?php
    class Food
    {
        private $name;
        public $price;
        public function __construct($name, $price)
        {
            $this->name = $name;
            $this->price = $price;
        }
    }

    $food = new Food('potato', '250');
    print_r($food);
    echo '<br>';

    class Animal
    {
        private $name;
        public $height;
        private $weight;
        public function __construct($name, $height, $weight)
        {
            $this->name = $name;
            $this->height = $height;
            $this->weight = $weight;
        }
    }

    $animal = new Animal('dog', 60, 5000);
    print_r($animal);
    echo '<br>';
    echo $food->price;
    echo '<br>';
    echo $animal->height;

    ?>

</body>

</html>