<?php

namespace App\Form;

use App\Entity\Album;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AlbumFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, array(
                'label' =>'Название альбома',
                'attr' =>[
                    'placeholder' => 'Введите название мероприятия'
                ]
            ))
            ->add('data_publication', TextType::class, array(
                'label' =>'Дата мероприятия',
                'attr' =>[
                    'placeholder' => 'Введите дату мероприятия'
                ]
            ))
            ->add('description', TextType::class, array(
                'label' =>'Описание',
                'attr' =>[
                    'placeholder' => 'Введите описание'
                ]
            ))
            ->add('active', TextType::class, array(
                'label' =>'Активность альбома',
                'attr' =>[
                    'placeholder' => 'Введите 0(не активен) или 1(активен)'
                ]
            ))
            ->add('image', TextType::class, array(
                'label' =>'Выберите файл',
                'attr' =>[
                    'mapped' =>false,
                    'placeholder' => 'Введите название мероприятия'
                ]
            ))
            ->add('save', SubmitType::class, array(
                'label'=>'Сохранить',
                'attr' =>[
                    'class' => 'btn btn-success'
                ]
            ))
            ->add('delete', SubmitType::class, array(
                'label'=>'Удалить',
                'attr' =>[
                    'class' => 'btn btn-danger'
                ]
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Album::class,
        ]);
    }
}
