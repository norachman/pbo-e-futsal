<?php 

class Admin extends User
{
    
    public function addLapangan($data)
    {
        foreach ($data as $key => $value){
            $value = is_array($value) ? trim(implode(',',$value)) : trim($value);
            $data[$key] = (strlen($value) > 0 ? $value : NULL);
        }
        $query = "INSERT INTO lapangan(nama, harga) VALUES(?, ?)";
        $sql = $this->db->prepare($query);
        $sql->bind_param(
            'si',
            $data['nama'],
            $data['harga']);
        try {
            $sql->execute();
        } catch (\Exception $e) {
            $sql->close();
            http_response_code(500);
            die($e->getMessage());
        }
        $sql->close();
    }

    public function setHarga($data) 
    {
        foreach ($data as $key => $value){
            $value = is_array($value) ? trim(implode(',',$value)) : trim($value);
            $data[$key] = (strlen($value) > 0 ? $value : NULL);
        }

        $query = "UPDATE lapangan SET harga = ? WHERE id_lapangan = ?";
        $sql = $this->db->prepare($query);
        $sql->bind_param(
            'ii',
            $data['harga'],
            $data['id_lapangan']);
        try {
            $sql->execute();
        } catch (\Exception $e) {
            $sql->close();
            http_response_code(500);
            die($e->getMessage());
        }
    }

}
