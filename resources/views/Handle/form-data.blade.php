<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="/data-handle/form" method="post">
    @csrf
    <h1>Form Data</h1>
    <div>Even Name</div>
    <input type="text" name="eventName" >
    <div>Band Name</div>
    <input type="text" name="bandNames">
    <div>Start Date</div>
    <input type="text" name="startDate">
    <div>End Date</div>
    <input type="text" name="endDate">
    <div>Portfolio</div>
    <input type="text" name="portfolio">
    <div>ticketPrice</div>
    <input type="text" name="ticketPrice">
    <div>status</div>
    <input type="text" name="status" style="display: block">
    <input type="submit" name="submit">
</form>
</body>
</html>
