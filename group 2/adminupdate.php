 <?php
  require_once "./template/headeradmin.php";
  session_start();

  ?>
 <div class="info1">
   <p>
     <h1>Recommed books
     </h1>
   </P>
 </div>


 <form method="post" action="normaluserser2.php" enctype="multipart/form-data">
   <table class="table">
     <th>course</th>
     <td> <select name="course">
         <option value="">course</option>
         <option value="all">all</option>
         <option value="ct">ct</option>
         <option value="cs">cs</option>
         <option value="cis">cis</option>
         <option value="se">se</option>
       </select>
     </td>
     <tr>

       <th>ISBN</th>
       <td><input type="text" name="isbn"></td>
     </tr>
     <tr>
       <th>Title</th>
       <td><input type="text" name="title" required></td>
     </tr>
     <tr>
       <th>Author</th>
       <td><input type="text" name="author" required></td>
     </tr>
     <tr>
       <th>Image</th>
       <td><input type="file" name="image"></td>
     </tr>
     <tr>
       <th>Description</th>
       <td><textarea name="descr" cols="40" rows="5"></textarea></td>
     </tr>
     <tr>
       <th>Price</th>
       <td><input type="text" name="price" required></td>
     </tr>
     <tr>
       <th>Publisher</th>
       <td><input type="text" name="publisher" required></td>
     </tr>
     <tr>

       <th>book</th>
       <td> <input type="file" name="myfile"> <br></td>
     </tr>

   </table>
   <input type="submit" name="add" value="Add new book" class="btn btn-primary">
   <input type="reset" value="cancel" class="btn btn-default">
 </form>
 <br />

 <?php
  require_once "./template/footer.php";
  ?>
 </div>

 </body>

 </html>