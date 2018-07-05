<?php

class AdminController
{
    public function actionIndex()
    {
		if(isset($_POST['submit'])) {

            $api_res = file_get_contents("https://api.vk.com/method/wall.get?access_token=f98638b6f98638b6f98638b6d3f9e2c929ff986f98638b6a2b6f98f675112ae449c9731&domain=vyborg_news&filter=owner&count=10&version=5.80");

            $api_res = json_decode($api_res, true);

        /*echo "<pre>";
        print_r($api_res);
        echo "</pre>";*/

            $result = News::addNewsList($api_res['response']);

        }

        if(isset($_POST['publish'])){

            $id = $_POST['publish'];

            if(News::checked($id) == "checked"){
                News::unPublicNewsItem($id);
            }else{

                News::publicNewsItem($id);
        }

        }


    	$newsList = News::getNewsList();

        require_once (ROOT . '/views/admin/admin.php');

        return true;
    }
}
?>