<?php
	$this->load->helper('url');
?>
<div id="contenu">
	<h2>Liste de mes fiches de frais</h2>
	 	
	<?php if(!empty($notify)) echo '<p id="notify" >'.$notify.'</p>';?>
	 
	<table class="listeLegere">
		<thead>
			<tr>
				<th >Nom</th>
				<th >Prenom</th>
				<th >Mois</th>
				<th >Etat</th>  
				<th >Montant</th>  
				<th >Date modif.</th>  
				<th  colspan="2">Actions</th>
			</tr>
		</thead>
		<tbody>
          
		<?php    
			foreach( $mesFiches as $uneFiche) 
			{
				if ($uneFiche['id'] == "CL")
				{
					$accepter= '';
					
					if ($uneFiche['libelle'] == 'Fiche Signée, saisie clôturée') {
						$accepter = anchor('c_visiteur/AccepterFiche/'.$uneFiche['idVisiteur'].'/'.$uneFiche['mois'],'Accepter',  'title="Accepter la fiche"onclick="return confirm(\'Voulez-vous vraiment Accepter cette fiche ?\');"');
						$refuser= anchor('c_visiteur/MotifRefus/'.$uneFiche['idVisiteur'].'/'.$uneFiche['mois'], 'Refuser',  'title="Refuser la fiche"onclick="return confirm(\'Voulez-vous vraiment refuser cette fiche ?\');"');
					}	//Si acceptation de la fiche -> traiter la demande
						//Si refus de la fiche -> indiquer motif 
						
					
					
					echo
					'<tr>
					<td class="nom">'.$uneFiche['nom'].'</td>
					<td class="prenom">'.$uneFiche['prenom'].'</td>
					<td class="date">'.anchor('c_visiteur/voirFiche/'.$uneFiche['mois'], $uneFiche['mois'],  'title="Consulter la fiche"').'</td>
					<td class="libelle">'.$uneFiche['libelle'].'</td>
					<td class="montant">'.$uneFiche['montantValide'].'</td>
					<td class="dateModif">'.$uneFiche['dateModif'].'</td>
					
					<td class="actionAccepter">'.$accepter.'</td>
					<td class="actionRefuser">'.$refuser.'</td>
					</tr>';
				}
				// <td class="montant"><input type="text" id="txtDateHF" name="dateFrais" size="20" maxlength="20" value=""  /></td>
			}
		?>	  
		</tbody>
    </table>

</div>
