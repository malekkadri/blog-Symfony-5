<?php

namespace ContainerMWSLiAg;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getForm_RegistryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'form.registry' shared service.
     *
     * @return \Symfony\Component\Form\FormRegistry
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['form.registry'] = new \Symfony\Component\Form\FormRegistry([0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Form\\ArticleType' => ['privates', 'App\\Form\\ArticleType', 'getArticleTypeService', true],
            'App\\Form\\CategoryType' => ['privates', 'App\\Form\\CategoryType', 'getCategoryTypeService', true],
            'App\\Form\\ChangePasswordFormType' => ['privates', 'App\\Form\\ChangePasswordFormType', 'getChangePasswordFormTypeService', true],
            'App\\Form\\CommentType' => ['privates', 'App\\Form\\CommentType', 'getCommentTypeService', true],
            'App\\Form\\ContactType' => ['privates', 'App\\Form\\ContactType', 'getContactTypeService', true],
            'App\\Form\\LinkType' => ['privates', 'App\\Form\\LinkType', 'getLinkTypeService', true],
            'App\\Form\\RegistrationFormType' => ['privates', 'App\\Form\\RegistrationFormType', 'getRegistrationFormTypeService', true],
            'App\\Form\\ResetPasswordRequestFormType' => ['privates', 'App\\Form\\ResetPasswordRequestFormType', 'getResetPasswordRequestFormTypeService', true],
            'App\\Form\\SearchType' => ['privates', 'App\\Form\\SearchType', 'getSearchTypeService', true],
            'App\\Form\\TagType' => ['privates', 'App\\Form\\TagType', 'getTagTypeService', true],
            'App\\Form\\UserType' => ['privates', 'App\\Form\\UserType', 'getUserTypeService', true],
            'FM\\ElfinderBundle\\Form\\Type\\ElFinderType' => ['privates', 'fm_elfinder.form.type', 'getFmElfinder_Form_TypeService', true],
            'FOS\\CKEditorBundle\\Form\\Type\\CKEditorType' => ['privates', 'fos_ck_editor.form.type', 'getFosCkEditor_Form_TypeService', true],
            'Gregwar\\CaptchaBundle\\Type\\CaptchaType' => ['services', 'gregwar_captcha.type', 'getGregwarCaptcha_TypeService', true],
            'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => ['privates', 'form.type.entity', 'getForm_Type_EntityService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => ['privates', 'form.type.choice', 'getForm_Type_ChoiceService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ColorType' => ['privates', 'form.type.color', 'getForm_Type_ColorService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => ['services', '.container.private.form.type.file', 'get_Container_Private_Form_Type_FileService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => ['privates', 'form.type.form', 'getForm_Type_FormService', true],
        ], [
            'App\\Form\\ArticleType' => '?',
            'App\\Form\\CategoryType' => '?',
            'App\\Form\\ChangePasswordFormType' => '?',
            'App\\Form\\CommentType' => '?',
            'App\\Form\\ContactType' => '?',
            'App\\Form\\LinkType' => '?',
            'App\\Form\\RegistrationFormType' => '?',
            'App\\Form\\ResetPasswordRequestFormType' => '?',
            'App\\Form\\SearchType' => '?',
            'App\\Form\\TagType' => '?',
            'App\\Form\\UserType' => '?',
            'FM\\ElfinderBundle\\Form\\Type\\ElFinderType' => '?',
            'FOS\\CKEditorBundle\\Form\\Type\\CKEditorType' => '?',
            'Gregwar\\CaptchaBundle\\Type\\CaptchaType' => '?',
            'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ColorType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => '?',
        ]), ['Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_extension.form.transformation_failure_handling'] ?? $container->load('getForm_TypeExtension_Form_TransformationFailureHandlingService'));
            yield 1 => ($container->privates['form.type_extension.form.http_foundation'] ?? $container->load('getForm_TypeExtension_Form_HttpFoundationService'));
            yield 2 => ($container->privates['form.type_extension.form.validator'] ?? $container->load('getForm_TypeExtension_Form_ValidatorService'));
            yield 3 => ($container->privates['form.type_extension.upload.validator'] ?? $container->load('getForm_TypeExtension_Upload_ValidatorService'));
            yield 4 => ($container->privates['form.type_extension.csrf'] ?? $container->load('getForm_TypeExtension_CsrfService'));
        }, 5), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_extension.repeated.validator'] ?? ($container->privates['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension()));
        }, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_extension.submit.validator'] ?? ($container->privates['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension()));
        }, 1)], new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_guesser.validator'] ?? $container->load('getForm_TypeGuesser_ValidatorService'));
            yield 1 => ($container->privates['form.type_guesser.doctrine'] ?? $container->load('getForm_TypeGuesser_DoctrineService'));
        }, 2))], new \Symfony\Component\Form\ResolvedFormTypeFactory());
    }
}
