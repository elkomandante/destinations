<?php
/**
 * Created by PhpStorm.
 * User: vlade
 * Date: 7.10.18.
 * Time: 17.54
 */

namespace App\EntityListener;


use App\Entity\DestinationCategory;
use Ramsey\Uuid\Uuid;
use Symfony\Component\HttpFoundation\File\File;

class DestinationCategoryListener
{
    private $destinationCategoriesUploadFolder;
    private $destinationCategoriesWebPath;


    public function __construct($destinationCategoriesUploadFolder,$destinationCategoriesWebPath)
    {
        $this->destinationCategoriesUploadFolder=$destinationCategoriesUploadFolder;
        $this->destinationCategoriesWebPath=$destinationCategoriesWebPath;
    }


    public function preFlush(DestinationCategory $destinationCategory)
    {
        $file=$destinationCategory->getImageFile();
        if($file)
        {
            $destinationCategory->setImage($this->upload($file,$destinationCategory->getName()));
        }
    }

    public function postLoad(DestinationCategory $destinationCategory)
    {
        $destinationCategory->setImageLocation($this->destinationCategoriesWebPath.$destinationCategory->getName()."/".$destinationCategory->getImage());
        ;
    }

    public function upload($file,$categoryName)
    {
        if($file instanceof File)
        {

            $name=sprintf("%s.%s",Uuid::uuid4(),$file->guessExtension());
            $file->move($this->destinationCategoriesUploadFolder."/".$categoryName,$name);
            return  $name;
        }
        return null;
    }
}