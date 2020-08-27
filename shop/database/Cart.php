<?php
class Cart
{
    public $db = null;
    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }
    public function insertIntoCart($params = null, $table = "cart")
    {
        if (isset($params)) {
            $columns = implode(',', array_keys($params));

            $values = implode(',', array_values($params));
            $sql = sprintf("INSERT INTO %s(%s) VALUES(%s)", $table, $columns, $values);
            $result = $this->db->con->query($sql);
            return $result;
        }
    }
    public function addToCart($userid, $itemid)
    {
        if (isset($userid) && isset($itemid)) {
            $params = array("user_id" => $userid, "item_id" => $itemid);
            $result =  $this->insertIntoCart($params);
            if ($result) {
                header("Location: " .$_SERVER['REQUEST_URI']);
            }
        }
    }
    public function addToWishlist($userid, $itemid)
    {
        if (isset($userid) && isset($itemid)) {
            $params = array("user_id" => $userid, "item_id" => $itemid);
            $result =  $this->insertIntoCart($params, "wishlist");
            if ($result) {
                header("Location: " .$_SERVER['REQUEST_URI']);
                $GLOBALS["in_the_wishlist"]=$itemid;
            }
        }
    }
    public function deleteCart($id, $table = "cart", $key = "cart_id")
    {
        if (isset($id)) {
            $result = $this->db->con->query("DELETE FROM {$table} WHERE {$key} = {$id}");
            if ($result) {
                header("Location: " . $_SERVER["PHP_SELF"]);
            }
            return $result;
        }
    }
    public function getSum($arr)
    {
        $sum = 0;
        if (isset($arr)) {
            foreach ($arr as $item) {
                $sum += $item;
            }
        }
        return sprintf("%.2f", $sum);
    }
    public function getCartIds($arr)
    {
        $ids = array();
        foreach ($arr as $item) {
            $ids[] =  $item["item_id"];
        }
        return $ids;
    } 
    public function saveForLater($userid=null, $itemid="null", $fromTable="wishlist", $toTable="cart"){
        if(isset($userid) && isset($itemid)){
        $query = "INSERT INTO {$toTable} SELECT * FROM {$fromTable} WHERE item_id = {$itemid};";
        $query.= "DELETE FROM {$fromTable} WHERE item_id = {$itemid};";
        echo $query;
        $result = $this->db->con->multi_query($query);
        if($result)
            header("Location: ".$_SERVER["REQUEST_URI"]);
        }
    }
}
