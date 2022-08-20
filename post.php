<?php
  include_once("templates/header.php");

  if(isset($_GET['id'])) {
    $postID = $_GET['id'];
    $currentPost;

    foreach($posts as $post) {

        if($post['id'] == $postID) {
            $currentPost = $post;
        }
    }
  }
?>


<main id="post-container">
    <div class="content-container">
        <h1 id="main-title"><?= $currentPost['title'] ?></h1>
        <p id="post-description"><?= $currentPost['description'] ?></p>
        <div class="img-container">
            <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
        </div>
        <p class="post-content">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam dolore nihil ducimus nesciunt labore id blanditiis, dignissimos magnam deleniti minima optio at saepe odio aliquid porro accusantium aut! Aperiam, cumque?
            Deleniti corrupti voluptatibus eveniet dignissimos exercitationem odio asperiores porro impedit, ad tempore recusandae ab, quos dolore doloremque eaque. A aut repellat magni vel hic quos fugit perferendis, eos obcaecati saepe!
            Quasi nam architecto laborum exercitationem rem? Officia rerum voluptates quas alias porro veniam odio in id accusamus laborum fugiat eligendi, hic facere maiores! Repellendus cupiditate harum accusantium, reprehenderit repellat sequi?
            Quam atque hic recusandae eligendi repellendus. Similique vero blanditiis, labore incidunt aut quas quos, cupiditate dicta ex iusto vitae quasi adipisci? Magnam quisquam velit, odit non ipsa laboriosam sint deleniti.
            Adipisci repellat at eum neque, aspernatur nulla iste ratione numquam sapiente totam. Blanditiis, iure obcaecati eos totam reprehenderit aspernatur sint magnam laboriosam! Nemo quia quisquam esse voluptatem quo nobis excepturi!
        </p>
        <p class="post-content">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam dolore nihil ducimus nesciunt labore id blanditiis, dignissimos magnam deleniti minima optio at saepe odio aliquid porro accusantium aut! Aperiam, cumque?
            Deleniti corrupti voluptatibus eveniet dignissimos exercitationem odio asperiores porro impedit, ad tempore recusandae ab, quos dolore doloremque eaque. A aut repellat magni vel hic quos fugit perferendis, eos obcaecati saepe!
            Quasi nam architecto laborum exercitationem rem? Officia rerum voluptates quas alias porro veniam odio in id accusamus laborum fugiat eligendi, hic facere maiores! Repellendus cupiditate harum accusantium, reprehenderit repellat sequi?
            Quam atque hic recusandae eligendi repellendus. Similique vero blanditiis, labore incidunt aut quas quos, cupiditate dicta ex iusto vitae quasi adipisci? Magnam quisquam velit, odit non ipsa laboriosam sint deleniti.
            Adipisci repellat at eum neque, aspernatur nulla iste ratione numquam sapiente totam. Blanditiis, iure obcaecati eos totam reprehenderit aspernatur sint magnam laboriosam! Nemo quia quisquam esse voluptatem quo nobis excepturi!
        </p>
    </div>
    <aside id="nav-container">
    <h3 id="tags-title">Tags</h3>
    <ul id="tag-list">
         <?php foreach($currentPost['tags'] as $tag): ?>
              <li><a href="#"><?= $tag ?></a></li>
        <?php endforeach; ?>
    </ul>
    <h3 id="categories-title">Categorias</h3>
    <ul id="categories-list">
        <?php foreach($categories as $category): ?>
          <li><a href="#"><?= $category ?></a></li>
        <?php endforeach; ?>
    </ul>
</aside>
</main>


<?php
  include_once("templates/footer.php");
?>