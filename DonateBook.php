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
   
      
        <form action="donate.php" method="post">
            <Fieldset class="bookDetail">
            <legend><h2>Book Details</h2></legend>
            
            <label for="book_name">Name Of Book:</label>
            <input type="text" name="bookName" id="book_name">
            <label for="">Author Name:</label>
            <input type="text" name="authorName">
            <label for="">Publications:</label>
            <input type="text" name="publication" placeholder="Bharti Publications">
          
            <label for="">Subject:</label>
            <input type="text" name="subject" placeholder="Mathematics">
           
           <div class="optionInput">
                        <label for="">Language:</label>
                        <select name="language" id="">
                            <option value="Hindi" selected>Hindi</option>
                            <option value="English">English</option>
                            <option value="French">French</option>
                            <option value="Urdu">Urdu</option>
                            <option value="Bangla">Bangla</option>
                        </select>
                        
                    
                    
                        <label for="">Category:</label>
                        <select name="category" id="">
                            <option value="TextBooks">TextBooks</option>
                            <option value="Litreture">Litreture</option>
                            <option value="Compatative Exams">Compatative Exams</option>
                            <option value="Magzines">Magzines</option>
                            <option value="IT/Engineerings">IT&amp;Engineerings</option>
                            <option value="Ohters">Ohters</option>

                        </select>
                        <label for="">Standard:</label>
                        <select name="standard" id="">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="UG">Under Graduate</option>
                            <option value="PG">Post Graduate</option>
                        </select>
           </div> 
            <div class="bootomContainer">

                     
                    <div class="bookImgContainer">
                        <label for="" >Front Image:</label>
                        <input type="file" id="imageInput" name="bookImage" accept="image/*" required>
                    </div>
                        <div class="description">
                            <label>Description:</label>
                            <textarea  name="bookDetail" id="" placeholder="Enter Book Description"></textarea>
                        </div>
            </div>        
        </Fieldset>
        <fieldset class="donerDetail">
            <legend><h2>Doner Details</h2></legend>
            <label for="">Doner Name:</label>
            <input type="text" name="donerName" id="" required>
            <label for="phone">Doner Mobile No:</label>
            <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" placeholder="1234567890" required>
            <label for="">e-mail:</label>
            <input type="email" name="e_mail" placeholder="abc@gmail.com">
            <br>
            <label for="">Address:</label>
        
            <input type="text" name="address">
            
        </fieldset>
       
        <button type="submit" class="abc">DONATE BOOK</button>



        </form>
        
    </div>
    <script src="donateBook.js"></script>
</body>
</html>