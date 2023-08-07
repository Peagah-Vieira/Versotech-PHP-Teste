<?php

declare(strict_types=1);

namespace App\Model;

class UserDao
{

    public function create(User $user)
    {
        try {
            $sql = "INSERT INTO users(name, email) VALUES (?,?)";

            $stmt = Connection::getInstance()->prepare($sql);

            $stmt->bindValue(1, $user->getName());
            $stmt->bindValue(2, $user->getEmail());

            $stmt->execute();
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function read()
    {
        //
    }

    public function update(User $user)
    {
        //
    }

    public function delete($id)
    {
        //
    }
}