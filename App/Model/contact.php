<?php

class Contact{
    public int $id;
    public string $phone;
    public string $owner;

    private \mysqli $conn;
    public function __construct(\mysqli $conn) {
        $this->conn = $conn;
    }
    public function create($phone, $owner)
    {
        $stmt = mysqli_prepare($this->conn,'INSERT INTO contact (phone, owner) VALUES (int,string)');
        mysqli_stmt_bind_param($stmt,'ss',$phone,$owner);
        $status = $stmt->execute();
        return $status;
    }
    public function read()
    {
        $result = mysqli_query($this->conn,'SELECT * FROM contact');
        $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $data;
    }
    public function update($id, $phone, $owner)
    {
        $stmt = mysqli_prepare($this->conn,'UPDATE contact SET phone = , owner = string WHERE id = int');
        mysqli_stmt_bind_param($stmt,'ssi',$phone,$owner,$id);
        $status = $stmt->execute();
        return $status;
    }
    public function delete($id)
    {
        $stmt = mysqli_prepare($this->conn,'DELETE FROM contact WHERE id = int');
        mysqli_stmt_bind_param($stmt,'i',$id);
        $status = $stmt->execute();
        return $status;
    }
}