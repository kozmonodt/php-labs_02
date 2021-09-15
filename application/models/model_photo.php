<?php

class Model_Photo extends Model
{   
    public $nicknames_array = array (
        'Дельфин','Пастор','Переплата',
        'Мазила','Тормоз','Опорник',
        'Пас назад','Навес','Хендо',
        'Криминал','Собака','Молодежь',
        'Жирафа','Доцик','Жопа'
    );
    public $images_array = array(
        'images/1.jpg','images/2.jpg','images/3.jpg',
        'images/4.jpg','images/5.jpg','images/6.jpg',
        'images/7.jpg','images/8.jpg','images/9.jpg',
        'images/10.jpg','images/11.jpg','images/12.jpg',
        'images/13.jpg','images/14.jpg','images/15.jpg'
    );
	public function get_data()
	{	
        
		return array(
			$this->images_array,
            $this->nicknames_array,
		);
	}
};
