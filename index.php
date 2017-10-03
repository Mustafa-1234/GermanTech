  <?php require "api.php"; ?>
  <?php include 'header.php';?>           
  <!--Main Body-->
  <?php
  $postPerPage = 9;
  if(!isset($_GET["page"])){
      // Set page 1 as Default
   $page = 1;
   $start = 0;
   $end = $page * $postPerPage;
 }  
 else{
      // Get page from URL    
   $page = $_GET["page"];
   $start = $page * $postPerPage;
   $end = ($page * $postPerPage) + $postPerPage; 
 }

     $res = apiCall('https://hacker-news.firebaseio.com/v0/topstories.json'); //Retrieve all posts from Hacker News API
     for ($i = $start; $i<=$end; $i++ ){
          // Iterate all posts in '$res'
         $res2 = apiCall("https://hacker-news.firebaseio.com/v0/item/" .$res[$i] . ".json");  // Retrieve each post details iteratively 
         ?>
         <div class="row">
           <div id="<?php echo $res2->id ?>" class="mainClass">
            <a href="<?php echo $res2->url ?>" target="_blank">
             <h2 class="col-lg-12 col-md-12 col-12"><?php echo $res2->title ?> </h2>
           </a>
           <div class="col-lg-12 col-md-12 col-12">
             <p><?php echo $res2->score ?> points | by <?php echo $res2->by ?> | <?php echo GetTimeDiff($res2->time); ?> ago | <a href="login.php"> Hide </a> | <?php echo $res2->descendants ?> comments</p>
           </div>
         </div>
         <span id="y"></span>
       </div>
       <script type="text/javascript">
        // Get random background color for each posts
        getRandomColor (<?php echo $res2->id ?>);  
        </script>       
      <?php
    }
    ?>
    <div id="footer" class="row">
     <div id="pagination">
      <input type="button" class="customButton btn btn-primary btn-md" value="&laquo; Previous" onclick="window.location.href='index.php?page=<?php echo ($page['page']-1) ?>'" <?php if ($page == 1) { ?> disabled="disabled" <?php } ?> />
      <input type="button" class="customButton btn btn-primary btn-md" value="Next &raquo; " onclick="window.location.href='index.php?page=<?php echo ($page + 1)?>'" <?php if ($page == pagination($res, $postPerPage)-1 ) { ?> disabled="disabled" <?php } ?> />
    </div>
    <hr>
    <?php include 'footer.php';?>   
    </div>
</div>   
</body>
<script>
  // toggle the hamburger menu
    $('#toggle').click(function() {
    $(this).toggleClass('active');
    $('#overlay').toggleClass('open');
  });
</script>
</html>