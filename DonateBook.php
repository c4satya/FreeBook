<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate Books</title>
    <link rel="stylesheet" href="donateForm.css">
</head>
<body>
    <div class="mainContainer">
    <h1>Donate Book</h1>
   
      
        <form action="" method="post">
            <Fieldset class="bookDetail">
            <legend><h2>Book Details</h2></legend>
            
            <label for="">Name Of Book:</label>
            <input type="text" required>
            <label for="">Author Name:</label>
            <input type="text">
            <label for="">Publications:</label>
            <input type="text" placeholder="Bharti Publications">
            <br><br>
            <label for="">Subject:</label>
            <input type="text" placeholder="Mathematics">
           
           
            <label for="">Language:</label>
            <select name="" id="">
                <option value="" selected>Hindi</option>
                <option value="">English</option>
                <option value="">French</option>
                <option value="">Urdu</option>
                <option value="">Bangla</option>
            </select>
            
           
           
            <label for="">Genere:</label>
            <select name="" id="">
                <option value="">TextBooks</option>
                <option value="">Nobel&amp;Story</option>
                <option value="">Compatative Exams</option>
                <option value="">Magzines</option>
                <option value="">IT&amp;Engineerings</option>
                <option value="">Ohters</option>

            </select>
            <label for="">Standard:</label>
            <select name="" id="">
                <option value="">1</option>
                <option value="">2</option>
                <option value="">3</option>
                <option value="">4</option>
                <option value="">5</option>
                <option value="">6</option>
                <option value="">7</option>
                <option value="">8</option>
                <option value="">9</option>
                <option value="">10</option>
                <option value="">11</option>
                <option value="">12</option>
                <option value="">Under Graduate</option>
                <option value="">Post Graduate</option>
            </select>
            <br><br>
            <br>
            <label for="" >Front Image:</label>
            <input type="file" id="imageInput" name="image" accept="image/*" required>
            <div class="description">
                 <label>Description:</label>
                 <textarea  name="" id=""></textarea>
             </div>
         
        </Fieldset>
        <fieldset class="donerDetail">
            <legend><h2>Doner Details</h2></legend>
            <label for="">Doner Name:</label>
            <input type="text" name="donerName" id="" required>
            <label for="">Doner Mobile No:</label>
            <input type="number" required>
            <label for="">e-mail:</label>
            <input type="email">
            <br>
            <label for="">Address:</label>
        
            <input type="live-location">
            
        </fieldset>
        <button type="submit">SUBMIT</button>
        <button type="reset">CLEAR</button>   



        </form>
    </div>
    
</body>
</html>