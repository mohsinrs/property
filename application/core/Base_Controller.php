<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Base_Controller extends CI_Controller {

    protected $layout = 'admin/layout/main';
    protected $enableLayout = true;
    protected $user;

    public function __construct() {
        parent::__construct();

//        if ($this->router->fetch_class() !== 'index') {
//            $user_data = $this->session->userdata('user');
//
//            if (empty($user_data)) {
//                redirect(base_url('admin/'));
//            } else {
//
//                if ($this->router->fetch_class() !== 'dashboard') {//check current controller is allow or not.
//                    $controllerClass = $this->remaneClass($this->router->fetch_class());
//                    if (showLeftMenus($controllerClass) == FALSE)
//                        redirect(base_url('admin/'));
//                }
//
//                $user_menu_access = $this->session->userdata('user_menu_access');
//                if (empty($user_menu_access))
//                    $this->acl->has_permission();
//
//                $this->user = $user_data;
//
//                $my_projects = $this->project_model->getUserProject($user_data->resource_id);
//                if ($my_projects->num_rows() > 0) {
//                    $this->projects = $my_projects->result_array();
//                    $project_ids = array();
//                    foreach ($this->projects as $project) {
//                        $project_ids[] = $project['project_id'];
//                        $project_title[] = $project['title'];
//                    }
//                }
//
//                $default_project = $this->session->userdata('default_project');
//                $default_project_title = $this->session->userdata('default_project_title');
//
//                if (empty($default_project) || (!empty($default_project) && !in_array($default_project, $project_ids))) {
//                    if ($my_projects->num_rows() > 0) {
//                        $default_project = $project_ids[0];
//                        $default_project_title = $project_title[0];
//                    } else {
//                        $default_project = 0;
//                        $default_project_title = 'Project';
//                    }
//                    $this->session->set_userdata('default_project', $default_project);
//                    $this->session->set_userdata('default_project_title', $default_project_title);
//                }
//            }
//        }
    }

    protected function render($file = NULL, $viewData = array()) 
    {
//        if ($this->enableLayout === false) {
//            $this->load->view($file, $viewData);
//        } else {
//            $data['current_menu'] = $this->router->fetch_class();
//            $data['current_submenu'] = $this->router->fetch_method();
//
//            $data['resource_id'] = 1; //$this->user->resource_id;
//            $data['full_name'] = 'Mohsin Rafiq'; //$this->user->fullname;
//            $data['user_name'] = 'User'; //$this->user->email;
//            $data['image'] = ''; //$this->user->image;
//            $data['topnav_projects'] = $this->projects;
//            $data['project_result'] = $this->projects;

//            if (!is_null($file)) {
                $data['content'] = $this->load->view($file, $viewData, TRUE);
//                $data['layout'] = $layoutData;
//                $data['admin'] = $this->session->userdata('user');
                $this->load->view($this->layout, $data);
//            } else {
//                $this->load->view($this->layout, $viewData);
//            }
//        }
//        $viewData = array();
    }

    protected function disableLayout() 
    {
        $this->enableLayout = false;
    }
    
//    public function setLayout($layout = 'main') {
//        
//        $this->layout = 'layout/'.$layout;
//    }

}