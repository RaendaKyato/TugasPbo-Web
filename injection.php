<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Depedency Injection</title>
</head>

<body>
    <?php
    class user
    {
        //-Properti global------------------------------
        public $name;
        public $email;
        public static $users = [];
        //-----------------------------------------------
    

        //-Bagian function dan deklarasi variabel global-
        public function __construct($name = null, $email = null)//untuk mengatur nilai default sebagai -> null <- atau juga bisa menggunakan -> "" atau '' <-
        {
            $this->name = $name;
            $this->email = $email;
        }

        //----------------------------------------------
    
        public static function create(array $data)
        {
            $user = new self($data['name'], $data['email']);
            self::$users[] = $user;
            return $user;
        }

        //-----------------------------------------------
    
        public static function all()//memanggil semua data yang ada didalam $users
        {
            return self::$users;
        }

        //-----------------------------------------------
    }


    class Request
    {
        protected $data;
        public function __construct(array $data)
        {
            $this->data = $data;
        }
        public function validate(array $rules)
        {
            $errors = [];//wadah array penampung nilai dari validasi $rules
            foreach ($rules as $field => $rule) {//field sebagai key,$rules sebagai value,$rule sebagai objek
                if ($rule === 'required' && empty($this->data[$field])) {
                    $errors[] = "The $field field are required.";
                }
            }
            if (!empty($errors)) {
                throw new Exception(implode(", ", $errors));
            }
            return $this->data;
        }
        public function input($key, $default = null)
        {
            return $this->data[$key] ?? $default;
        }
    }

    class UserController
    {
        public function store(Request $request)
        {//Request ==> Injeksi,$request itu objek
            $validate = $request->validate([
                'name' => 'required',
                'email' => 'required',
            ]);
            User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
            ]);

        }

        public function viewUsers()
        {
            $users = User::all();
            echo "<h1>User List</h1>";
            echo "<ul>";
            foreach ($users as $user) {
                echo "<li>Name: " . htmlspecialchars($user->name) . ", Email: " . htmlspecialchars($user->email) . "</li>";

            }
            echo "</ul>";
        }
    }

    try {

    }
    ?>

</body>

</html>