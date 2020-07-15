<?php require_once('functions.php');
 require_once ($_SERVER['DOCUMENT_ROOT'].'/projektiWEB-master/views/showContact.php');
 ?>
<?php get_header(); ?>
<section class="block_section">
	<div class="row">
		<div class="small_article">
			<div class="small_article__content">
				<h4>Welcome Admin</h4>
				<p>Howday admin welcome back!</p>
			</div>
		</div>
		<table>
			<caption><h1 class="table-title">Contacts</h1></caption>
			<thead>
				<tr>
					<th>Id</th>
					<th>Name</th>
					<th>Email</th>
					<th>Subject</th>
					<th>Message</th>
					<th>Options</th>
				</tr>
			</thead>
			<tbody>
			<?php 
				$c = new ShowContact();
				$contacts = $c->get_Contacts(); 
			?>
			<?php foreach ($contacts as $contact): ?>
				<tr>
					<td><?php echo $contact['contact_id']; ?></td>
					<td><?php echo $contact['name']; ?></td>
					<td><?php echo $contact['email']; ?></td>
					<td><?php echo $contact['subject']; ?></td>
					<td><?php echo $contact['message']; ?></td>
					<td>
						
						<a href="lib/delete.php?id=<?php echo $contact['contact_id']; ?>" style="color:red;">
							<i class="fa fa-times fa-2x" aria-hidden="true"></i>
						</a>
					</td>
				</tr>
			<?php endforeach ?>
			</tbody>
		</table>
	</div>
</section>

<?php get_footer(); ?>

