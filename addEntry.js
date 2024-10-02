document.addEventListener('DOMContentLoaded', function() {
    document.getElementById("form").addEventListener("submit", function(event) {
        if (!checkEmptyForm()) {
            event.preventDefault();
        }
    });

    document.getElementById("clear").addEventListener("click", function(event) {
        event.preventDefault();
        clearForm();
    });
});

function clearForm() {
    if (confirm("Are you sure you would like to clear the form?")) {
        document.getElementById("form").reset();
        document.getElementById("content").style.borderColor = '';
        document.getElementById("title").style.borderColor = '';
        document.querySelectorAll('#form p')[0].style.visibility = 'hidden';
        document.querySelectorAll('#form p')[1].style.visibility = 'hidden';
        alert("Form has been cleared");
    }
}

function checkEmptyForm() {
    let isValid = true;
    const titleField = document.getElementById('title');
    const contentField = document.getElementById('content');
    const titleWarning = document.querySelectorAll('#form p')[0];
    const contentWarning = document.querySelectorAll('#form p')[1];

    function showError(field, warning, isEmpty) {
        if (isEmpty) {
            field.style.borderColor = 'red';
            warning.style.visibility = 'visible';
            isValid = false;
        } else {
            field.style.borderColor = '';
            warning.style.visibility = 'hidden';
        }
    }
    showError(titleField, titleWarning, titleField.value.trim() === "");
    showError(contentField, contentWarning, contentField.value.trim() === "");

    return isValid;
}
function previewForm(){
    var title = document.getElementById("title").value;
    var content = document.getElementById("content").value;
    localStorage.setItem("title", title);
    localStorage.setItem("content", content);
    window.location.href = "preview.php";
}