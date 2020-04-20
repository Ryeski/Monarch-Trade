<?php


class User
{
    public $userName;
    public $userID;
    public $userType;
    public $eMail;
    public $userListings;
    public $isTutor;
    public $courseSpecialty;
    public $reviewRating;

    public function __construct($name, $id, $type, $mail, $tutor, $courses, $rating)
    {
        $this->userName = $name;
        $this->userID = $id;
        $this->userType = $type;
        $this->eMail = $mail;
        $this->userListings = [10];
        $this->isTutor = $tutor;
        $this->courseSpecialty = $courses;
        $this->reviewRating = $rating;
    }
}

$object = new User;