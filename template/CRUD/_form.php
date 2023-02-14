

<div class="container-fluid">
<div class="row">
<div class="col-1"></div>
<div class="col-10">
<?php echo "<form action='{$action}' method='POST' enctype='multipart/form-data'>"?>

<?php   if(!isset($result['id'])){
        $result['id'] = '';
    }
?>
        <input value="<?php echo $result['id'];?>" name="id" type="hidden" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    <div class="input-group mb-3 w-75">
        <span class="input-group-text" id="inputGroup-sizing-default">Title</span>
        <input value="<?php echo $result['title'];?>" name="title" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
    <div class="input-group mb-3 w-75">
        <span class="input-group-text w-25" id="basic-addon3">http://test1.ua/</span>
        <input type="text" class="form-control" name="url"  id="basic-url" aria-describedby="basic-addon3" value="<?php echo $result['url'];?>">
    </div>
    <div class="input-group w-75 my-3">
        <span class="input-group-text">Article header</span>
        <textarea class="form-control" name="descr_min"  aria-label="With textarea"><?php echo $result['descr_min'];?></textarea>
    </div>
    <div class="input-group w-75 my-3">
        <span class="input-group-text">Article content</span>
        <textarea class="form-control" name="description" aria-label="With textarea"><?php echo $result['description'];?></textarea>
    </div>
    <div class="input-group mb-3 w-75">
        <label class="input-group-text" for="inputGroupSelect01">Category</label>
        <select class="form-select" id="inputGroupSelect01" name="cid">
        <?php
            $out = '';
            for($i=0; $i < count($category); $i++) {
                if ($category[$i]['id'] ===  $result['cid']){
                    $out .= '<option value="' . $category[$i]['id'] . '" selected>' . $category[$i]['title'] . "</option>";
                }
                else {
                    $out .= '<option value="' . $category[$i]['id'] . '">' . $category[$i]['title'] . "</option>";
                }
            }
            echo $out;
            ?>
        </select>
    </div>
    <div class="input-group w-75">
        <input type="file" name="image" value="<?php echo $result['image'];?>" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
    </div>
    <input value="<?php echo $result['image'];?>" name="imageName" type="hidden">
    <?php
    if (isset($result['image']) AND $result['image']!='') {
        echo '<img class="m-5" style="width:20%;" src="/static/images/'.$result['image'].'">';
    }
    ?>
    <p> <input class="btn btn-success my-5 px-5 py-2" type="submit" name="submit" value="<?php echo $action;?>"></p>
</form>
</div>
<div class="col-1"></div>
</div>
</div>
