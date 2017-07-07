<script>
$(document).ready(function() {
$('#my_form').keydown(function() {
var name = $("#name").val();
var email = $("#email").val();
var message = $("#message").val();
var key = e.which;
if (key == 13) {
if (name == "") {
alert("Name is Missing");
} else if (email == "") {
alert("Email Id is missing");
} else if (message == "") {
alert("Message is missing");
} else {
$('#my_form').submit();
alert("Form Submitted ...!!");
}
return false;
}
});
});
</script>
       