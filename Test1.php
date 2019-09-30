<?php

//class parent
class manusia{
    
    //property class manusia
    public $nama_saya;


    //method pada class manusia
    function berinama($saya)
    {
           $this->nama_saya=$saya; 
    }
}

class teman extends manusia{
    public $nama_teman;

    function berinamateman($teman)
    {
        $this->nama_teman=$teman;
    }
}

$subject = new teman;

$subject->berinama('Hanan');
$subject->berinamateman('lord');

echo "Nama Saya :" .$subject->nama_saya."<br/>";
echo "Nama Teman :" .$subject->nama_teman;

?>