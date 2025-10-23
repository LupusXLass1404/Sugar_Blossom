<div class="admin-main">
    <div class="admin-left">
        <section id="about">
            <div class="container">
                <div class="row">
                    <div class="about-imgs" style="widtg: 100%; height: 70vh; ">
                        <?php
                            $row = $About_image -> find(['left_sh'=>1]);
                        ?>
                        <div class="about-img com-img" style="background-image: url('./upload/<?=$row['img'];?>');">
                        </div>
                        <?php
                            $row = $About_image -> find(['right_sh'=>1]);
                        ?>
                        <div class="about-img com-img" style="background-image: url('./upload/<?=$row['img'];?>');">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="admin-right">
        <div class="admin-add px-4">
            <button id="add" class="admin-button" onclick="showModal('./modal/upload_img.php?do=<?=$_GET['do'];?>')">Add
                Image</button>
        </div>
        <form action="./api/save.php?do=<?=$_GET['do'];?>" class="admin-form" method="post">
            <div class="admin-row">
                <table id="data" class="admin-table">
                    <tr>
                        <th>Image</th>
                        <th width=30%>Change</th>
                        <th width=5%>Left</th>
                        <th width=5%>Right</th>
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
                            <span class="btn btn-secondary admin-button"
                                onclick="showModal('./modal/upload_img.php?do=<?=$_GET['do'];?>&id=<?=$row['id'];?>')">Change</span>
                        </td>
                        <td>
                            <input type="radio" name="left_sh" value="<?=$row['id'];?>"
                                <?=($row['left_sh'] == 1) ? 'checked' : '';?>>
                        </td>
                        <td>
                            <input type="radio" name="right_sh" value="<?=$row['id'];?>"
                                <?=($row['right_sh'] == 1) ? 'checked' : '';?>>
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
                <input type="submit" value="Save" class="admin-button">
                <input type="reset" value="Reset" class="admin-button">
            </div>
        </form>
    </div>
</div>