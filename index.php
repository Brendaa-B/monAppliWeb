<?php include 'header.html'; ?>
	<div id="contenuPage">
            <?php if (!isset($_GET['page']))
                    include 'calculatrice.html';
                  if (isset($_GET['page']))
                      if ($_GET['page']=="articles")
                          include 'articles.html';
                  if (isset($_GET['page']))
                      if ($_GET['page']=="nouscontacter")
                          include 'nouscontacter.html';?>
        </div>
<?php include 'footer.html'; ?>