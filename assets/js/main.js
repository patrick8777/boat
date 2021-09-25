function setData(id) {
    $.ajax({
        url: "php/boatInfo.php",
        type: "POST",
        data: { id: id },
        dataType: "json",
        success: function (result) {
            document.getElementById("modalTitle").innerHTML = result.title;
            document.getElementById("modalDescription").innerHTML = result.description;
            document.getElementById("imgSrc").src = result.image;
            alert(image);
        },
        error: function (error) {
            console.log(error);
        }
    })
}