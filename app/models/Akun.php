<?php

class Akun{
    private static $userData = null;

    static function getLogin(){
        if(!isset(self::$userData)){
            $akun = new Akun();
            self::$userData = $akun->getByField('token', Session::sess('token'));
        }

        return self::$userData;
    }

    function getByField($field, $id){
        try {
            $sql = "SELECT 
                    *, akun.id 
                    FROM 
                    akun
                    LEFT JOIN petani ON petani.id_user = akun.id
                    WHERE $field = ?";
            $prep = DB::connection()->prepare($sql);
            $prep->execute([$id]);

            if($prep->rowCount()){
                return $prep->fetch(PDO::FETCH_OBJ);
            }

            return false;

        } catch (PDOException $e) {
            return false;
        }
    }
}