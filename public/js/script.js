updateList = function () {
    const input = document.getElementById("file");
    const output = document.getElementById("fileList");
    const children = "";
    for (let i = 0; i < input.files.length; ++i) {
        children += "<li>" + input.files.item(i).name + "</li>";
    }
    output.innerHTML = "<ul>" + children + "</ul>";
};
