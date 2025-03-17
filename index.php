<?php
require_once "functions.php";
$dischi = getDischi();
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Dischi</title>
    
    <style>
        body { font-family: Arial, sans-serif; text-align: center; }
        .disco { margin: 20px; display: inline-block; text-align: left; border: 1px solid #ccc; padding: 10px; border-radius: 5px; width: 200px;}
        #dischi-container { display: flex; flex-wrap: wrap; justify-content: center; }
        img { width: 150px; height: auto; }
    </style>
</head>
<body>
    <h1>Lista Dischi Musicali</h1>
    <div id="dischi-container">
        <?php foreach ($dischi as $disco): ?>
            <div class="disco">
                <img src="<?= htmlspecialchars($disco['cover']) ?>" alt="<?= htmlspecialchars($disco['titolo']) ?>">
                <h3><?= htmlspecialchars($disco['titolo']) ?></h3>
                <p><?= htmlspecialchars($disco['artista']) ?> (<?= htmlspecialchars($disco['anno']) ?>)</p>
            </div>
        <?php endforeach; ?>
    </div>

    <h2>Aggiungi un nuovo disco</h2>
    <div class="border">
    <form class="" action="server.php" method="POST">
        
        <input class="form-control" type="text" name="titolo" id="titolo" placeholder="Titolo" required>
        <label class ="form-label" for="titolo">Titolo</label><br>
   
       
        <input class="form-control" type="text" name="artista" id="artista" placeholder="Artista" required>
        <label class ="form-label" for="artista">Artista</label><br>
    
        
        <input class="form-control" type="url" name="cover" id="cover" placeholder="URL Copertina" required>
        <label class ="form-label" for="cover">Cover</label><br>
   
        
        <input class="form-control" type="number" name="anno" id="anno" placeholder="Anno" required>
        <label class ="form-label" for="anno">Anno</label><br>
    
       
        <input class="form-control" type="text" name="genere" id="genere" placeholder="Genere" required>
        <label class ="form-label" for="genere">Genere</label><br>
  
        <button class="btn btn-primary mt-4" type="submit">Aggiungi</button>
    </form>
</div>
</body>
</html>