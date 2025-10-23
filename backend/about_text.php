<div class="admin-main">
    <div class="admin-left con-cent">
        <section id="about">
            <div class="container py-5">
                <div class="row py-5">
                    <div class="col-lg-12">
                        <?php
                            $row = $About_text -> find(['sh'=>1]);
                        ?>
                        <p>About Sugar Blossom</p>
                        <h1><?=$row['title'];?></h1>
                        <br>
                        <p><?=$row['text'];?></p>
                        <br>
                        <hr>
                        <br><br>
                        <button class="admin-button">Contact Us</button>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="admin-right">
        <div class="admin-add px-4">
            <button id="add" class="admin-button">Add Data</button>
        </div>
        <form action="./api/save.php?do=<?=$_GET['do'];?>" class="admin-form" method="post">
            <div class="admin-row">
                <table id="data" class="admin-table">
                    <tr>
                        <th>Title</th>
                        <th>Text</th>
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
                            <input type="text" name="title[]" value="<?=$row['title'];?>" class="input-text">
                        </td>
                        <td>
                            <textarea type="text" name="text[]" class="input-text"><?=$row['text'];?></textarea>
                        </td>
                        <td>
                            <input type="radio" name="sh" value="<?=$row['id'];?>" <?=($row['sh'] == 1) ? 'checked' : '';?>>
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

<script>
    $('#add').on('click', function(){
        $('#data').append(`
                    <tr>
                        <td>
                            <input type="text" name="add[title][]" value="" class="input-text">
                        </td>
                        <td>
                            <textarea name="add[text][]" value="" class="input-text"></textarea>
                        </td>
                        <td></td>
                        <td></td>
                    </tr>
        `)
    })
</script>