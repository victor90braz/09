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

$user = (new User())->download(new Video('video'));

dd($user);
