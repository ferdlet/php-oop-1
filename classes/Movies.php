<?php
    
    class Movie {
        public $title;
        public $director;
        public $releaseYear;
        public $duration;
        public $country;
        public $originaleLanguage;
        public $genre;

        public function __construct($_title, $_director, $_releaseYear, $_duration, $_country, $_originaleLanguage, $_genre) 
        {
            $this->title = $_title;
            $this->director = $_director;
            $this->releaseYear = $_releaseYear;
            $this->duration = $_duration;
            $this->country = $_country;
            $this->originaleLanguage = $_originaleLanguage;
            $this->genre = $_genre;
        }

        public function getDuration()
        {
            return "{$this->duration} minuti";
        }
            
    }

?>