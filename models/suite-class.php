<?php
include("usuario-class.php");
    class HotelClass{
        private $suite;
        private $diarias;
        

        public function getSuite()
        {
                return $this->suite;
        }

        public function setSuite($suite)
        {
                $this->suite = $suite;

                return $this;
        }

        public function getDiarias()
        {
                return $this->diarias;
        }

        public function setDiarias($diarias)
        {
                $this->diarias = $diarias;

                return $this;
        }
        public function valorSuite(){
                switch($this->suite){
                case 'Suíte Double Master':
                return $this->suite = 150.00;
                break;

                case 'Suíte Família':
                return $this->suite = 180.00;
                break;

                case 'Suíte Single':
                return $this->suite = 100.00;
                break;

                default: 'Suite nao existente';
                }
        }
        public function valorTotal(){
                $totalValue = $this->suite * $this->diarias;
                return $totalValue;
        }

        public function toString($userClass){
            return "Nome: ".$userClass->getName().
            "<br>Email: ".$userClass->getEmail().
            "<br>RG: ".$userClass->getRg().
            "<br>Telefone: ".$userClass->getPhone().
            "<br>Suíte: ".$this->suite.
            "<br>Valor da Suíte: ".$this->valorSuite().
            "<br>Diárias: ".$this->diarias.
            "<br>Valor Total: ".$this->valorTotal();
        }

    }
    $usuarioClass = new UsuarioClass;
    $hotelClass = new HotelClass;

    $usuarioClass->setName($_POST['name']);
    $usuarioClass->setEmail($_POST['email']);
    $usuarioClass->setRg($_POST['rg']);
    $usuarioClass->setPhone($_POST['phone']);
    $hotelClass->setSuite($_POST['suite']);
    $hotelClass->setDiarias($_POST['diarias']);


    echo "
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <link rel='stylesheet' href='../public/css/style.css'>
        <title>Resultados Do Agendamento</title>
    </head>
    
    <body>
        <div id='body'>
            <form action=''>
            <h1>Hotel</h1>
                <h3>Resultados: </h3>
                 ".$hotelClass->toString($usuarioClass)."
            </form>
        </div>
    </body>
    
    </html>"
?>