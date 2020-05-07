<html>
    <head><meta charset="UTF-8"></head>
<body>
<h2>İletişim</h2>  
  <form action="iletişim1.php" method="POST">
  <b>Adınız ve Soyadınız:</b> 
    <input oninvalid="this.setCustomValidity('Please enter your name ')"
oninput="this.setCustomValidity('')" type="text" required name="ad-soyad" size="25"> <br>
    <br/>
     <b>Telefon:</b>  
      <input  type="text" name="tel" size="25"><br/>
    <br>
    <b>E-Posta Adrisiniz:</b> 
    <input oninvalid="this.setCustomValidity('Please enter  your email ')"
oninput="this.setCustomValidity('')" type="email" required name="email" size="25"><br><br>
      <b>Mesajınız:</b> 
       <textarea name="mesaj"  cols="40"  rows="8"></textarea>

  
    <br>
  
<input type="submit"  name="button" valu="Gonder">


  </form>
   
    
    
</body>
    
</html>