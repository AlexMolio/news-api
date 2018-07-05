<?php

/*include_once ROOT . '/models/Category.php';
include_once ROOT . '/models/Product.php';*/

class SiteController
{
    public function actionIndex()
    {
		

		//$api_res = file_get_contents("https://api.vk.com/method/wall.get?access_token=f98638b6f98638b6f98638b6d3f9e2c929ff986f98638b6a2b6f98f675112ae449c9731&domain=vyborg_news&filter=owner&count=3&version=5.80");

    	//$api_res = json_decode($api_res, true);

    	//$result = News::addNewsList($api_res['response']);

    	//if($result)
    	//	echo 'Bingo!!!';

    	#echo "<pre>";
    	# print_r($api_res);
    	#echo "</pre>";

    	$newsList = News::getNewsList();

        

        require_once (ROOT . '/views/site/archive.php');

        return true;
    }

    public function actionSingle($news_id)
    {
    	$newsItem = News::getNewsItemById($news_id);
    	


    	require_once (ROOT . '/views/site/single.php');

    	return true;
    }
}

?>