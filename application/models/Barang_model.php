<?php  
class Barang_model extends CI_Model {  
    public function get_all() {  
		$filter = $this->input->get('find');
		$this->db->like('barang', $filter);
		$this->db->select('tb_barang.id AS barang_id, tb_barang.kategori_id, tb_barang.barang, tb_barang.stok, tb_barang.created_at, tb_barang.updated_at, tb_barang.deleted_at');  
        $this->db->select("(SELECT kategori FROM tb_kategori WHERE tb_kategori.id = tb_barang.kategori_id) AS kategori");  
        $this->db->from('tb_barang'); 
        return $this->db->get()->result();  
    }  
  
    public function get_by_id($id) {  
        $this->db->select('id AS barang_id, kategori_id, barang, stok, created_at, updated_at, deleted_at');  
        $this->db->from('tb_barang');  
        $this->db->where('id', $id);  
        return $this->db->get()->row();  
    }  
  
    public function get_kategori_barang() {  
        $this->db->select('id AS kategori_id, kategori');  
        $this->db->from('tb_kategori');  
        return $this->db->get()->result();  
    }   
  
    public function insert($data) {  
        return $this->db->insert('tb_barang', $data);  
    }  
  
    public function update($id, $post) {  
		$this->db->where('id', $id);
		$this->db->update('tb_barang', $post);
		return $this->db->affected_rows();
    }  
  
    public function delete($id) {  
        $this->db->where('id', $id);
		$this->db->delete('tb_barang');
		return $this->db->affected_rows();
    }  
  
    public function get_kategori() {  
        return $this->db->get('tb_kategori')->result();  
    }  
}  
