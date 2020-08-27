<?php
class Product
{
    public $db = null;
    public function __construct(DBController $db)
    {
        if (!isset($db)) return null;
        $this->db = $db;
    }
    //get data from specific table
    public function getData($table = "product")
    {
        $result = $this->db->con->query("SELECT * FROM {$table}");
        $resultArray = array();
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }
        return $resultArray;
    }
    public function getProduct($itemid, $table = "product")
    {
        if (isset($itemid)) {
            $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id={$itemid}");
            $resultArray = array();
            while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                $resultArray[] = $item;
            }
            return $resultArray;
        }
    }
}
