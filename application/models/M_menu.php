<?php

class M_menu extends CI_Model
{


    function get_items($where = array())
    {
        $this->db->select('*');
        $this->db->from('menus');
        $this->db->order_by('parent_id');
        $this->db->order_by('no_urut');
        (!$where?'':$this->db->where_in('id', $where));
        $this->db->where('status', 'aktif');
        $query = $this->db->get();
        return $query->result_array();
    }

    function generateTrees($items = array(), $parent_id = 0)
    {
        $tree = '<ul class="navbar-nav">';
        for ($i = 0, $ni = count($items); $i < $ni; $i++) {
            if ($items[$i]['parent_id'] == $parent_id) {
                $tree .= '<li class="nav-item ' . (($items[$i]['url'] == '') ? 'dropdown' : '') . '">';
                $tree .= '<a ' . (($items[$i]['url'] == '') ? 'id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle"' : 'class="nav-link" href="' . $items[$i]['url'] . '"') . '>' . $items[$i]['name'] . '</a>';
                $tree .= $this->generateTreez($items, $items[$i]['id']);
                $tree .= '</li>';
            }
        }
        $tree .= '</ul>';
        return $tree;
    }

    function generateTreez($items = array(), $parent_id = 0)
    {
        $tree = '<ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow ">';
        for ($i = 0, $ni = count($items); $i < $ni; $i++) {
            if ($items[$i]['parent_id'] == $parent_id) {
                $tree .= '<li ' . (($items[$i]['url'] == '') ? ' class="dropdown-submenu dropdown-hover"' : '') . '>';
                $tree .= '<a href="' . (($items[$i]['url'] == '') ? '#' : site_url($items[$i]['url'])) . '" ' . (($items[$i]['url'] == '') ? 'id="dropdownSubMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle" style="margin-right: 40px;"' : 'class="dropdown-item"') . '">' . $items[$i]['name'] . '</a>';
                if ($items[$i]['url'] == '') {
                    $tree .= $this->generateTreez($items, $items[$i]['id']);
                }
                $tree .= '</li>';
            }
        }
        $tree .= '</ul>';
        return $tree;
    }


    function get_rights($id)
    {
        $this->db->select('RIGHTS');
        $this->db->from('users_new');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->result_array();
    }


    //tes ja kna dihapus
    function get_menu_rights($where = array())
    {
        $this->db->select('id');
        $this->db->from('menus');
        $this->db->order_by('parent_id');
        $this->db->order_by('no_urut');
        $this->db->where_in('id', $where);
        $query = $this->db->get();
        return $query->result_array();
    }
}
