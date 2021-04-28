'use strict';

var fileLists = [];
    
function multlpleFilePreView(files) {
    var html = '';
    var createSpan = document.createElement("span");
    var createLi = document.createElement("li");

    createSpan.setAttribute("class", "remove_li");
    
    var reader = new FileReader();
    
    reader.onload = function (e) {
        switch(files[files.length - 1].type.split('/')[0]) {
            case 'image':
                var createNode = document.createElement('img');
                //console.log(e.target.result);
                createNode.src = e.target.result;
                createNode.width = 100;
                createNode.height = 100;
                break;

            case 'application':
                break;
        }
                
        createLi.appendChild(createSpan);
        createLi.appendChild(createNode);

        //reader.readAsDataURL(e);
    }

    reader.readAsDataURL(files[files.length - 1]);

    document.getElementById("fileView").appendChild(createLi);

    
}

function fileListsAdd() {
    var inputFile = document.getElementById("input_file");

    var _fileExeArr = ['exe', 'jsp', 'php', 'html'];
    var length = inputFile.files[0].name.length;
    var lastIndexLength = inputFile.files[0].name.lastIndexOf('.');

    var fileExeName = inputFile.files[0].name.substring(lastIndexLength + 1, length);
    
    if(_fileExeArr.indexOf(fileExeName) > -1) {
        alert("확장자를 확인 해주세요.");
        return;
    }

    var file = Array.prototype.slice.call(inputFile.files);

    fileLists.push(file[0]);

    multlpleFilePreView(fileLists);
}


window.addEventListener("load", function() {

    document.getElementById("file_add").addEventListener("click", function() {
        document.getElementById("input_file").click();
    });


    document.getElementById("input_file").addEventListener("change", function() {
        fileListsAdd();
    });

});
