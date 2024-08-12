<!DOCTYPE HTML>
<html lang="en">
<head>
	 <meta charset="utf-8">
	 <title>Information</title>
	 <style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>

<body>

<table id="customers">
	
	<tr>
	<td>Name</td>
	<td>Email</td>
	<td>comment</td>
	</tr>
	 @foreach($d as $contact)

	
	<tr>
	
	<td>{{$contact->name}}</td>
	<td>{{$contact->email}}</td>
	<td>{{$contact->comment}}</td>
	</tr>
		
	@endforeach
	
</table>

</body>