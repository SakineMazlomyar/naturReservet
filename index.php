<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css"/>
</head>
<body>
<h1>Ange vad du söker!</h1><br>
    <form id="ajax" method="post" action="./result/resultTwo.php">
    <label>Apa</label>
    <input type="number" name='animalNumber1'>

    <label>Giraff</label>
    <input type="number" name='animalNumber2'>
    
    <label>Tiger</label>
    <input type="number" name='animalNumber3'>

    <label>Kokosnött</label>
    <input type="number" name='animalNumber4'>
    <input type="submit" name='subitAnimal' >
    </form>
</body>
</html>