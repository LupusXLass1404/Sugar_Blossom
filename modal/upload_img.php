<form action="./api/upload_img.php?do=<?= $_GET['do'];?>" method="post" enctype="multipart/form-data">
    <div class="modal-header">
        <span class="modal-title" id="exampleModalLabel">Image Upload</span>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <input type="file" id="img" name="img" style="display:none" onchange="changeAgentContent()" />
        <input type="text" value="" disabled id="imgAgent" />
        <input type="button" onclick="document.getElementById('img').click()" value="Browse..." />
        <script type="text/javascript">
            function changeAgentContent() {
                document.getElementById("imgAgent").value = document.getElementById("img").value;
            }
        </script>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input type="submit" value="Upload" class="btn btn-primary"> 
    </div>
    <?php
        if(isset($_GET['id'])){
            echo "<input type='hidden' name='id' value='{$_GET['id']}'>";
        }
    ?>
</form>

<script>
  function updateLabel() {
    var fileName = document.getElementById('img').files[0]?.name || 'Choose a file';
    document.getElementById('file-label').textContent = fileName;
  }
</script>