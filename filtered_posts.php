<?php include('config.php') ?>
<?php include('includes/public_functions.php')?>
<?php include('includes/head_section.php'); ?>
<?php

	/*gets post under particular topic*/
	if(isset($_GET['topic'])) {
		$topic_id = $_GET['topic'];
        if (!isset($topic_id)) {

            die("$topic_id unavailable". mysql_error());
        }
		$posts = getPublishedPostsByTopic($topic_id);
	}

 

?>
   <title>Anything's Blog| Home</title>
</head>

<body>
	<!-- container -->
	<div class="container">
    
    	<!-- navbar -->
		<?php include( ROOT_PATH.'/includes/navbar.php') ?>
		<!-- // navbar -->
    
        <!-- Page content -->
        <div class="content">
        	<h2 class="content-title">
            	Articles on <u><?php echo getTopicNameById($topic_id);?> </u>
            </h2>
            <hr>
            <!-- more content still to come here... -->
            <?php foreach($posts as $post);
			?>
				<div class="post" style="margin-left: 0px;"> 
                <!-- post thumbnail -->
					<img src="<?php echo BASE_URL . '/static/images/' .$post['image'];?>" class="post_image" alt="">   
                    <a href="single_post.php?post-slug=<?php echo $post['slug']; ?>">
                    	<div class="post_info">
                        	<h3><?php echo $post['title'] ?></h3>
                            <div class="info">
                            	<span><?php echo date("F j, Y", strtotime($post["created_at"])); ?></span>
                                <span class="read_more">Read more...</span>
                            </div>
                        </div>
                     </a>
                 </div>
             
        </div>
        <!-- //Page content-->
        
        <!-- footer -->
		<?php include(ROOT_PATH.'/includes/footer.php') ?>
        <!-- // footer-->
        
	</div>
    <!-- //container -->
    
    
</body>
</html>