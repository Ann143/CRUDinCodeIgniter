<?php
class User_model extends CI_model{

    function create($formArray){
        $this->db->insert('users', $formArray); //Insert Into users
    }

    function all() {
        return $users = $this->db->get('users')->result_array(); //Select all from the users
    }

    function getUser($userId){
        $this->db->where('user_id', $userId);
        return $user = $this->db->get('users')->row_array();//Select users
    }
    function updateUser($userId, $formArray){
        $this->db->where('user_id',$userId);
        $this->db->update('users',$formArray); //Update users 
    }

    function deleteUser($userId){   
        $this->db->where('user_id', $userId);
        $this->db->delete('users'); //Delete From users
    }
}
?>