<?php
namespace App\Controllers;

use App\Models\StoryModel;

class StoriesController {

    // I-display ang lahat ng stories
    public function index() {
        $storyModel = new StoryModel();
        $stories = $storyModel->getAllStories();
        // I-load ang view at ipadala ang mga stories sa view
        $this->view('stories/index', ['stories' => $stories]);
    }

    // Tingnan ang isang partikular na story
    public function view($id) {
        $storyModel = new StoryModel();
        $story = $storyModel->getStoryById($id);
        
        // I-check kung may story na nahanap
        if ($story) {
            $this->view('stories/view', ['story' => $story]); // I-load ang view at ipadala ang story
        } else {
            echo "Story not found.";
        }
    }

    // Magdagdag ng bagong story
    public function add() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'];
            $content = $_POST['content'];
            $category = $_POST['category'];
            $author_id = 1; // Placeholder para sa logged-in user ID (dapat ito ay dynamic)

            $storyModel = new StoryModel();
            $storyModel->addStory($title, $content, $category, $author_id);
            header('Location: /stories'); // Pagkatapos magdagdag, ire-redirect ang user sa listahan ng stories
            exit();
        }
        
        // Ipakita ang form para magdagdag ng story
        $this->view('stories/add');
    }

    // Mag-edit ng story
    public function edit($id) {
        $storyModel = new StoryModel();
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'];
            $content = $_POST['content'];
            $category = $_POST['category'];

            // I-update ang story
            $storyModel->updateStory($id, $title, $content, $category);
            header('Location: /story/'.$id); // I-redirect sa page ng na-edit na story
            exit();
        }
        
        // I-load ang story para i-edit
        $story = $storyModel->getStoryById($id);
        $this->view('stories/edit', ['story' => $story]);
    }

    // Mag-delete ng story
    public function delete($id) {
        $storyModel = new StoryModel();
        $storyModel->deleteStory($id); // Tawagin ang delete method sa model
        header('Location: /stories'); // I-redirect pabalik sa listahan ng mga stories
        exit();
    }

}


class StoriesController {
    public function index() {
        // Display stories or return a view
        return view('stories.index');
    }

    public function create() {
        // Handle creating new story
    }
}


