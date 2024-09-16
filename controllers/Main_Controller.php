<?php

class Main_Controller extends Base_Controller 
{

    public function action_index()
    {
		$posts = Post::findAll();
        View::render('main/index', ['posts' => $posts]);
    }


    public function action_create()
    {
        try {
            Validator::make($_POST)->empty();
            $result = Post::add($_POST);
            $this->addMessage($result, 'add');
        }
        catch (Exception $e) {
            $this->addMessage(false, $e->getMessage());
        }
        $this->redirect('main/index');
    }

}