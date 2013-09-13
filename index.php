<?php include 'header.html'; ?>
	<div id="contenuPage">
            <?php if (!isset($_GET['page']))
                    include 'calculatrice.html';
                      if ($_GET['page']=="articles")
                          include 'articles.html';?>
        </div>
<?php include 'footer.html'; ?>