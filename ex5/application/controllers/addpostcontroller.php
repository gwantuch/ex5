<?php


class AddPostController extends Controller{

	public $postObject;

	protected $access=1;



	public function defaultTask(){

		$this->postObject = new Post();
		$this->set('task', 'add');
		$this->getCategories();
		$this->set('task', 'add');
	}

	public function add(){

			$this->postObject = new Post();

			$data = array('title'=>$_POST['post_title'], 'content'=>$_POST['post_content'],'categoryID'=>$_POST['post_categoryID'],'date'=>date("Y-m-d H:i:s"));

			$result = $this->postObject->addPost($data);

			$this->set('message', $result);


	}

	public function edit($pID){

			$this->postObject = new Post();

			$post = $this->postObject->getPost($pID);
			$this->getCategories();

			$this->set('date', date("Y-m-d H:i:s"));
			$this->set('pID', $post['pID']);
			$this->set('title', $post['title']);
			$this->set('content', $post['content']);
			$this->set('categoryID', $post['categoryID']);
			$this->set('task', 'update');


	}

	public function getCategories(){
			$this->postObject = new Categories();
			$categories = $this->postObject->getCategories();
			$this->set('categories',$categories);
		}


	public function updatePost() {

		$data = array('title'=>$_POST['post_title'],'content'=>$_POST['post_content'],'category'=>$_POST['post_categoryID'],'date'=>date("Y-m-d H:i:s"),'pID'=>$_POST['pID']);
		$this->postObject = new Post();

		$result = $this->postObject->updatePost($data);
		$outcome = $this->postObject->getAllPosts();
		$this->set('posts',$outcome);
		$this->set('message', $result);
		$this->getCategories();
		$this->set('task', 'update');
	}



}
