<?php
$basePath = "C:\\Users\\braz9\\Desktop\\projects\\laracasts\\object-oriented-principles-php\\09\\";
require_once $basePath . "functions.php";


// exceptions

class Video {

}
class User {

    public function download(Video $video) {

        if (! $this->subscribe()) {
            throw new \Exception('You must be subscribe to download the video!');
        }
    }

    public function subscribe() {
        return false;
    }
}

// $user = (new User())->download(new Video('video'));

// dd($user);


// ---------------------------------------------

class Member {

    public $name;

    public function __construct($name) {

        $this->name = $name;
    }
}
class Team {

    protected $members = [];

    public function add(Member $member) {

        $this->members[] = $member;
    }

    public function members() {
        return $this->members;
    }
}

$team = new Team;
$team->add(new Member('victor braz'));
$team->add(new Member('igor braz'));
$team->add(new Member('bruno braz'));
$team->add(new Member('lorena braz'));

dd($team->members());

