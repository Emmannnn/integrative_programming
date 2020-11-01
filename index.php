<DOCTYPE! html>
<head><title>Second Assignment</title></head>

<?php
    echo "Hello Woooorld!";
    echo "<br>";
    echo "<br>";
    class User
    {
        public $name;
        public $Username;
        public $email;
    
        function set_name($name)
        {
            $this->name = $name;
        }
        
        function get_name()
        {
            return $this->name;
        }
        
        function set_Username($Username)
        {
            $this->Username = $Username;
        }
        
        function get_Username()
        {
            return $this->Username;
        }
        
        function set_email($email)
        {
            $this->email = $email;
        }
        
        function get_email()
        {
            return $this->email;
        }
       
    }

    class Account extends User
    {
         public function AddFriend()
        {
            echo "{$this->name} Emmanuel Pineda Added a Friend.";
        }
        public function PostStatus()
        {
            echo "{$this->name} Emmanuel Pineda Posted a Status.";
        }
    }

    $name = new User();
    $Username = new User();
    $email = new User();

    $name->set_name('Emmanuel Pineda');
    $Username->set_Username('Emman');
    $email->set_email('pinedaemmanuelroy@gmail.com');

    echo "Name: ".$name->get_name();
    echo "<br>";
    echo "Username: ".$Username->get_Username();
    echo "<br>";
    echo "Email: ".$email->get_email();
    echo "<br>";
    echo "<br>";
    $account = new Account();
    $account->AddFriend();
    echo "<br>";
    $account->PostStatus();
?>

</body>
</html>