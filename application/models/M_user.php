<?php

class M_user extends CI_Model
{


    public function get_items($where = array())
    {
        $this->db->select('*');
        $this->db->from('menus');
        $this->db->order_by('parent_id');
        $this->db->order_by('no_urut');
        (!$where ? '' : $this->db->where_in('id', $where));
        $query = $this->db->get();
        return $query->result_array();
    }

    public function generate_menu_hak_akses($items = array(), $parent_id = 0)
    {
        $tree = '<ul>';
        for ($i = 0, $ni = count($items); $i < $ni; $i++) {
            if ($items[$i]['parent_id'] == $parent_id) {
                $tree .= '<li>';
                $tree .= '<div class="custom-control custom-checkbox">';
                $tree .= '<input class="custom-control-input" type="checkbox" id="chk' . $items[$i]['id'] . '" name="menus[]" value="' . $items[$i]['id'] . '">';
                $tree .= '<label for="chk' . $items[$i]['id'] . '" class="custom-control-label">' . $items[$i]['name'] . '</label>';
                $tree .= '</div>';
                $tree .= $this->generate_menu_hak_akses($items, $items[$i]['id']);
                $tree .= '</li>';
            }
        }
        $tree .= '</ul>';
        return $tree;
    }

    public function get_menu_id_by_iduser($id)
    {
        $this->db->select('RIGHTS');
        $this->db->from('users_new');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function get_user($id)
    {
        ($id != NULL ? $this->db->where('id=', $id) : '');
        $this->db->select('USERNAME,id');
        $this->db->order_by('USERNAME');
        $query = $this->db->get('users_new');
        return $query;
    }

    public function get_all_menu($id)
    {
        $this->db->select('id,parent_id');
        $this->db->from('menus');
        (!$id ? '' : $this->db->where('id', $id));
        $query = $this->db->get();
        return $query->result_array();
    }

    public function insert($data)
    {
        return $this->db->insert('users_new', $data);
    }

    public function update($data, $id_user)
    {
        $this->db->where('id', $id_user);
        return $this->db->update('users_new', $data);
    }
}
