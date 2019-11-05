<?php

namespace App\Models;

use App\Entity\Request;

class LogModel extends BaseModel {

    public function addRequest(Request $request) {
        // build the query
        $queryBuilder = $this->getQueryBuilder()
            ->insert("log")
            ->values([
                "time" => "?",
                "route" => "?",
            ])
            ->setParameter(0, $request->getTime()->format("Y-m-d H:i:s"))
            ->setParameter(1, $request->getRoute());

        // execute the query
        return (bool)$queryBuilder->execute();
    }

}