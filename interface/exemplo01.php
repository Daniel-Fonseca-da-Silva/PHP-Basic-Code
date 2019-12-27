<?

    interface Veiculo
    {
        public function acelerar($velocidade);
        public function frenar($velocidade);
        public function trocarMachar($marchar);
    }

    class DelRey implements Veiculo
    {
        public function acelerar($velocidade)
        {
            echo "O veiculo acelereou até " . $velocidade . " km/h" . "<br/>";
        }
        public function frenar($velocidade)
        {
            echo "O veiculo frenou até " . $velocidade . " km/h" . "<br/>";
        }
        public function trocarMachar($marchar)
        {
            echo "O veiculo engatou a marcha " . $marchar  . "<br/>";
        }
    }

    $carro = new DelRey();
    $carro->trocarMachar(1);
    $carro->acelerar(110);
    $carro->frenar(50);

?>