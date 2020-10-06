
<form method="POST" class="ena">
  <div class="row ">
  <div class="form-group col-md-6 col-12 col-sm-12">
    <label for="exampleFormControlSelect1">ENABLE DEPATRMENT<span style="color:red">*</span></label>
    <select name="update" class="form-control" id="exampleFormControlSelect1">
      <option value="1">Yes</option>
      <option value="0">No</option>      
    </select>
  </div>
  <div class="save col-md-6 col-12 col-sm-12 ">
    <div class="id" id="id" style="display:none;">
    <?php echo $_POST['id']; ?>
  </div>
  <div class="ra" id="ra" style="display:none;">
    <?php echo $_POST['rand']; ?>
  </div>
  
    <button  class="btn" style="background-color: #5cc1e0;" id="submit" name="submit"  >Update</button>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>

$("#submit").click(function(){

  var update = $("#exampleFormControlSelect1").find("option:selected").val();
  var id =document.getElementById("id").innerHTML;
 var rand= document.getElementById("ra").innerHTML;
 console.log(id);
          var input = {
                    "id": id,
                    "update" : update                    
          };
          $.ajax({
      type: "POST",
      url: "enable.php?id="+id,               
      data : input,
      beforeSend: function(){
        $("#submit").text("Loading...");
      },
      success: function(response){
        console.log(response);
         
            
      }
  });

});
 
      
  </script>
</div>
  </form>
