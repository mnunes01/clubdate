<?php
class users{
  public $out = '';
  function __construct(){
      $this->out = $this->getUsers();
      //var_dump($this->out);
      return;
  }
    private function getUsers(){
      return array(
                    "0" => array(
                      "id"=> "1",
                      "name"=> "user1",
                      "sex"=> "F",
                      "photos"=> array(
                        "img1"=>"https://clubenet.biz/imagens2/ca/fotos/97/large/img-4035297-2-1008458.jpg",
                        "img2"=>"https://clubenet.biz/imagens2/ca/fotos/97/large/img-4035297-3-1014483.jpg",
                        "img3"=>"https://clubenet.biz/imagens2/ca/fotos/97/large/img-4035297-2-1008458.jpg",
                        "img4"=>"https://clubenet.biz/imagens2/ca/fotos/97/large/img-4035297-3-1014483.jpg",
                        "img5"=>"https://clubenet.biz/imagens2/ca/fotos/97/large/img-4035297-2-1008458.jpg",
                        "img6"=>"https://clubenet.biz/imagens2/ca/fotos/97/large/img-4035297-3-1014483.jpg"
                      )
                    ),
                    "1" => array(
                      "id"=> "2",
                      "name"=> "user2",
                      "sex"=> "F",
                      "photos"=> array(
                        "img1"=>"https://clubenet.biz/imagens2/ca/fotos/97/large/img-4035297-2-1008458.jpg",
                        "img2"=>"https://clubenet.biz/imagens2/ca/fotos/97/large/img-4035297-3-1014483.jpg",
                        "img3"=>"https://clubenet.biz/imagens2/ca/fotos/97/large/img-4035297-2-1008458.jpg",
                        "img4"=>"https://clubenet.biz/imagens2/ca/fotos/97/large/img-4035297-3-1014483.jpg",
                        "img5"=>"https://clubenet.biz/imagens2/ca/fotos/97/large/img-4035297-2-1008458.jpg",
                        "img6"=>"https://clubenet.biz/imagens2/ca/fotos/97/large/img-4035297-3-1014483.jpg"
                      )
                    )

        );
    }
}

$out = new users();
echo json_encode($out->out);
?>
