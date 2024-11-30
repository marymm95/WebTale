namespace App\Models;

use PDO;

class StoryModel {

    private $db;

    public function __construct() {
        $this->db = new PDO("mysql:host=localhost;dbname=your_database", "username", "password");
    }

    // Kumuha ng lahat ng stories
    public function getAllStories() {
        $stmt = $this->db->query("SELECT * FROM stories");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Kumuha ng isang story by ID
    public function getStoryById($id) {
        $stmt = $this->db->prepare("SELECT * FROM stories WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Magdagdag ng bagong story
    public function addStory($title, $content, $category, $author_id) {
        $stmt = $this->db->prepare("INSERT INTO stories (title, content, category, author_id) VALUES (:title, :content, :category, :author_id)");
        $stmt->execute(['title' => $title, 'content' => $content, 'category' => $category, 'author_id' => $author_id]);
    }

    // I-update ang isang story
    public function updateStory($id, $title, $content, $category) {
        $stmt = $this->db->prepare("UPDATE stories SET title = :title, content = :content, category = :category WHERE id = :id");
        $stmt->execute(['id' => $id, 'title' => $title, 'content' => $content, 'category' => $category]);
    }

    // I-delete ang isang story
    public function deleteStory($id) {
        $stmt = $this->db->prepare("DELETE FROM stories WHERE id = :id");
        $stmt->execute(['id' => $id]);
    }
}
