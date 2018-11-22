<?php
/**
 * Created by PhpStorm.
 * User: vlade
 * Date: 7.10.18.
 * Time: 17.54
 */

namespace App\EntityListener;


use App\Entity\Destination;
use Ramsey\Uuid\Uuid;
use Symfony\Component\HttpFoundation\File\File;

class DestinationListener
{
    private $destinationUploadFolder;
    private $destinationsWebPath;
    public function __construct($destinationsUploadFolder,$destinationsWebPath)
    {
        $this->destinationUploadFolder=$destinationsUploadFolder;
        $this->destinationsWebPath=$destinationsWebPath;
    }


    public function preFlush(Destination $destination)
    {
        $file=$destination->getFile();
        if($file)
        {
            $destination->setImg($this->upload($file,$destination->getSlug()));
        }
    }

    public function postLoad(Destination $destination)
    {
        $destination->setCoverImageLocation($this->destinationsWebPath.$destination->getSlug()."/".$destination->getImg());
       ;
    }

    public function upload($file,$slug)
    {
        if($file instanceof File)
        {

            $name=sprintf("%s.%s",Uuid::uuid4(),$file->guessExtension());
            $file->move($this->destinationUploadFolder."/".$slug,$name);
            return  $name;
        }
        return null;
    }
}