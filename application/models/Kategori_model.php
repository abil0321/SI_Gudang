<?php  
class Kategori_model extends CI_Model {  
    public function get_all() {  
        return $this->db->get('tb_kategori')->result();  
    }  
  
    public function get_by_id($id) {  
        return $this->db->get_where('tb_kategori', ['id' => $id])->row();  
    }  
  
    public function insert($data) {  
        return $this->db->insert('tb_kategori', $data);  
    }  
  
    public function update($id, $data) {  
        return $this->db->update('tb_kategori', $data, ['id' => $id]);  
    }  
  
    public function delete_kate($id) {  
		$this->db->where('id', $id);
		$this->db->delete('tb_kategori');
		return $this->db->affected_rows();
    }  
}  
