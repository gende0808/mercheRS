<?php
class Item
{
    /**
     * @var int
     */
    private $itemid;


    /**
     * @var string
     */
    private $itemname;
    /**
     * @var int
     */
    private $itemprice;

    /**
     * @var PDO
     */
    private $db;
    private $description;
    private $rsid;
    private $icon;

    public function __construct($db,  $id = null){
        $this->db = $db;

        if($id !== null){
            //execute a read
        }
    }
    public function create(){
    $createQuery = $this->db->prepare("INSERT INTO item (rsid, name, description, price, icon) VALUES (:rsid, :itemname,:description,:price, :icon)");
    $createQuery->bindParam(':itemname', $this->itemname);
    $createQuery->bindParam(':description', $this->description);
    $createQuery->bindParam(':price', $this->itemprice);
    $createQuery->bindParam(':rsid', $this->rsid);
    $createQuery->bindParam(':icon', $this->icon);
    $createQuery->execute();
    }

    /**
     * @return mixed
     */
    public function getRsid()
    {
        return $this->rsid;
    }

    /**
     * @param mixed $rsid
     */
    public function setRsid($rsid): void
    {
        $this->rsid = $rsid;
    }



    /**
     * @return int
     */
    public function getItemid(): int
    {
        return $this->itemid;
    }

    /**
     * @param int $itemid
     */
    public function setItemid(int $itemid): void
    {
        $this->itemid = $itemid;
    }

    /**
     * @return string
     */
    public function getItemname(): string
    {
        return $this->itemname;
    }

    /**
     * @param string $itemname
     */
    public function setItemname(string $itemname): void
    {
        $this->itemname = $itemname;
    }

    /**
     * @return int
     */
    public function getItemprice(): int
    {
        return $this->itemprice;
    }

    /**
     * @param int $itemprice
     */
    public function setItemprice(int $itemprice): void
    {
        $this->itemprice = $itemprice;
    }

    /**
     * @return PDO
     */
    public function getDb(): PDO
    {
        return $this->db;
    }

    /**
     * @param PDO $db
     */
    public function setDb(PDO $db): void
    {
        $this->db = $db;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

}