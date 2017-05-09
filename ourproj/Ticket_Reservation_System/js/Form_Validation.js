/**
 * Created by Pension-IT on 3/1/2017.
 */

var nicValidate;
var pensionNoValidate;
var nameValidate;
var discriptionValidate;
function formValidation()
{
    if(nicValidate == true)
        if(pensionNoValidate == true)
            if(nameValidate == true)
                if(discriptionValidate == true)
                    return true;
                else
                    return false;
            else
                return false;
        else
            return false;
    else
        return false;
}

// Validation for name
function validationName(name)
{
    var letters = /^[A-Za-z \.]+$/;
        if (name.value.match(letters)) {
            document.getElementById("nameMessage").innerHTML = "<img src='images/ok.png' width='20' height='20' >";
            nameValidate = true;
            return true;
        }
        else {
            document.getElementById("nameMessage").innerHTML = "*Please enter letters only";;
            nameValidate = false;
            return false;
        }
}

// Validation for Pension Number
function validationPensionNo(pensionNo)
{
    var numbers = /^[0-9]+$/;
        if (pensionNo.value.match(numbers)) {
            document.getElementById("pensionNoMessage").innerHTML = "<img src='images/ok.png' width='20' height='20' >";
            pensionNoValidate = true
            return true;
        }
        else {
            document.getElementById("pensionNoMessage").innerHTML = "*Please enter numbers only";
            pensionNoValidate = false;
            return false;
        }
}

// Validation for Description
function validationDescription(description)
{
    if(description.value != "")
    {
        document.getElementById("descriptionMessage").innerHTML = "<img src='images/ok.png' width='20' height='20' >";
        discriptionValidate = true;
        return true;
    }
    else
    {
        document.getElementById("descriptionMessage").innerHTML = "*Please enter description";
        discriptionValidate = false;
        return false;
    }
}

// Validation for NIC
function validationNIC(NIC)
{
    var nic = /^[0-9]{9}[vVxX]$/;
    var newnic = /^[0-9]{12}$/;
        if (NIC.value.match(nic) || NIC.value.match(newnic)) {
            document.getElementById("nicMessage").innerHTML = "<img src='images/ok.png' width='20' height='20' >";
            nicValidate = true;
            return true;
        }
        else {
            document.getElementById("nicMessage").innerHTML = "*Please enter valid NIC (Example: 123456789V/ 123456789X/ 123456789123)";
            nicValidate = false;
            return false;
        }
}
