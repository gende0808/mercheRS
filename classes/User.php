<?php
class User {
    /**
     * @var PDO
     */
    private $db;
    private $id;
    private $username;
    private $password;


    public function __construct($DB_connection, $id = "")
    {
        $this->db = $DB_connection;
        if($id != "" && is_numeric($id)){
            $this->read($id);
        }
    }

    public function read($id){
        if (empty($id)) {
            throw new InvalidArgumentException('Id is leeg!');
        }
        if (!is_numeric($id)) {
            throw new InvalidArgumentException("Id is geen getal!");
        }

        try {
            $stmt = $this->db->prepare("SELECT username,
                                               password
                                        FROM `user`
                                        WHERE id= :userid
                                               ");
            $stmt->bindParam('userid', $id, PDO::PARAM_INT);
            $result = $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            $this->username = $result['username'];
            $this->password = $result['password'];
        } catch(PDOException $e){
            echo "Database error #1";
        }
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }


}