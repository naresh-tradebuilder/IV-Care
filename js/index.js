$(document).ready(function() {
    $.validate({
        form: "#locations",
        ignore: [],
        validateHiddenInputs: true,
        onSuccess: function($form) {
            leadhome('locations', 'A new lead from Glee.', 'Please login to IMK Platform to follow-up.', 'Location-Form', 'location-message');
            return false;
        },
    });
    $.validate({
        form: "#abouts",
        ignore: [],
        validateHiddenInputs: true,
        onSuccess: function($form) {
            leadhome('abouts', 'A new lead from Glee.', 'Please login to IMK Platform to follow-up.', 'Consultation-Form', 'about-message');
            return false;
        },
    });
    $.validate({
        form: "#prices",
        ignore: [],
        validateHiddenInputs: true,
        onSuccess: function($form) {
            leadhome('prices', 'A new lead from Glee.', 'Please login to IMK Platform to follow-up.', 'Launch-offer $250 Off', 'price-message');
            return false;
        },
    });
    function leadhome(formId, subject, message, type, alertMsg) {

        var leadData;
        leadData = objectifyForm($("#" + formId).serializeArray());
        console.log(leadData); 

        if (leadData.contactNumber) {
            leadData.contactNumber = leadData.contactNumber.replace(/[-() ]+/g, "");
            leadData.contactNumber = "+1" + leadData.contactNumber;
        }
        if(leadData.g-recaptcha-response){
            leadData.g-recaptcha-response = "";
        }
        console.log('formId', SERVER_URL);



        if(SERVER_URL == 'https://prod.imkloud.com'){
            console.log('leadsquared');
            leadsquared(leadData,formId);
        }



        $("#" + formId + " .theme-btn").prop('disabled', true);
        console.log("leadData", leadData);
        $.ajax({
            url: SERVER_URL + "/api/v1/cta/" + user_id + "/" + group + "?type=" + type + "&isOpportunity=true",
            type: "POST",
            contentType: 'application/x-www-form-urlencoded',
            crossDomain: true,
            data: {
                meta: leadData,
                subject: subject,
                message: message
            },
            success: function(res) {
                console.log(res, 'response');
                $("#" + formId + " .theme-btn").prop('disabled', false);
                if (res.success) {
                    if (alertMsg) {
                        $("#" + formId)[0].reset();
                        $("#" + alertMsg).removeClass('hidden');
                        $("#" + alertMsg).addClass('alert-success');
                        if (formId == 'enquiry' || formId == 'contact') {
                            $("#" + formId)[0].reset();
                            $("#" + alertMsg).removeClass('hidden');
                            $("#" + alertMsg).addClass('alert-success');
                            $("#" + alertMsg).addClass("alert-success check").fadeIn().delay(2000).fadeOut();
                            $("#" + alertMsg).html("Message sent!");
                            setTimeout(function(){ 
                                window.location.href = siteUrl + "/new-city-form-thankyou.html"; 
                            }, 4000);
                        }
                        if (alertMsg) {
                            $("#" + formId)[0].reset();
                            $("#" + alertMsg).removeClass('hidden');
                            $("#" + alertMsg).addClass('alert-success');
                            $("#" + alertMsg).addClass("alert-success check").fadeIn().delay(5000).fadeOut();
                            $("#" + alertMsg).html("Thank you for your interest. We will get in touch with you soon !");
                            $("#buypupp").attr('class', 'buypupp');
                            $(".blinker").fadeOut();
                            setTimeout(function(){ 
                                if(formId == 'abouts' || formId == 'locations'){
                                    window.location.href = "/new-city-form-thankyou.html";
                                }
                                else if(formId == 'prices'){
                                    window.location.href = "/floating-button-form-thankyou.html";                            
                                }
                            }, 4000);
                        }
                    }
                } else {
                    $("#" + formId)[0].reset();
                    $("#" + alertMsg).removeClass('hidden');
                    $("#" + alertMsg).addClass('alert-warning');
                    $("#" + alertMsg).html('Something went wrong, please try again.');
                }
            },
            error: function(err) {
                console.log(err, 'error');
                $("#" + formId)[0].reset();
                $("#" + alertMsg).removeClass('hidden');
                $("#" + alertMsg).addClass('alert-warning');
                $("#" + alertMsg).html('Something went wrong, please try again.');
            },
        });
        return false;
    }
    function objectifyForm(formArray) {
        returnArray = {};
        for (var i = 0; i < formArray.length; i++) {
            returnArray[formArray[i]['name']] = formArray[i]['value'];
        }
        return returnArray;
    }
});



function leadsquared(leadData,formId){
    if(formId == 'locations')
        {  
            console.log('locationsId');
            var  jsonData =  [
                {
                    Attribute: "EmailAddress",
                    Value: leadData.emailId
                },
                {
                    Attribute: "FirstName",
                    Value: leadData.firstName
                },
                {
                    Attribute: "Phone",
                    Value: leadData.contactNumber
                },
                {
                    Attribute: "Notes",
                    Value: leadData.Zip
                }
            ]
        }
        if(formId == 'abouts')
        {  
            console.log('aboutsId');
            var  jsonData =  [
                {
                    Attribute: "EmailAddress",
                    Value: leadData.emailId
                },
                {
                    Attribute: "FirstName",
                    Value: leadData.firstName
                },
                {
                    Attribute: "Phone",
                    Value: leadData.contactNumber
                },
                {
                    Attribute: "Notes",
                    Value: leadData.Calltime
                }
            ]
        }
        if(formId == 'prices')
        {  
            console.log('pricesID');
            var  jsonData =  [
                {
                    Attribute: "EmailAddress",
                    Value: leadData.emailId
                },
                {
                    Attribute: "FirstName",
                    Value: leadData.firstName
                },
                {
                    Attribute: "Phone",
                    Value: leadData.contactNumber
                },
                {
                    Attribute: "Notes",
                    Value: leadData.message
                }
            ]
        }

        var json = JSON.stringify(jsonData);
        console.log(jsonData);
        $.ajax({
            url:'https://api-us11.leadsquared.com/v2/LeadManagement.svc/Lead.CreateOrUpdate?postUpdatedLead=false&accessKey=u$ree02bfbb4714ac15d03ca64bd9c64cd3&secretKey=3332205530267ca54c69597eb5cb98c6856987df',
            type: "POST",
            contentType: "application/json",
            crossDomain: true,
            dataType: "json",
            data: json,
            success: function(res) {
                console.log(res, 'response');
            },
            error: function(err) {
                console.log(err, 'error');
            },
        });
}
