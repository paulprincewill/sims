<form action="app/upload/main" dd_submit="yes" dd_bindResult="#students">
	

	<section>
		<div>
			<input type="file" name="picture" placeholder="">
		</div>

		<div>
			<input type="text" name="first_name" placeholder="first name">
			<input type="text" name="last_name" placeholder= "last name">
			
			<input type="text" name="matric_number" placeholder="matric number">
		</div>
		
	</section>

	<input type="text" name="department" placeholder="department">
	  <select name="gender">
	  
	  	 <option>
	  	 male
	  	 </option>  

	  	  <option> 
	  	 female
	  	  </option>  
	  </select>	 
	<input type="date" name="date_of_birth" placeholder="date of birth"><br>
	<input type="submit">

</form>