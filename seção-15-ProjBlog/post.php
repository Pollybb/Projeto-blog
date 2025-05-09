<?php 
    include_once("templates/header.php");

    if(isset($_GET['id'])){
        
        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post){
            if($post['id'] == $postId){
                $currentPost = $post;
            }
        }
    }

?>


    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"><?=$currentPost['title']?></h1>
            <p id="post-description"><?= $currentPost['description'] ?></p>
            <div class="img-container">
                <img src="<?= $BASE_URL?>/img/<?= $currentPost['img']?>" alt="<?=$currentPost['title']?>">
            </div>
            <p class="post-content">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error necessitatibus laboriosam ex modi sunt repellat iste a adipisci, doloremque veritatis ab perferendis praesentium reiciendis suscipit corrupti delectus deleniti laborum odit.
            Quisquam adipisci illum itaque, nesciunt perspiciatis explicabo ullam nemo ex velit minima facere ipsum culpa? Impedit, aliquam. Architecto minus quisquam omnis illo pariatur possimus libero, quibusdam optio at placeat voluptatum.
            Aperiam maiores sapiente officiis fuga quidem eveniet dolorem pariatur ea labore incidunt magni ex dolore, rerum, laborum quam praesentium corrupti aspernatur, beatae nulla accusantium deleniti. Consequuntur deleniti magni a eaque!
            Sit incidunt veniam modi quis ratione quibusdam itaque! Impedit iusto placeat ipsa. Consequatur, fugiat? Nostrum aliquam ipsa deserunt vero, autem reprehenderit molestiae a, fugit minus error, neque nobis accusamus pariatur!
            Quam eligendi reprehenderit, repellendus odit impedit neque vero, tempore dolor ipsum voluptate officia corporis rem. Deleniti, commodi esse accusamus error quis earum nulla aliquam magnam reprehenderit at perspiciatis qui itaque!</p>
            <p class="post-content">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error necessitatibus laboriosam ex modi sunt repellat iste a adipisci, doloremque veritatis ab perferendis praesentium reiciendis suscipit corrupti delectus deleniti laborum odit.
            Quisquam adipisci illum itaque, nesciunt perspiciatis explicabo ullam nemo ex velit minima facere ipsum culpa? Impedit, aliquam. Architecto minus quisquam omnis illo pariatur possimus libero, quibusdam optio at placeat voluptatum.
            Aperiam maiores sapiente officiis fuga quidem eveniet dolorem pariatur ea labore incidunt magni ex dolore, rerum, laborum quam praesentium corrupti aspernatur, beatae nulla accusantium deleniti. Consequuntur deleniti magni a eaque!
            Sit incidunt veniam modi quis ratione quibusdam itaque! Impedit iusto placeat ipsa. Consequatur, fugiat? Nostrum aliquam ipsa deserunt vero, autem reprehenderit molestiae a, fugit minus error, neque nobis accusamus pariatur!
            Quam eligendi reprehenderit, repellendus odit impedit neque vero, tempore dolor ipsum voluptate officia corporis rem. Deleniti, commodi esse accusamus error quis earum nulla aliquam magnam reprehenderit at perspiciatis qui itaque!</p>
        </div>
    
            <aside id="nav-container">
                <h3 id="tags-title">Tags</h3>
                    <ul id="tag-list">
                        <?php foreach($currentPost['tags'] as $tag):?>
                        <li><a href="#"><?= $tag?></a></li> 
                        <?php endforeach;?>    
                        </ul>
                <h3 class="categories-title">Categorias</h3>
                <ul id="categories-list">
                        <?php foreach($categories as $category):?>
                        <li><a href="#"><?= $category?></a></li> 
                        <?php endforeach;?>    
                        </ul>
            </aside>
    </main>

<?php 

   include_once("templates/footer.php");

?>