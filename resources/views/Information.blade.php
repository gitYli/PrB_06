<!DOCTYPE HTML>
<html lang="en">
<head>
	 <meta charset="utf-8">
	 <title>Information</title>
	 <style>
/* Basic reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Styling the body */
body {
    font-family: 'Helvetica Neue', sans-serif;
    background-color: #f0f2f5;
    color: #333;
    line-height: 1.6;
}

/* Container styling */
.container {
    width: 90%;
    max-width: 1200px;
    margin: 30px auto;
    padding: 30px;
    background-color: #fff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
}

/* Header styling */
h1 {
    text-align: center;
    margin-bottom: 30px;
    font-size: 2.5em;
    color: #0056b3;
}

/* Table styling */
table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
    font-size: 1em;
    color: #555;
    border-radius: 10px;
    overflow: hidden;
}

thead {
    background-color: #007BFF;
    color: #fff;
}

th, td {
    padding: 15px 20px;
    text-align: left;
}

th {
    background-color: #0056b3;
    color: #fff;
    text-transform: uppercase;
    letter-spacing: 0.05em;
}

tbody tr:nth-child(even) {
    background-color: #e9f1fb;
}

tbody tr:nth-child(odd) {
    background-color: #f4f8ff;
}

tbody tr:hover {
    background-color: #d6e7fb;
}

tbody td {
    border-bottom: 1px solid #ccc;
}

/* Adding some subtle shadows to the table */
table {
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

/* Responsive table */
@media (max-width: 768px) {
    table, thead, tbody, th, td, tr {
        display: block;
        width: 100%;
    }
    
    tr {
        margin-bottom: 15px;
    }
    
    th, td {
        text-align: right;
        padding-left: 50%;
        position: relative;
    }
    
    th::before, td::before {
        content: attr(data-label);
        position: absolute;
        left: 10px;
        width: 45%;
        padding-right: 10px;
        text-align: left;
        font-weight: bold;
    }
    
    th, td {
        border: none;
        border-bottom: 1px solid #ddd;
    }
    
    thead {
        display: none;
    }
}


body {
            direction: rtl;
            text-align: right;
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #343a40;
        }
        .navbar {
            background-color: #ffffff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .navbar-brand img {
            width: 50px;
            transition: transform 0.3s ease;
        }
        .navbar-brand img:hover {
            transform: scale(1.1);
        }
        .nav-link {
            color: #343a40;
            transition: color 0.3s ease;
        }
        .nav-link:hover {
            color: #007bff;
        }
        .main-content h1 {
            font-weight: 700;
            color: #007bff;
            margin-bottom: 30px;
        }
        .main-content p {
            font-size: 1.1rem;
            color: #6c757d;
        }
        section {
            padding: 60px 0;
        }
        h2 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: #343a40;
            position: relative;
            display: inline-block;
        }
        
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            transition: background-color 0.3s ease, border-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .footer {
            background-color: #343a40;
            color: #ffffff;
            padding: 20px 0;
            text-align: center;
            margin-top: 60px;
        }
        .footer a {
            color: #007bff;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        .footer a:hover {
            color: #0056b3;
        }
		
		img {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 40%;
  
}

.hh{
  font-weight: bold;
}



	</style>
</head>

<body>
 <h1>بانوراما القصيم للبرمجة والتصميم صفحة عرض البيانات</h1>
<div class="container">
<table>
	
	<tr class="hh">
	<td> Name </td> 
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
</div>
</body>