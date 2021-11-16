<?php

namespace App\Form;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use App\Entity\Album1;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;

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
            ->add('date_publication', DateType::class, array(
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
            ->add('active', CheckboxType::class, array(
                'label'=> 'Активность альбома',
                'required' => false,
                'value' => 1,
            ))

            ->add('date_create', TextType::class, array(
                'label' =>'Активность альбома',
                'attr' =>[
                    'placeholder' => 'Введите 0(не активен) или 1(активен)'
                ]
            ))
            ->add('date_update', TextType::class, array(
                'label' =>'Активность альбома',
                'attr' =>[
                    'placeholder' => 'Введите 0(не активен) или 1(активен)'
                ]
            ))
            ->add('user_create', TextType::class, array(
                'label' =>'Активность альбома',
                'attr' =>[
                    'placeholder' => 'Введите 0(не активен) или 1(активен)'
                ]
            ))
            ->add('user_update', TextType::class, array(
                'label' =>'Активность альбома',
                'attr' =>[
                    'placeholder' => 'Введите 0(не активен) или 1(активен)'
                ]
            ))
            ->add('image', FileType::class, array(
                'label' => 'Главное изображение',
                'required' => false,
                'mapped' => false,
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
            'data_class' => Album1::class,
        ]);
    }
}
