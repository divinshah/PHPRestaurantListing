<?php

class Dashboard
{
    public function getUserCount($db)
    {
        $sql = 'SELECT count(*) FROM registration';
        $pdostm = $db ->prepare($sql);

        //exceuting
        $pdostm->execute();
        $usercount = $pdostm->fetchColumn();
        return $usercount;   
    }
    
    public function getBusinessCount($db)
    {
        $sql = 'SELECT count(*) FROM businesses';
        $pdostm = $db ->prepare($sql);

        //exceuting
        $pdostm->execute();
        $business = $pdostm->fetchColumn();
        return $business;   
    }
    
    public function getEventCount($db)
    {
        $sql = 'SELECT count(*) FROM events';
        $pdostm = $db ->prepare($sql);

        //exceuting
        $pdostm->execute();
        $event = $pdostm->fetchColumn();
        return $event;   
    }
    
    public function getOfferCount($db)
    {
        $sql = 'SELECT count(*) FROM offers';
        $pdostm = $db ->prepare($sql);

        //exceuting
        $pdostm->execute();
        $offer = $pdostm->fetchColumn();
        return $offer;   
    }
    
    
}
?>