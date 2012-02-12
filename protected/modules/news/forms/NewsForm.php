<?php

return array(
    'activeForm' => array(
        'id'                   => 'news-form',
        'class'                => 'CActiveForm',
        'htmlOptions'          => array('enctype'=> 'multipart/form-data'),
        'enableAjaxValidation' => true,
    ),
    'elements'   => array(
        'title'        => array(
            'type'  => 'text',
            'class' => 'big'
        ),
        'text'         => array('type' => 'editor'),
        'photo'        => array('type' => 'file'),
        'is_published' => array('type'  => 'checkbox'),
        'date'         => array('type' => 'date'),
//        'meta'  => array(
//            'type'   => 'meta_tags'
//        ),
        'files'        => array(
            'type'      => 'file_manager',
            'tag'       => 'file',
            'data_type' => 'any',
            'title'     => 'Файлы для скачивания'
        ),
    ),
    'buttons'    => array(
        'submit' => array(
            'type'  => 'submit',
            'value' => $this->model->isNewRecord ? 'Создать' : 'Сохранить'
        )
    )
);
