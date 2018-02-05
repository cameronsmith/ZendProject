<?php namespace BookList\Form;

use Zend\Form\Form;

class BookForm extends Form
{
    public function __construct($name = null, array $options = [])
    {
        parent::__construct('book', $options);

        $this->add([
            'name' => 'id',
            'type' => 'Hidden',
        ]);
        $this->add([
            'name' => 'title',
            'type' => 'Text',
            'options' => [
                'label' => 'Title',
            ]
        ]);
        $this->add([
            'name' => 'author',
            'type' => 'Text',
            'options' => [
                'label' => 'author'
            ]
        ]);
        $this->add([
            'name' => 'submit',
            'type' => 'Submit',
            'attributes' => [
                'value' => 'Go',
                'id' => 'submitbutton',
            ]
        ]);
    }
}