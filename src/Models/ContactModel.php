<?php

namespace App\Models;

class ContactModel extends BaseModel {

    public function insertContact($email, $message) {
        $stmt = $this->db->prepare("INSERT INTO contact (email, message) VALUES (?, ?)");
        $stmt->bind_param('ss', $email, $message);

        if($stmt->execute()) {
            return true;
        } else {
            return false;
        }

    }

}