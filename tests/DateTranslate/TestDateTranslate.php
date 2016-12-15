<?php

class TestDateTranslate extends PHPUnit_Framework_TestCase
{
    public function testDateFormatWithGivenDate()
    {
        $dateTest = new \Previewtechs\Phpie\DateTimeTranslate\DateTimeTranslate();

        $dateTest->setDate('2015-01-01');

        $this->assertTrue('বৃহস্পতি ১.জানুয়ারী.২০১৫' == $dateTest->getDate());
    }

    public function testDateFormatWithGivenDateAndTime()
    {
        $dateTest = new \Previewtechs\Phpie\DateTimeTranslate\DateTimeTranslate();

        $dateTest->setDate('2015-01-02 12:01:01' , true);

        $this->assertTrue('শুক্র ২.জানুয়ারী.২০১৫ ১২:১:১ অপরাহ্ণ' == $dateTest->getDate());
    }


}