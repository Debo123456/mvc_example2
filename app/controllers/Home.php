<?php
    class Home extends Controller {
    protected $user;

      public function __construct() {
          $this->user = $this->model('User');

      }

        public function index($name ='') {
            if($name) {
              $user->$name = $name;
            }

            $this->view('home/index', ['name' => $user->$name]);
        }

        public function create($username = '', $email = '') {
          $this->user->create([
            "username" => $username,
            "email" => $email
          ]);
        }
    }
?>
