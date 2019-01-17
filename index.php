<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<h1>Ange vad du söker!</h1><br>
    <form id="ajax" method="post" action="./results.php">
    <label>Apa</label>
    <input type="number" name='animalNumber1'>

    <label>Giraff</label>
    <input type="number" name='animalNumber2'>
    
    <label>Tiger</label>
    <input type="number" name='animalNumber3'>

    <label>Kokosnött</label>
    <input type="number" name='animalNumber4'>
    <input type="submit">
    </form>
</body>
</html>