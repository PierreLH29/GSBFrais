
<?php        
		$this->load->helper('url');
?>
		
	<div id="contenu">

<?php    
	$action = base_url("c_visiteur/refuseFiche");  
?>
   <!--  Formulaire pour remplir le motif de refus-->
	<form action=<?= $action ?> method="post" style='text-align:center'>    
		<label for="motif">Motif du refus</label><br>    
		<textarea name="motif" rows="8" cols="80" style='resize : none;'></textarea><br>
		<input type="submit" required="required">
	</form>
</div>
