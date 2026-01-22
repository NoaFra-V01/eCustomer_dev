<?php


// src/Service/Dashboard/StatisticsService.php
namespace App\Service\Dashboard;

use Doctrine\DBAL\Connection;

class StatisticsService
{
    public function __construct(
        private readonly Connection $connection,
    ) {
    }

    public function getArticlesFV4Count(): int
    {
        $sql = "SELECT count(*) nb FROM [pmi-light-prod].[dbo].[vwPmiArctFv4Section0010]";
        $result = $this->connection->fetchAssociative($sql);
        
        return (int) ($result['nb'] ?? 0);
    }

    public function getNonConformityCount(string $username): int
    {
        $sql = "
            SELECT count([id]) nb
            FROM [mypro-dev].dbo.claim_nc nc
            LEFT OUTER JOIN [pmi-light-prod].dbo.article 
                ON nc.ta_soci = arktsoc 
                AND nc.ta_arti = arktcodart 
                AND nc.ta_artc = arktcomart 
            WHERE ta_soci='100' 
            AND nc.ta_type='TY03' 
            AND convert(date,[TA_DSAI],112) > DATEADD(month, -6,GETDATE()) 
            AND TA_SITU='SI02' 
            AND TA_RESP = :username
        ";
        
        $result = $this->connection->fetchAssociative($sql, [
            'username' => strtoupper($username)
        ]);
        
        return (int) ($result['nb'] ?? 0);
    }
}