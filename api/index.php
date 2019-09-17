<?php 

class Api {
    public $action;
    public $request;

    public function __construct(){

        if(!isset($_REQUEST['action']) && empty($_REQUEST['action'])) {
            return false;
        }


        // конвертируем массив с запросом в объект
        $this->request = (object) $_REQUEST;


        // получаем название метода
        $action = $this->request->action;


        // вызваем нужный метод
        $this->{$action}();
    }

    public function orderProject() {
        $email = strip_tags($this->request->email);
        $message = strip_tags($this->request->message);

        $msg = "E-mail: $email, Message: $message";

        mail("akhalilov@beylitech.az","Beylitech.az order new project",$msg);

        $data['status'] = 1;
        $data['message'] = 'success';

        echo json_encode($data);
    }
}

$api = new Api;