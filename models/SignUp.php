<?php

namespace app\models;

use yii\base\Model;
use app\models\User;

class SignUp extends Model {
    public $name;
    public $email;
    public $password;

    public function rules()
    {
       return [
           [['name', 'email', 'password'], 'required'],
           ['email', 'email'],
           ['email', 'unique', 'targetClass' => 'app\models\User'],
           ['password', 'string', 'min'=>2, 'max'=>10],
       ];
    }


    public function signUp() {
        $user = new User();
        $user->name = $this->name;
        $user->email = $this->email;
        $user->setPassword($this->password);
        return $user->save();
    }
}