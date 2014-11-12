<?php
/*
Template Name: Mijn tyrex
 */

session_start();


function get_sales($code, $email){

	$entries = GFFormsModel::get_leads(2); //[0][1][7]

	foreach($entries as $e){
		if($code == $e[5] && $email = $e[2]) { 

			if($e[7] == null || !isset($e[7])){
				return "<p>Welkom ".$e[1].". Er zijn nog geen sales geregistreerd op uw Member-Get-Member code.</p>";
			}

			$sales = unserialize($e[7]);
			$s = '';
			$s .= '<p>Welkom '.$e[1].'! We hebben de volgende sales geregistreerd op uw Tyrex code:</p>';
			$s .= '<div class="mgmresults">';
			$s .= '<h4>Sales</h4>';
			$s .= '<table>';
				$s .= '<thead><tr>'.
						'<th>Datum</th>'.
						'<th>Naam </th>'.
						'<th>Aantal</th>'.
						'<th>Product</th>'.
						'<th>Prijs</th>'.
					   '</tr></thead><tbody>';

			foreach($sales as $a){
				$s .= '<tr>'.
						'<td>'.$a['Datum'].'</td>'.
						'<td>'.$a['Naam'].' </td>'.
						'<td>'.$a['Aantal'].' </td>'.
						'<td>'.$a['Product'].' </td>'.
						'<td>'.$a['Prijs'].'</td>'.
					   '</tr>';
			}

			$s .= '</table>';

			$s .= '<h4>Uitbetalingen</h4>';
			$payments = unserialize($e[8]);
			$s .= '<table>';
			$s .= '<tr><thead>'.
					'<th>Datum</th>'.
					'<th>Bedrag</th>'.
					'</tr></thead><tbody>';
			foreach($payments as $a){
				$s .= '<tr>'.
						'<td>'.$a['Datum'].'</td>'.
						'<td>'.$a['Bedrag'].'</td>'.
					   '</tr>';
			}
			$s .= '</tbody></table>';

			$s .= '<span class="saldo">Saldo: '.$e[9].'</span>
				<p>Wij streven er naar om het saldo eens per maand bij te werken.';
			$s .= '</div>';

			return $s;
		}
	}

	return '';
}

function get_mgm_form() { 
?>
	<p>Vul hieronder uw e-mailadres in en uw MemberGetMember code om uw affiliate stand te bekijken.</p> 
	<form class="mgmform" action="/mijn-tyrex-banden/" method="post">
		<div class="controls">
			<label for="mijn_tyrex_email">Email:</label>
			<input type="text" name="mijn_tyrex_email" /> 
		</div>
		<div class="controls">
			<label for="mijn_tyrex_code">Code:</label>
			<input type="text" name="mijn_tyrex_code" /> <br/>
		</div>
		<div class="controls">
			<input type="submit" name="mijn_tyrex_submit" value="versturen" class="tyrex-button" />
		</div>
	</form>
<?php 
}

function mgm_exists($code, $email){
	$entries = GFFormsModel::get_leads(2); //[0][1][7]
	foreach($entries as $e){
		if($code == $e[5] && $email = $e[2]) { 
			return true;
		}
	}
	return false;
}

// main logic on page refresh
$msg = '';
$mgm_email = $_POST['mijn_tyrex_email'];
$mgm_code = $_POST['mijn_tyrex_code'];
if(isset($_POST['mijn_tyrex_code']) && isset($_POST['mijn_tyrex_email'])) {
	if(!mgm_exists($mgm_code, $mgm_email)) {
		$msg = '<div class="alert-error">De code / email combinatie is niet in ons systeem gevonden.</div>';
		$_SESSION['mijn_tyrex_code'] = null;
		$_SESSION['mijn_tyrex_email'] = null;
	} else {
		$_SESSION['mijn_tyrex_code'] = $mgm_code;
		$_SESSION['mijn_tyrex_email'] = $mgm_email;
	}
}

if($_GET['action'] == 'logout'){
	$_SESSION['mijn_tyrex_code'] = null;
	$_SESSION['mijn_tyrex_email'] = null;
}
?>

<?php get_header(); ?>
<div class="container">
		<section id="content"> 	

				<?php include_once('top-usps.php'); ?>
				<div class="grid-70">
					<div class="u-gridRow inhoud">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<h4 class="auto_content"><?php the_title(); ?></h4>
							<?php 
							if(isset($_SESSION['mijn_tyrex_code']) ){
								the_content(); 
								echo get_sales($_SESSION['mijn_tyrex_code'],$_SESSION['mijn_tyrex_email']); 
								echo '<a class="tyrex-button" href="/mijn-tyrex-banden/?action=logout">Uitloggen</a>';
							} else {
								echo $msg;
								echo get_mgm_form();
							} ?>
						<?php endwhile; else: ?>
						<?php endif; ?>
					</div>
				</div>
				<div class="grid-30">
					<div class="sidebar">
						<?php include_once('widget-reviews.php'); ?>
						<?php include_once('widget-openingstijden.php'); ?>
						<?php include_once('widget-waaromtyrex.php'); ?>
					</div>
				</div>
		</section>
	</div>
	<?php get_footer(); ?>
