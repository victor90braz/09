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

class MaximumMembersReached extends Exception {

}

class Member {

    public $name;

    public function __construct($name) {

        $this->name = $name;
    }
}
class Team {

    protected $members = [];

    public function add(Member $member) {

        if (count($this->members) === 3) {
            throw new MaximumMembersReached('Team has a maximum of three members!');
        }

        $this->members[] = $member;
    }

    public function members() {

        return $this->members;
    }
}

class TeamMembersController {

    function store() {
        $team = new Team; // has a maximum of three members

        try {
            $team->add(new Member('victor braz'));
            $team->add(new Member('igor braz'));
            $team->add(new Member('bruno braz'));
            $team->add(new Member('lorena braz'));

            var_dump($team->members());
        } catch(\MaximumMembersReached $error) {
            var_dump($error->getMessage());
        }
    }
}

(new TeamMembersController)->store();



