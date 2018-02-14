<?php
namespace Scripto\Form;

use Zend\Form\Form;

class ScriptoProjectForm extends Form
{
    public function init()
    {
        $this->add([
            'type' => 'text',
            'name' => 'o-module-scripto:title',
            'options' => [
                'label' => 'Title', // @translate
                'info' => 'Enter the title of this project.', // @translate
            ],
            'attributes' => [
                'required' => true,
            ],
        ]);

        $this->add([
            'name' => 'o-module-scripto:description',
            'type' => 'textarea',
            'options' => [
                'label' => 'Description', // @translate
                'info' => 'Enter the description of this project.', // @translate
            ],
        ]);

        $this->add([
            'type' => 'Omeka\Form\Element\ItemSetSelect',
            'name' => 'o:item_set',
            'options' => [
                'label' => 'Item set', // @translate
                'info' => 'Select the item set used to synchronize project items. Once synchronized, this project will contain every item in this item set.', // @translate
                'empty_option' => '',
            ],
            'attributes' => [
                'required' => true,
                'class' => 'chosen-select',
                'data-placeholder' => 'Select an item set', // @translate
            ],
        ]);

        $this->add([
            'type' => 'Omeka\Form\Element\PropertySelect',
            'name' => 'o:property',
            'options' => [
                'label' => 'Property', // @translate
                'info' => 'Select the property used to store transcriptions. Scripto stores transcriptions in a wiki before they are imported. Importing will copy transcriptions from the wiki into Omeka as values of the selected property.', // @translate
                'empty_option' => '',
            ],
            'attributes' => [
                'required' => true,
                'class' => 'chosen-select',
                'data-placeholder' => 'Select a property', // @translate
            ],
        ]);

        $this->add([
            'type' => 'text',
            'name' => 'o:lang',
            'options' => [
                'label' => 'Language tag', // @translate
                'info' => 'Enter the language of the transcriptions using an IETF language tag. Note that existing property values using the same language tag will be overwritten during import.', // @translate
            ],
        ]);
    }
}
