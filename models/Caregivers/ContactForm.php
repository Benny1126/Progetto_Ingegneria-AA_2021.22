<?php

namespace app\models\Caregivers;

use Yii;
use yii\base\Model;

//model che istanzia il form per mandare una mail
class ContactForm extends Model
{
    public $name;
    public $email="b.bellarte1@studenti.uniba.it";
    public $subject;
    public $body;
    public $verifyCode;


    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'email', 'subject', 'body'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
            // verifyCode needs to be entered correctly
            ['verifyCode', 'captcha'],
        ];
    }


    public function attributeLabels()
    {
        return [
            'verifyCode' => 'Verification Code',
        ];
    }


    public function contact($email)
    {
        $content="<p>Email: " . $this->email. "</p>";
        $content.="<p>Nome: " . $this->name. "</p>";
        $content.="<p>Oggetto: " . $this->subject. "</p>";
        $content.="<p>Messaggio: " . $this->body. "</p>";
        if ($this->validate()) {
            Yii::$app->mailer->compose("@app/mail/layouts/html",["content"=>$content])
                ->setTo($email)
                ->setFrom([$this->email =>$this->name])
                ->setSubject($this->subject)
                ->setTextBody($this->body)
                ->send();

            return true;
        }
        return false;
    }
}
