<?php
class Posts{
    
    public $id;
    public $description;
    public $completed;
    public $update_at;
    public $created_at;

    public function __construct($id, $description, $completed){

        $this->id = $id;
        $this->description = $description;
        $this->completed = $completed;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    public function getCompleted()
    {
        return $this->completed;
    }

    public function setCompleted($completed)
    {
        $this->completed = $completed;
        return $this;
    }

    public function getUpdateAt()
    {
        return $this->update_at;
    }

    public function setUpdateAt($update_at)
    {
        $this->update_at = $update_at;
        return $this;
    }

    public function getCreatedAt()
    {
        return $this->created_at;
    }

    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
        return $this;
    }
}
?>