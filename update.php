<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <!-- ADMIN -->
      <form action="/create" enctype="multipart/form-data" method="POST">
        <input type="hidden" name="_method" value="PUT">   
   <label for="Brand"></label><input type="text" placeholder="Marque" name = 'Brand' value="<%=telephone.Brand%>"><br><br>
   <label for="Description"></label><input type="text" placeholder="Description" name = 'Description'value="<%=telephone.Description%>"><br><br>
   <label for="Model"></label><input type="text" placeholder="Modele" name = 'Model' value="<%=telephone.Model%>"><br><br>
   <label for="Image"></label><input type="file" placeholder="Image" name = 'Image'value="<%=telephone.Image%>"><br><br>
   <label for="Release"></label><input type="date" placeholder="Sortie" name = 'Release'value="<%=telephone.Release%>"><br><br>
   <label for="Price"></label><input type="number" placeholder="Prix" name = 'Price'value="<%=telephone.Price%>"><br><br>
   <input type="submit" name = "Submit">
     <input type="reset">
       </form>
    
</body>
</html>