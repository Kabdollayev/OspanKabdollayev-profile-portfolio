<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>Create_Post</title>
</head>
<body>
	<form method="POST" action="{{ route('add-post') }}">
    @csrf
    <input type="text" name="title" placeholder="title">
    <input type="text" name="body" placeholder="body">
    <button type="submit">Create</button>
    </form>
</body>
</html>