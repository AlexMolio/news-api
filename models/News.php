<?php



class News
{
    public static function getNewsItemById($id)
    {

        $newsItem = array();

        $db = Db::getConnection();

        $result = $db-> query("SELECT * FROM news WHERE id = $id");
        $result->setFetchMode(PDO::FETCH_ASSOC);

        $i = 0;


        while($row = $result->fetch()){

            $newsItem[$i]['id'] = $row['id'];
            $newsItem[$i]['title'] = $row['title'];
            $newsItem[$i]['date'] = $row['date'];
            $newsItem[$i]['text'] = $row['text'];
            $newsItem[$i]['is_published'] = $row['is_published'];
            $newsItem[$i]['image'] = $row['image'];
        }

        return $newsItem;
    }

    public static function getNewsList()
    {

        $newsList = array();

        $db = Db::getConnection();

        $result = $db-> query('SELECT * FROM news ORDER BY date DESC LIMIT 10');

        $i = 0;


        while($row = $result->fetch()){

            $newsList[$i]['id'] = $row['id'];
            $newsList[$i]['title'] = $row['title'];
            $newsList[$i]['date'] = $row['date'];
            $newsList[$i]['text'] = $row['text'];
            $newsList[$i]['is_published'] = $row['is_published'];
            $newsList[$i]['image'] = $row['image'];
            $i++;
        }

        return $newsList;
    }

    public static function addNewsList($news_arr)
    {


        foreach ($news_arr as $key => $newsItem) {
                 
                
                if($key > 0 && !(self::checkPlug($newsItem['id']))) {
                    $title = $newsItem['id'];
                    $text = $newsItem['text'];

                    if($text) {

                        if(isset($newsItem["attachment"]["photo"])){

                            $url=$newsItem["attachment"]["photo"]["src_xxbig"];

                            $image= "/upload/images/{$newsItem['id']}.jpg";
                            //$image=$_SERVER['DOCUMENT_ROOT'] . "/upload/images/{$newsItem['id']}.jpg";

                            file_put_contents($_SERVER['DOCUMENT_ROOT'] . $image, file_get_contents($url));
                        }

                    $db = Db::getConnection();

                    $sql = 'INSERT INTO news (title, text, image) VALUES (:title, :text, :image)';

                    $result = $db->prepare($sql);
                    $result->bindParam(':title', $title, PDO::PARAM_STR);
                    $result->bindParam(':text', $text, PDO::PARAM_STR);
                    $result->bindParam(':image', $image, PDO::PARAM_STR);
                    
                    $result->execute();
                }
            }
         
        }
 
    }


    public static function publicNewsItem($id)
    {
                $is_published = '1';

                //echo "Jge,kbrjdfyj";

                $db = Db::getConnection();



                $sql = 'UPDATE news SET is_published = :is_published WHERE id = :id';

                $result = $db->prepare($sql);
                $result->bindParam(':is_published', $is_published, PDO::PARAM_STR);
                $result->bindParam(':id', $id, PDO::PARAM_STR);
                
                $result->execute();
    }

    public static function unPublicNewsItem($id)
    {
                $is_published = '0';

                //echo "Jge,kbrjdfyj";

                $db = Db::getConnection();



                $sql = 'UPDATE news SET is_published = :is_published WHERE id = :id';

                $result = $db->prepare($sql);
                $result->bindParam(':is_published', $is_published, PDO::PARAM_STR);
                $result->bindParam(':id', $id, PDO::PARAM_STR);
                
                $result->execute();
    }
    
    public static function checkPlug($id)
    {

                $db = Db::getConnection();

                $sql = 'SELECT * FROM `news` WHERE title = :id';

                $result = $db->prepare($sql);
            
                $result->bindParam(':id', $id, PDO::PARAM_STR);
                
                $result->execute();

                if(is_array($result->fetch()))
                    return true;
                else
                    return false;


    }

    public static function checked($id){

                $db = Db::getConnection();

                $sql = 'SELECT is_published FROM news WHERE id = :id';

                $result = $db->prepare($sql);
            
                $result->bindParam(':id', $id, PDO::PARAM_STR);
                
                $result->execute();

                $res = $result->fetch();
    
                if($res[0] == 1){
                    return "checked";
                }
    }
}

?>