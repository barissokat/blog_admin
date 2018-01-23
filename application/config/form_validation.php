<?php
$config = array(
    'login' => array(
        array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'trim|required|valid_email'
        ),
        array(
            'field' => 'password',
            'label' => 'Parola',
            'rules' => 'trim|required'
        )
    ),
    'profile' => array(
        array(
            'field' => 'name',
            'label' => 'Kullanıcı adı',
            'rules' => 'trim|required|max_length[100]'
        ),
        array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'trim|required|valid_email|max_length[100]'
        )
    ),
    'password' => array(
        array(
            'field' => 'oldpassword',
            'label' => 'Eski parolanız',
            'rules' => 'trim|required'
        ),
        array(
            'field' => 'newpassword',
            'label' => 'Yeni parolanız',
            'rules' => 'trim|required|min_length[6]|max_length[12]'
        ),
        array(
            'field' => 'newpasswordconf',
            'label' => 'Parola doğrulama',
            'rules' => 'trim|matches[newpassword]'
        )
    ),
    'setting/create' => array(
        array(
            'field' => 'name',
            'label' => 'İsim',
            'rules' => 'trim|required'
        ),
        array(
            'field' => 'value',
            'label' => 'Değer',
            'rules' => 'trim|required'
        )
    ),
    'setting/update' => array(
        array(
            'field' => 'value',
            'label' => 'Değer',
            'rules' => 'trim|required'
        )
    ),
    'category' => array(
        array(
            'field' => 'name',
            'label' => 'İsim',
            'rules' => 'trim|required'
        )
    ),
    'blog' => array(
        array(
            'field' => 'category',
            'label' => 'Kategori',
            'rules' => 'trim|required'
        ),
        array(
            'field' => 'title',
            'label' => 'İsim',
            'rules' => 'trim|required'
        ),
        array(
            'field' => 'content',
            'label' => 'İçerik',
            'rules' => 'trim|required'
        )
    ),
    'userpassword' => array(
        array(
            'field' => 'oldpassword',
            'label' => 'Eski parolanız',
            'rules' => 'trim|required'
        ),
        array(
            'field' => 'newpassword',
            'label' => 'Yeni parolanız',
            'rules' => 'trim|required|min_length[6]|max_length[12]'
        ),
        array(
            'field' => 'newpasswordconf',
            'label' => 'Parola doğrulama',
            'rules' => 'trim|matches[newpassword]'
        )
    ),
    'userpassword' => array(
        array(
            'field' => 'name',
            'label' => 'Kullanıcı adı',
            'rules' => 'trim|required|max_length[100]'
        ),
        array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'trim|required|valid_email|max_length[100]'
        ),
        array(
            'field' => 'password',
            'label' => 'Yeni parolanız',
            'rules' => 'trim|required|min_length[6]|max_length[12]'
        ),
        array(
            'field' => 'passwordconf',
            'label' => 'Parola doğrulama',
            'rules' => 'trim|matches[password]'
        )
    )
);
?>