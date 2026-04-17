<?php
namespace app\core\form;

use app\core\Model;

class Field{
    public const TYPE_TEXT = 'text';
    public const TYPE_PASSWORD = 'password';
    public Model $model;
    public string $attribute;
    public string $type;
    public function __construct(Model $model, string $attribute)
    {
        $this->model = $model;
        $this->attribute = $attribute;
        $this->type = self::TYPE_TEXT;
    }
    public function passwordField()
    {
        $this->type = self::TYPE_PASSWORD;
        return $this;
    }
   public function __toString()
{
    $hasError = $this->model->hasError($this->attribute) ? 'is-invalid' : '';
    $value = $this->model->{$this->attribute} ?? '';
    $error = $this->model->getFirstError($this->attribute);

    return sprintf(
        '
        <div class="mb-3">
            <label>%s</label>

            <input
                type="%s"
                name="%s"
                value="%s"
                class="form-control %s"
            >

            %s
        </div>
        ',
        ucfirst($this->attribute), // label
        $this->type,               // input type
        $this->attribute,          // input name
        htmlspecialchars($value),  // safe value
        $hasError,                 // bootstrap invalid class

        $this->model->hasError($this->attribute)
            ? sprintf(
                '<div class="invalid-feedback">%s</div>',
                $error
            )
            : ''
    );
}

}
