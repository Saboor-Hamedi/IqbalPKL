<?php

class helper
{
    protected $counter;
    public function __construct()
    {
        $this->counter;
    }
    public function loadMore($text1, $limit = 100)
    {
        if (\strlen($text1) <= $limit) {
            echo $text1;
        } else {
            $text1 = $text1 . "";
            $text1 = substr($text1, 0, $limit);
            $text1 = substr($text1, 0, strrpos($text1, ' '));
            $text1 = $text1 . ", ";
            return $text1;
        }
    }
    public function getIncrement()
    {
        return ++$this->counter;
    }
    public function humanTime($time)
    {
        $date = 'jS F, Y';
        return date($date, strtotime($time));
    }
}

