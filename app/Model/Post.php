<?php
/**
 * Created by PhpStorm.
 * User: yunlong
 * Date: 14-5-30
 * Time: 下午5:17
 */

App::uses('AppModel','Model');

class Post extends AppModel{

    public $validate = array(
        'title' => array(
            'rule' => 'notEmpty'
        ),
        'body' => array(
            'rule' => 'notEmpty'
        )
    );
} 