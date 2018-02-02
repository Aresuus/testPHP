<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php
    
    require_once('db.info');
    require_once('connection.php');

    $res = $db->query("SELECT a.articles_id AS a_articles_id,
                              a.img AS a_img, 
                              a.title AS a_title, 
                              a.short_description AS a_short_description, 
                              a.description AS a_description,
                              a.url AS a_url,
                              u.name AS u_name,
                              u.surname AS u_surname 
                              FROM articles a INNER JOIN users u ON a.users_id = u.users_id;");
    
    $rs=$res->fetchall(PDO::FETCH_ASSOC);
    
    foreach($rs as $article)
    {
        
        echo "<p><a style='color:black' href='/articles/".$article['a_articles_id']."/".$article['a_url'].".html'>".$article['a_title']."</a></p><img style='width: 400px height: 640px'src='".$article['a_img']."'><p>". mb_substr ($article["a_short_description"], 0, 100, 'UTF-8')."...</p><p style='text-align: right'>".$article['u_name']."  ".$article['u_surname']."</p><hr>";
    }
    
?>    
        
</body>
</html>
