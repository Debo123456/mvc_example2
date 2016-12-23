<?php
    class Home extends Controller {
        public function index($name ='') {
            $user = $this->model('User');
            if($name) {
              $user->$name = $name;
            }

            $this->view('home/index', ['name' => $user->$name]);
        }
    }
?>
