<?php

class Video{
    private $title;
    private $url;
    private $numero;
    private $longDesc;
    private $shortDesc;
    private $duree;
    private $date;

    public function __construct( $title,$url,$num,$short,$long,$date,$duree ){
        $this->title = $title;
        $this->url = $url;
        $this->numero = $num;
        $this->shortDesc = $short;
        $this->longDesc = $long;
        $this->date = $date;
        $this->duree = $duree;
    }
    public function getNumero(){
        return ($this->numero);
    }
    public function getUrl(){
        return ($this->url);
    }
    public function getTitle(){
        return ($this->title);
    }
    public function getLongDesc(){
        return $this->longDesc;
    }
    public function getShortDesc(){
        return $this->shortDesc;
    }
    public function getDuree(){
        return $this->duree;
    }
    public function getDate(){
        return $this->date;
    }

    

}

$VIDEOS = array();

$VIDEOS[] = new Video($title="Les problèmes d'aurélie",$url="https://www.youtube.com/embed/dWbPdqns5Xk",$num=1,$long="Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus enim odit alias exercitationem,
laboriosam pariatur dolore totam laudantium nemo? Fuga animi possimus eligendi non libero ipsa minus dolorum
quibusdam nobis.",$short="Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus enim odit alias exercitationem,
laboriosam pariatur dolore totam laudantium nemo? Fuga animi possimus eligendi non libero ipsa minus dolorum
quibusdam nobis.",$date="30-04-2023",$duree="15:30");
$VIDEOS[] = new Video($title="Harcelement en eau profonde",$url="https://www.youtube.com/embed/0X9b-VJhKqQ",$num=2,$long="Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus enim odit alias exercitationem,
laboriosam pariatur dolore totam laudantium nemo? Fuga animi possimus eligendi non libero ipsa minus dolorum
quibusdam nobis.",$short="Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus enim odit alias exercitationem,
laboriosam pariatur dolore totam laudantium nemo? Fuga animi possimus eligendi non libero ipsa minus dolorum
quibusdam nobis.",$date="30-04-2023",$duree="15:30");
$VIDEOS[] = new Video($title="Wow ! C'était moins une !",$url="https://www.youtube.com/embed/c2Z1ilp_BTk",$num=3,$long="Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus enim odit alias exercitationem,
laboriosam pariatur dolore totam laudantium nemo? Fuga animi possimus eligendi non libero ipsa minus dolorum
quibusdam nobis.",$short="Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus enim odit alias exercitationem,
laboriosam pariatur dolore totam laudantium nemo? Fuga animi possimus eligendi non libero ipsa minus dolorum
quibusdam nobis.",$date="30-04-2023",$duree="15:30");
$VIDEOS[] = new Video($title="Le soir ou mario a échapé a la mort",$url="https://www.youtube.com/embed/a-15CO255-Q",$num=4,$long="Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus enim odit alias exercitationem,
laboriosam pariatur dolore totam laudantium nemo? Fuga animi possimus eligendi non libero ipsa minus dolorum
quibusdam nobis.",$short="Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus enim odit alias exercitationem,
laboriosam pariatur dolore totam laudantium nemo? Fuga animi possimus eligendi non libero ipsa minus dolorum
quibusdam nobis.",$date="30-04-2023",$duree="15:30");

?>