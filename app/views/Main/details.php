<html>
<head><title>Person details</title></head><body>
<h1>Person details</h1>
First Name: <input disabled type='text' name='first_name' value='<?php echo $data->firstName; ?>' /><br>
Last Name: <input disabled type='text' name='last_name' value='<?php echo $data->lastName; ?>' /><br>
Notes: <input disabled type='text' name='notes' value='<?php echo $data->notes; ?>' /><br>

<a href='/Main/index'>Back to list</a>
</body></html>