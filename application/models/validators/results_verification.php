<?php
class ResultsVerification extends CustomFormValidator {
    public $right_answers = array(
        'two_plus_two' => '2',
        'chislo' => 'chet',
        'plane_text' => 'Пиво'
    );
    public $results = array();

    public function checkResults($post_array){
        foreach($this -> right_answers as $question => $answer){
                if($answer == $post_array[$question]){
                    $this->results[$question] = 'true';
                } else {
                    $this->results[$question] = 'false';
                }
        }
        print_r($this->results);
    }

}