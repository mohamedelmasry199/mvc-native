<?php
namespace app\models;

use app\core\Model;

class ContactForm extends Model {
    public string $name = '';
    public string $email = '';
    public string $subject = '';
    public string $body = '';

    public function rules(): array
    {
        return [
            'name' => [self::RULE_REQUIRED],
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIL],
            'subject' => [self::RULE_REQUIRED],
            'body' => [self::RULE_REQUIRED],
        ];
    }
    public function labels(): array
    {
        return [
            'name' => 'Name',
            'email' => 'Email',
            'subject' => 'Subject',
            'body' => 'Message'
        ];
    }

}
?>
