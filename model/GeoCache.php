<?php 

namespace App\model;

use App\core\Connect;

class GeoCache extends Connect
{
    protected $_pdo;
    
    public function __construct()
    {
        $this->_pdo = $this->connexion();
    }
    /**
     * @return array
     */
    public function recupAllGeocacheUser(){
        $sql = "SELECT 
                    `id`, `name`, `lat`, `lng`, `resp1`, `resp2`, `resp3`
                 FROM 
                    `geo_cache` ";
                    
        $query = $this->_pdo->prepare($sql);
        $query->execute();
        return $query->fetchAll(\PDO::FETCH_ASSOC); 
    }
    /**
     * @return array
     */
    public function recupAllGeocacheAdmin(){
        $sql = "SELECT
                    `id`, `name`, `lat`, `lng`,
                     `resp1`, `resp2`, `resp3`, `good_resp`
                FROM
                    `geo_cache`";
                    
        $query = $this->_pdo->prepare($sql);
        $query->execute();
        return $query->fetchAll(\PDO::FETCH_ASSOC); 
    }
    /**
     * @param $teamAssignment
     * @return array
     */
    // public function recupAllGeocacheTeamAssigned($teamAssignment){
    //     $sql = "SELECT
    //                 `id`, `name`, `lat`, `lng`, `resp1`, `resp2`, `resp3`
    //             FROM
    //                 `geo_cache`
    //             WHERE
    //                 `team_assignment` = :team_assignment";
                    
    //     $query = $this->_pdo->prepare($sql);
    //     $query->execute([':team_assignment' => $teamAssignment]);
    //     return $query->fetchAll(\PDO::FETCH_ASSOC); 
    // }
   
    /**
     * @param string $geocacheName
     * @param int $lat
     * @param int $lng
     * @param string $resp1
     * @param string $resp2
     * @param string $resp3
     * @param string $goodResp
     * @return array lastInsertId
     */
    public function addGeoCache(string $geoCacheName,float $lat,float $lng,string $resp1,string $resp2,string $resp3,string $goodResp){
        $sql = "INSERT INTO 
                    `geo_cache` (`name`, `lat`, `lng`,`resp1`, `resp2`, `resp3`, `good_resp`) 
                VALUES
                    (:geoCache, :lat, :lng,:resp1, :resp2, :resp3,:good_resp)";
        $query = $this->_pdo->prepare($sql);
        $query->execute([':geoCache'=> $geoCacheName,
                         ':lat'=> $lat,
                         ':lng'=> $lng,
                         ':resp1'=> $resp1,
                         ':resp2'=> $resp2,
                         ':resp3'=> $resp3,
                         ':good_resp'=> $goodResp]);
        return $this->_pdo->lastInsertId();
    }
    
    /**
     * @return array
     */
    public function getLastGeoCacheId(){
        $sql = "SELECT 
                    `id`
                 FROM 
                    `geo_cache`
                ORDER BY
                    `id` DESC
                LIMIT 1";
        $query = $this->_pdo->prepare($sql);
        $query->execute();
        return $query->fetch(\PDO::FETCH_ASSOC);
    }
    /**
     * @param int $id
     * @return array
     */
    public function getGeoCacheById(int $id){
        $sql = "SELECT 
                   `good_resp`
                 FROM 
                    `geo_cache`
                WHERE
                    `id` = :id";
        $query = $this->_pdo->prepare($sql);
        $query->execute([':id'=> $id]);
        return $query->fetch(\PDO::FETCH_ASSOC);
    }

    /**
     * @param int $id
     * @return array
     */
    public function getGeocache(int $id){
        $sql = "SELECT 
                    `id`,
                    `name`,
                    `lat` ,
                    `lng`,
                    `resp1`,
                    `resp2`,
                    `resp3`,
                    `good_resp`
                FROM
                    `geo_cache`
                WHERE
                    `id` = :id";
        $query = $this->_pdo->prepare($sql);
        $query->execute([':id'=> $id]);
        return $query->fetch(\PDO::FETCH_ASSOC);
    }
    /**
     * @param int $id
     * @param string $geoCacheName
     * @param float $lat
     * @param float $lng
     * @param string $resp1
     * @param string $resp2
     * @param string $resp3
     * @param string $goodResp
     */
    public function updateGeoCache(int $idGeoCache,string $geoCacheName,float $lat,float $lng,string $resp1,string $resp2,string $resp3,string $goodResp){
       $sql = " UPDATE
                    `geo_cache` 
                SET 
                    `name`=:geoCacheName,
                    `lat`=:lat,
                    `lng`=:lng,
                    `resp1`=:resp1,
                    `resp2`=:resp2,
                    `resp3`=:resp3,
                    `good_resp`=:good_resp
                     WHERE id = :id ";
         $query = $this->_pdo->prepare($sql);
         $query->execute([
                          ':id'=> $idGeoCache,
                          ':geoCacheName'=> $geoCacheName,
                          ':lat'=> $lat,
                          ':lng'=> $lng,
                          ':resp1'=> $resp1,
                          ':resp2'=> $resp2,
                          ':resp3'=> $resp3,
                          ':good_resp'=> $goodResp]);
    }

    public function deleteGeoCache(int $id){
        $sql = "DELETE FROM
                    `geo_cache`
                WHERE
                    `id` = :id";
        $query = $this->_pdo->prepare($sql);
        $query->execute([':id'=> $id]);
        return  $messages['success'][] = ['La géocache a été supprimé']; 
    }
}