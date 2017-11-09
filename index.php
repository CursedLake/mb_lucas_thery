<?php
	include ("includes/connexion.inc.php");
	include ("includes/haut.inc.php");
	include ("includes/verif-util.inc.php");
	
?>

<!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-text">
                        <span class="name">Le fil</span>
                        <hr class="star-light">
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section>
        <div class="container">
            <div class="row">
				<?php 
					if (isset($_GET['a']) && !empty($_GET['a'])) {
							//	echo var_dump($_GET);

						if($_GET['a'] == 'mod' ){
							//echo 'modification...';
							echo '<form method="GET" action="article.php">';
							?>
									<div class="col-sm-10">  
										<div class="form-group">
											<?php 
												echo '<textarea id="message" name="message" class="form-control" placeholder="Message">'.$_GET['contenu'] .'</textarea>';
											?>
											<!-- ajouter le label -->
										</div>
											<input type="hidden"  name="a"  value="mod">
											<?php echo "<input type='hidden'  name='id'  value=" . $_GET['id'] .">" ?>

									</div>
									<div class="col-sm-2">
										<button type="submit" class="btn btn-success btn-lg">Envoyer</button>
									</div>                        
								</form>
						<?php
						}
					}
					else{
						echo '<form method="POST" action="message.php">';
						if($util_connecte)
						{
						?>
									<div class="col-sm-10">  
										<div class="form-group">
											<textarea id="message" name="message" class="form-control" placeholder="Message"></textarea>
											<!-- ajouter le label -->
										</div>
									</div>
									<div class="col-sm-2">
										<?php
												echo '<button type="submit" class="btn btn-success btn-lg">Envoyer</button>';
											} //fin if(util_connecte)
										 ?>
									</div>
								</form>
						<?php
					}
				?>
                   
            </div>
			
			<?php
					$sql="SELECT * FROM messages ORDER BY date DESC";
					$stmt=$pdo->query($sql);
			?>
						
				<br /> <br />
			<?php	
			//}
			?>

            <div class="row">
                <div class="col-md-12">
				
				<?php while ($data = $stmt->fetch()){
				echo "<blockquote><p>" .$data['contenu'] . "</p><footer>" .date("F j, Y, g:i a",$data['date']) ."</footer></blockquote>";
				if($util_connecte)
				{
					echo '<a href="article.php?a=sup&id=' . $data['id'] . '", class="btn btn-danger">' . 'Supprimer</a>';
					echo '<a href="index.php?a=mod&id=' . $data['id'] . '&contenu=' . htmlspecialchars($data['contenu']) .'", class="btn btn-warning">' . 'Modifier</a>';
					//echo date ("d/m/Y H:i:s", /*timestamp - horodateur*/$data ['date']);
				echo '<br /> <br />';
				}//fin if($util_connecte)
				}
				?>
				
				
				<?php //echo $data['contenu']; echo $data['id']; ?>
		
                    <blockquote>
                      <p>Lorem ipsum dolor sit amet, consectetur <a href="#">#adipiscing</a> elit. Integer posuere erat a ante.</p>
                      <footer>Foo</footer>
                    </blockquote>

                    <blockquote>
                      <p>Sed eu tellus vel lectus <a href="#">@rhoncus</a> maximus. Nam eu turpis ac eros pellentesque tincidunt. Maecenas pellentesque consequat libero</p>
                      <footer>Mauris arcu</footer>
                    </blockquote>

                    <blockquote>
                      <p>Nunc volutpat vel nibh vitae blandit</p>
                      <footer>blandit</footer>
                    </blockquote>
                   
                </div>
            </div>
        </div>
    </section>

<?php
include ("includes/bas.inc.php");
?>