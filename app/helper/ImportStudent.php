<?php

namespace App\helper;

class ImportStudent
{
    public $student = [];

    public function __construct(array $student)
    {
        $this->student = $student;
    }

    public function showStudent()
    {
        return $this->student;
    }
}
