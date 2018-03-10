<!DOCTYPE html>
<html>
<head>

	<title>Submit form</title>
</head>
<body>

<form action="" method="get">  <!-- usig metho = post the data is not transmitted through the url  when we click  submit or go and url isnot change but when method =  "get " the data  is changed and it can be seen through the url -->
	<table>
		<tr>
			<td>  <!-- <td> tag le halka gap rakxa  beechma same row between two text or table like name and name ko form  ma beech ma halka gap xa  -->
				Name:
			</td>
			<td>
				<input type="text" placeholder="Name" name="">
			</td>
		</tr>
		<tr>
			<td>
				Password:
			</td>
			<td>
				<input type="password" placeholder="Password" name="">
			</td>
		</tr>
		<tr>
			<td>
				Gender:
			</td>
			<td>
				<input type="radio" name="gender">Male  <!-- radio help to select from . -->
				<input type="radio" name="gender">Feamale
				</td>
				</tr>
				<tr>
					<td>
						Email:
					</td>
					<td>
						<input type="text" placeholder = "email"name="">
					</td>
				</tr>
				<tr>
				<td>
					Phone no.:
				</td>
					
					<td>
						<select> <!-- multiple phone no. haru select garna help garxa -->
							<option>+977</option> <!-- option le option chose garna help garxa multiple phone no. bata -->
							<option>+91</option>
							<option>046</option>
							<option>01</option>
							<option>+61</option>
						</select>

						<input type="number" placeholder="Number" name="">
					</td>
					</tr>
					
					<tr>
						<td>
							Do you like css?
						</td>
						<tr>
						<td>
							<input type="checkbox" name="css" id="css"><!-- checkbox tick the best chosing parts -->
						</td>
						</tr>
					</tr>
					<tr>
					<tr>
						<td>
							Favourite Language :
						</td>
					</tr>
					<tr>
						<td>
							<input type="radio" name="">Html
						
						<input type="radio" name="">Css
					
						<input type="radio" name="">Php
						</td>
					</tr>
					<tr>
						<td>
							<input type="submit" value="submit" name="">
						</td>
					</tr>
</table>
</form>
</body>
</html>