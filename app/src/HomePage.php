<?php

namespace SilverStripe\Test;

use Page;
use SilverStripe\Forms\TextField;
use SilverStripe\Assets\Image;
use SilverStripe\AssetAdmin\Forms\UploadField;

class HomePage extends Page
{
    private static $db = [
        'Subtitle' => 'Varchar',
    ];

    private static $has_one = [
        'Photo' => Image::class
    ];

    private static $owns = [
        'Photo'
    ];

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->addFieldToTab('Root.Main', TextField::create('Subtitle'), 'Content');
        $fields->addFieldToTab('Root.Attachments', $photo = UploadField::create('Photo'));

        $photo
            ->setFolderName('example-photos')
            ->getValidator()->setAllowedExtensions(array('jpg', 'jpeg', 'png'));

        return $fields;
    }
}