// JavaScript Document

function doShow(file)
{
	 if (file.files && file.files[0])
	{
    	var reader = new FileReader();
        reader.onload = function (e) {
        	$('#prev').attr('src', e.target.result);
            }
           	reader.readAsDataURL(file.files[0]);
    }
}
