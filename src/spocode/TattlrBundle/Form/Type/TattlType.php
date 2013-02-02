<?php
namespace spocode\TattlrBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class TattlType extends AbstractType
{
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
        $builder->add('type','choice',['choices' => [
            'AbandonedCar'  => 'AbandonedCar',
            'Flood'         => 'Flood',
            'Graffito'      => 'Graffito',
            'Pothole'       =>'Pothole',
            'SignalOut'     => 'SignalOut',
            ]]);
        $builder->add('datetime','datetime',['input' => 'timestamp']);
        $builder->add('image', 'file');
        $builder->add('geoLattitude','number');
        $builder->add('geoLongitude','number');
        $builder->add('comments','textarea');
    }

    public function getName()
    {
        return 'newTattl';
    }
}