<?php 

  class person{

    private $cc;
    private $nombre;
    private $apellido;
    private $phone;
    private $addres;
    private $rh;
    private $email;

    public function __construct($cc,$nombre,$apellido,$phone,$addres,$rh,$email){
      $this->cc = $cc;
      $this->nombre = $nombre;
      $this->apellido = $apellido;
      $this->phone = $phone;
      $this->addres = $addres;
      $this->rh = $rh;
      $this->email = $email;
    }

    public function getCC(){
      return $this->$cc;
    }

    public function getNombre(){
      return $this->$nombre;
    }

    public function getApellido(){
      return $this->$apellido;
    }

    public function getPhone(){
      return $this->phone;
    } 

    public function getRh(){
      return $this->rh;
    }

    public function getEmail(){
      return $this->email;
    }

    //Setter
    public function setCc($cc){
      $this->cc = $cc;
    }

    public function setNombre($nombre){
      $this->nombre = $nombre;
    }

    public function setApellido($apellido){
      $this->apellido = $apellido;
    }

    public function setPhone($phone){
      $this->phone = $phone;
    }

    public function setAddres($addres){
      $this->addres = $addres;
    }

    public function setRh($rh){
      $this->rh = $rh;
    }

    public function setEmail($email){
      $this->email = $email;
    }
    
  }


?>