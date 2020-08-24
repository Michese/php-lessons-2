<?php
//declare(strict_types=1);

namespace Classes;

class DB
{
    private $db;
    private $hasConnection;

    public function __construct(string $host, string $user, string $password, string $nameDB)
    {
        $this->db = mysqli_connect($host, $user, $password, $nameDB);

        if (mysqli_connect_errno()) {
            $this->hasConnection = false;
        } else {
            $this->hasConnection = true;
        }
    }

    public function __destruct()
    {
        mysqli_close($this->db);
    }

    public function hasConnection(): bool
    {
        return $this->hasConnection;
    }

    public function getAssocResult($sql): array
    {
        $assocResult = [];

        if ($this->hasConnection) {
            $result = mysqli_query($this->db, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                $assocResult[] = $row;
            }
        }

        return $assocResult;
    }

    public function executeQuery($sql): bool
    {
        $result = false;

        if ($this->hasConnection) {
            $result = mysqli_query($this->db, $sql);
        }

        return $result;
    }
}