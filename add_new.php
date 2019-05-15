<div class="container">
	<div class="row cleaner-mobile">
	
		<div class="row">
			<div class="col-xl-12 sub-title">
				
				<h3>Dodawanie nowej oferty specjalnej</h3>		
							
			</div>				

		</div>

		<div class="col-xl-12 single-element">
		

		<script type="text/javascript">
			function check_length_desc() {
				document.form1.description.value=document.form1.description.value.substring(0,160);
				
				document.form1.pozostalo_desc.value=160-document.form1.description.value.length;
				}
		 </script>
		 
		<script type="text/javascript">
			function check_length_title() {
				document.form1.text_title.value=document.form1.text_title.value.substring(0,30);
				
				document.form1.pozostalo_title.value=30-document.form1.text_title.value.length;
				}
		 </script>
		 
		 <script type="text/javascript">
			function check_length_code() {
				document.form1.promo_code.value=document.form1.promo_code.value.substring(0,8);
				
				document.form1.pozostalo_code.value=8-document.form1.promo_code.value.length;
				}
		 </script>
		
		
						
			<form action="add_new_to_db.php" method="post" id="addForm" name="form1"> 
			
			<div class="row add-form-container">
				<div class="col-md-7 offset-md-1">
				
					<b>Tytuł oferty:</b><br /> 
					<input class="text-title" type="text" name="text_title" onKeyUp="javascript:check_length_title();" required/><br />
					Pozostało znaków: <input type="text" value="30" name="pozostalo_title" size="2" disabled><br />					
					<br /><b>Opis:</b><br />
					<textarea class="text-area" name="description" form="addForm" onKeyUp="javascript:check_length_desc();" required></textarea>
					Pozostało znaków: <input type="text" value="160" name="pozostalo_desc" size="3" disabled>					
				
				</div>	
				
				<div class="col-md-4 mobile-sep">
					<b>Kod promocji:</b><br /> 
					<input type="text" name="promo_code" class="text-code" onKeyUp="javascript:check_length_code();" required/><br />
					Pozostało znaków: <input type="text" value="8" name="pozostalo_code" size="1" disabled><br />	
					
					<br />
					<b>Obrazek:</b><br />
					<select name="selected_img">
						<option value="" disabled selected hidden>WYBIERZ </option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
					</select>
					<br /> <br /> 
					<div class="add-button-container"><input type="submit" value="DODAJ" class="add-button"/></div> 
				</div>
				
			</div>	
			</form>
			
						
		</div>		

		
		<?php

		require( dirname( __FILE__ ) . '/image_gallery.php' );

		?>
	

	</div>
</div>