<?php 

class Restkezelo
{
    private $httpVersion = "HTTP/1.1";
    public function sethhtpFejlec()
    {
        $statusUzenet = $this->gethttpStatusUzenet($statusKod);
        header($this->httpVersion." ". $statusKod. " ".$statusUzenet);
        header("Content-Type: Application/json; charset=utf8")
    }
    public function gethttpSatusUzenet($statusKod)
    {
        $httpStatus = array(
            200 => 'OK';
            400 => 'Bad Request',
            404 => 'Not Found'
        );
        return ($httpStatus[$statusKod]);
    }
}
?>