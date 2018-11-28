<?php


namespace App\Admin;



use App\Entity\Destination;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Form\Type\ModelType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class DestinationAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $destinationFieldOptions=['property'=>'name'];

        $formMapper
            ->add('slug',TextType::class,['label'=>'Slug'])
            ->add('shortContent',CKEditorType::class,['required'=>false,'label'=>'Short Content : '])
            ->add('introtext',CKEditorType::class,['required'=>false,'label'=>'Intro Text: '])
            ->add('bottomText',CKEditorType::class,['required'=>false,'label'=>'Bottom Text'])
            ->add('closeDestinations',CKEditorType::class,['required'=>false,'label'=>'Close Destinations(sidebar):'])
            ->add('currency',CKEditorType::class,['required'=>false,'label'=>'Currencies(sidebar):'])
            ->add('currency',CKEditorType::class,['required'=>false,'label'=>'Currencies(sidebar):'])
            ->add('facts',CKEditorType::class,['required'=>false,'label'=>'Facts(sidebar):'])
            ->add('note',CKEditorType::class,['required'=>false,'label'=>'Notes(sidebar):'])
            ->add('category',ModelType::class,$destinationFieldOptions)
            ->add('file',FileType::class,['required'=>false ,'data_class'=>null,'label'=>'Cover Image'])

        ;

    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('slug');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('slug')

        ;
    }

    public function toString($object)
    {
        return $object instanceof Destination
            ? $object->getSlug()
            : 'Destination'; // shown in the breadcrumb on the create view
    }
}