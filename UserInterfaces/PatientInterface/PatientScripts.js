function submitForm() {
    const doctorName = document.getElementById('DoctorToBeSearched').value;
    const xhr = new XMLHttpRequest();

    xhr.open('POST', 'searchDoctorScript.php');
    xhr.onreadystatechange = () => {
        if (xhr.readyState === 4 && xhr.status === 200) {
            const response = JSON.parse(xhr.responseText);
            var message = response.message;

            console.log(message);


            var x = true;
            /*while (x) {
                var index = message.indexOf(" ");
                if (index == -1)
                    x = false;
                else 
                {
                    var sub=message.substring(0,index);
                    message = message.substring(index+1,response.length+1);
                    var show = "<li class=\"nav-item\"> <a class=\"nav-link active\" aria-current=\"page\" href=\"#\">"+sub+"</a></li>";
                    document.getElementById('founddoctor').innerHTML = show;
                }
            }*/
            
            
        }
    };
    
    const formData = new FormData();
    formData.append('doctorName', doctorName);

    xhr.send(formData);
}

function whenload()
{

}