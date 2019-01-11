<?php

namespace SilverStripe\Test;

use Page;
use SilverStripe\Forms\TextField;

class HomePage extends Page
{
    private static $db = [
        'Subtitle' => 'Varchar',
    ];

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->addFieldToTab('Root.Main', TextField::create('Subtitle'), 'Content');

        return $fields;
    }
}