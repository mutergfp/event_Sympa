<?php

namespace App\Form;

use App\Entity\Event;
use App\Entity\Place;
use App\Repository\PlaceRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AddEventType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $choices = $options['places'];

        $builder
            ->add('title')
            ->add('description')
            ->add('image', FileType::class, ['label' => 'Image JPG 400x400'])
            ->add('eventType', ChoiceType::class, [
                'choices' => [
                    'Concert' => 'Concert',
                    'Evenement' => 'Evenement',
                    'Spectacle' => 'Spectacle',
                ],
                ]
            )
            ->add('startDate')
            ->add('endDate')
            ->add('price')
            ->add('placeMax')
            ->add('placeNamePlace', ChoiceType::class, [
                'choices' => $choices,
                'choice_label' => function(Place $place, $key, $value) {
                    return $place->getPlaceName().', '.$place->getAdress().', '.$place->getPostalCode().', '.$place->getCity();
                }
                ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Event::class,
            'places' => array(),
        ]);
    }
}
