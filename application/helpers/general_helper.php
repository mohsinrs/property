<?php

function setNotification($type, $message) {
    $CI = & get_instance();
    $msg = '<div class="alert alert-'. $type .'">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        ' . $message . '
    </div>';
    $CI->session->set_flashdata('msg', $msg);
}

function renderNotification() {
    $CI = & get_instance();
    echo $CI->session->flashdata('msg');
}

function generatePassword($length = 5) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}

function getLoginUserId() {
    $CI = & get_instance();
    $user = $CI->session->userdata('USER');
    return $user->user_id;
}

function getLoginUserType() {
    $CI = & get_instance();
    $user = $CI->session->userdata('USER');
    return $user->user_type;
}

function dbToCalendarDate($date) {
    $date = new DateTime($date);
    return $date->format('d-m-Y');
}

function calendarToDBDate($date) {
    $date = new DateTime($date);
    return $date->format('Y-m-d H:i:s');
}

function readableDate($date) {
    return date("D, d M Y", strtotime($date));
}

function sortedPropertyTypes($PropertyTypeList) {
    $data = array();
    foreach ($PropertyTypeList as $value) {
        if($value->parent_property_type_id == NULL) {
            $data[] = $value;
            foreach ($PropertyTypeList as $value2) {
                if($value2->parent_property_type_id == $value->property_type_id) {
                    $data[] = $value2;
                }
            }
        }
    }
    return $data;
}

function sortedUserRoles($UserRoleList) {
    $data = array();
    foreach ($UserRoleList as $value) {
        if($value->parent_role_id == NULL) {
            $data[] = $value;
            foreach ($UserRoleList as $value2) {
                if($value2->parent_role_id == $value->role_id) {
                    $data[] = $value2;
                }
            }
        }
    }
    return $data;
}