<?php
$this->pageTitle = Yii::t('UserModule.user', 'Change email');
$this->breadcrumbs = [
    Yii::t('UserModule.user', 'User profile') => ['/user/profile/profile'],
    Yii::t('UserModule.user', 'Change email')
];

$form = $this->beginWidget(
    'bootstrap.widgets.TbActiveForm',
    [
        'id'                     => 'profile-email-form',
        'enableAjaxValidation'   => false,
        'enableClientValidation' => true,
        'htmlOptions'            => [
            'class' => 'well',
        ]
    ]
);
?>

<?php echo $form->errorSummary($model); ?>

<div class="row">
    <div class="col-xs-6">
        <?php echo $form->textFieldGroup(
            $model,
            'email',
            [
                'widgetOptions' => [
                    'htmlOptions' => [
                        'autocomplete' => 'off',
                    ],
                ],
            ]
        ); ?>
    </div>
</div>

<div class="row">
    <div class="col-xs-12">
        <?php if (Yii::app()->user->profile->getIsVerifyEmail()) : { ?>
            <p class="alert alert-warning">
                <?php echo Yii::t(
                    'UserModule.user',
                    'Warning! After changing your e-mail you will receive a message explaining how to verify it'
                ); ?>
            </p>
        <?php } endif; ?>
    </div>
    <div class="col-xs-12">
        <?php $this->widget(
            'bootstrap.widgets.TbButton',
            [
                'buttonType' => 'submit',
                'context'    => 'primary',
                'label'      => Yii::t('UserModule.user', 'Change email'),
            ]
        ); ?>
    </div>
</div>
<?php $this->endWidget(); ?>
