function showPreview(ele) {
    $('#imgAvatar').attr('src', ele.value); // for IE
    if (ele.files && ele.files[0]) {

        var reader = new FileReader();

        reader.onload = function(e) {
            $('#imgAvatar').attr('src', e.target.result);
        }

        reader.readAsDataURL(ele.files[0]);
    }
}