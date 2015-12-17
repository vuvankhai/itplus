/* isNumberKey
    Only allows NUMBERS to be keyed into a text field.
    @environment ALL
    @param evt - The specified EVENT that happens on the element.
    @return True if number, false otherwise.
*/
function isNumberKey(evt) {
	var charCode = (evt.which) ? evt.which : evt.keyCode;
	// Added to allow decimal, period, or delete
	if (charCode == 110 || charCode == 190 || charCode == 46) 
		return true;
	
	if (charCode > 31 && (charCode < 48 || charCode > 57)) 
		return false;
	
	return true;
} // isNumberKey