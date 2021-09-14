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
        'img/1.jpg','img/2.jpg','img/3.jpg',
        'img/4.jpg','img/5.jpg','img/6.jpg',
        'img/7.jpg','img/8.jpg','img/9.jpg',
        'img/10.jpg','img/11.jpg','img/12.jpg',
        'img/13.jpg','img/14.jpg','img/15.jpg'
    );
	public function get_data()
	{	
        
		return array(
			$this->images_array,
            $this->nicknames_array,
		);
	}
};
