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
