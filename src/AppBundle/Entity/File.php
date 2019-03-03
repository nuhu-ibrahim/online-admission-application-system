<?php
// src/AppBundle/Entity/Product.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

class File
{
    /**
    * @Assert\NotBlank(message = "Upload the excel file")
    */
    private $file;
    
    public function getFile(){
        return $this->file;
    }
    
    public function setFile($file)
    {
        $this->file = $file;

        return $this;
    }
}
