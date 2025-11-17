<div class="admin-main">
    <div class="admin-left">
        <section id="carousel">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <?php
                        $rows = $Carousel -> all(['sh'=>1]);
                        foreach($rows as $row):
                    ?>
                    <div class="carousel-item active">
                        <img src="./upload/<?=$row['img'];?>" class="d-block w-100" >
                    </div>
                    <?php
                        endforeach;
                    ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
    </div>
    <div class="admin-right">
        <div class="admin-add px-4">
            <button id="add" class="admin-button" onclick="showModal('./modal/upload_img.php?do=<?=$_GET['do'];?>')">Add Image</button>
        </div>
        <form action="./api/save.php?do=<?=$_GET['do'];?>" class="admin-form" method="post">
            <div class="admin-row">
                <table id="data" class="admin-table">
                    <tr>
                        <th>Image</th>
                        <th width=30%>Change</th>
                        <th width=5%>Show</th>
                        <th width=5%>Delete</th>
                    </tr>

                    <?php
                        $do=ucfirst($_GET['do']);
                        $rows = $$do -> all();
                        foreach($rows as $row):
                    ?>

                    <tr>
                        <td>
                            <img src="./upload/<?=$row['img'];?>" alt="" width=80px>
                        </td>
                        <td>
                            <span class="btn btn-secondary admin-button" onclick="showModal('./modal/upload_img.php?do=<?=$_GET['do'];?>&id=<?=$row['id'];?>')">Change</span>
                        </td>
                        <td>
                            <input type="checkbox" name="sh[]" value="<?=$row['id'];?>" <?=($row['sh'] == 1) ? 'checked' : '';?>>
                        </td>
                        <td>
                            <input type="checkbox" name="del[]" value="<?=$row['id'];?>">
                        </td>
                        <input type="hidden" name="id[]" value="<?=$row['id'];?>">
                    </tr>

                    <?php
                        endforeach;
                    ?>

                </table>
            </div>
            <div class="admin-buttons">
                <input type="submit" value="Save changes" class="admin-button">
                <input type="reset" value="Reset" class="admin-button">
            </div>
        </form>
    </div>
</div>