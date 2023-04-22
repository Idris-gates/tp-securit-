<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP SECURITE</title>
    <style>
        input{
            
        }
        div{
            display:flex;
            justify-content:row;
            margin:5px;
        }
        input,label{
            width:300px
        }
        button{
            width:305px;
            height:30px
        }
    </style>
</head>
<body>
    <form action="traitementGenererCleDES.php" method="post">
        <h4>Question 1  (Génération)</h4>
        <div>
            <label for="">Entrez la clé:</label>
            <input type="text" name="key">
        </div>
        <div>
            <label for="">Entrez la fonction de permutation:</label>
            <input type="text" name="function">
        </div>
        <div style="width:605px;display:flex;justify-content:flex-end">
            <button type="submit">Soumettre</button>
        </div>
    </form>

    <form action="traitementChiffrement.php" method="post">
        <h4>Question 2  (Chiffrement)</h4>
        <div>
            <label for="">Entrez la clé:</label>
            <input type="text" name="N">
        </div>
        <div>
            <label for="">Entrez la clé privée(k1):</label>
            <input type="text" name="k1">
        </div>
        <div>
            <label for="">Entrez la clé publique(k2):</label>
            <input type="text" name="k2">
        </div>
        <div>
            <label for="">Entrez la fonction de permutation(pi):</label>
            <input type="text" name="pi">
        </div>
        <div>
            <label for="">Entrez la valeur de p:</label>
            <input type="text" name="p">
        </div>
        <div style="width:605px;display:flex;justify-content:flex-end">
            <button type="submit">Soumettre</button>
        </div>
    </form>
    <form action="traitementDechiffrement.php" method="post">
        <h4>Question 3 (Déchiffrement)</h4>
        <div>
            <label for="">Entrez la valeur chiffrée:</label>
            <input type="text" name="N">
        </div>
        <div>
            <label for="">Entrez la clé privée(k1):</label>
            <input type="text" name="k1">
        </div>
        <div>
            <label for="">Entrez la clé publique(k2):</label>
            <input type="text" name="k2">
        </div>
        <div>
            <label for="">Entrez la fonction de permutation(pi):</label>
            <input type="text" name="pi">
        </div>
        <div>
            <label for="">Entrez la valeur de p:</label>
            <input type="text" name="p">
        </div>
        <div style="width:605px;display:flex;justify-content:flex-end">
            <button type="submit">Soumettre</button>
        </div>
    </form>



</body>
</html>