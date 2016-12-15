<?php
/**
 * DateTranslate class convert the local format language
 */

namespace Previewtechs\Phpie\DateTimeTranslate;


class DateTimeTranslate
{
    protected $date;

    /**
     * This is the method for translate date format
     *
     * @author Imran Hassan Emon <emon@previewtechs.com>
     *
     * @param null $date If $date is null then it will show current date
     * @param boolean $time Showing time ot not
     * @param string $locale
     * @param string $pattern  Set the pattern used for the IntlDateFormatter http://userguide.icu-project.org/formatparse/datetime
     *
     */
    public function setDate($date = null , $time = false , $locale = 'bn-BD', $pattern = 'E d.MMMM.yyyy' ){
         if($date == null){
             $date = date('Y-m-d');
         }

         if($time){
             $pattern = 'E d.MMMM.yyyy H:m:s a';
         }


        $dt = new \DateTime($date);

        $formatter = new \IntlDateFormatter($locale, \IntlDateFormatter::FULL, \IntlDateFormatter::FULL);

        $formatter->setPattern($pattern);


        $this->date = $formatter->format($dt);
    }

    /**
     * @return mixed This will show Formatted date output
     *
     */
    public function getDate(){
        return $this->date;
    }

}

