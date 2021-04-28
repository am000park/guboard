<link rel="stylesheet" href="<?php echo $board_skin_url; ?>/multi/css/style.css">
<script type="text/javascript" src="<?php echo $board_skin_url; ?>/multi/js/multi_file.js"></script>

<section id="multi_file_container">
    <input type="file" name="file" id="input_file" accept="image/*" multiple>

    <div>
        <button type="button" id="file_add" class="btn btn-blue">파일추가</button>
        <button type="button" id="file_delete" class="btn btn-red">파일지우기</button>
    </div>
    <div>
        <progress id="process_status" value="1" max="<?php echo $file_count ?>"></progress>
        <div id="file_view_wrap">
            <!-- <img src="" id="fileView"> -->
            <ul id="fileView"></ul>
        </div>
    </div>
</section>

