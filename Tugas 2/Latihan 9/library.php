<?php
class library {
    private $model;
    function __construct() {
        $this->model = new model();
    }
    public function  index() {
        $data['book'] = $this->model->getData();
        return $this->render('listbuku', $data);
    }
    private function render($view, $data = []) {
        if($data) {
            foreach ($data as $key => $value) {
                $$key = $value;
            }
        }
    require_once __DIR__ . 'view.php' . $view . '.php';
    }
}
?>
