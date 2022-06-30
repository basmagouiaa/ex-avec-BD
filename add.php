<!DOCTYPE HTML>
<html>
    <head>
    <title>PRODUITS</title>
    <script>
        function addtolist()
        {
            document.getElementById('l').value = document.getElementById('l').value 
            + ' ' + document.getElementById('c').value 
        }
    
    </script>  
<body>

<form action="save.php" method="post">
designation: <input type="text" name="designation"><br>
quantite: <input type="text" name="quantite"><br>
prix: <input type="text" name="prix"><br>
<input type="submit">
<!-- <button type="button" onclick="addtolist()"> Ajouter </button> 
<button type="button" onclick="delete()"> Annuler </button>-->

</form>

</body>
</html>